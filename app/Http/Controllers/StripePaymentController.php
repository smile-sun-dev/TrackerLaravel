<?php
    
namespace App\Http\Controllers;
     
use Illuminate\Http\Request;
use Session;
use App\Models\Bookings;

use Illuminate\Support\Facades\Crypt;

use App\Mail\MailContact;
use Mail;
use Stripe;
     
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout($id = '')
    {
        $data = array();
        try {
            $dy_id =  Crypt::decryptString($id);
            $booking = Bookings::find($dy_id);
            
            if(env('MERCHANT') == "Sandbox"){
               \Stripe\Stripe::setApiKey(env('SANDBOX_STRIPE_SECRET'));
            }else{
                \Stripe\Stripe::setApiKey(env('LIVE_STRIPE_SECRET'));
            }
            

            $amount = $booking->bill_amount;
            $intent = \Stripe\PaymentIntent::create([
                'amount' => ($amount)*100,
                'currency' => 'gbp',
                'metadata' => ['integration_check'=>'accept_a_payment'],
                'statement_descriptor' => "Order #".$booking->id,
                'description' => "Payment from - ".env('APP_NAME'),
            ]);
            
            $data = array(
                'email'=> $booking->user->email,
                'amount'=> $amount,
                'client_secret'=> $intent->client_secret,
            );    
            
            
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error: No Record Found');
        }
        
        return view('checkout')->with(compact('booking','id','data'));
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request)
    {
        
        try {
            $dy_id =  Crypt::decryptString($request->key);
            $booking = Bookings::find($dy_id);
        } catch (Exception $e) {
            $resp['status'] = '404';
            $resp['message'] = 'Error: No Booking Record Found';
            return response()->json($resp,404) ;
        }
        
        $booking->transaction_id = $request->payment_id;
        $booking->resp_data = $request->response;
        $booking->paid_amount = $request->paid_amount;
        $booking->is_paid = 1;
        $booking->paid_date = date('Y-m-d');
        $booking->save();
        
        $mail = Mail::to(env('SEND_BOOKING_EMAIL'))->send(new MailContact($booking->admin_email_body));
        $user_mail = Mail::to($booking->user->email)->send(new MailContact($booking->user_email_body));
        
        $resp['status'] = '200';
        $resp['message'] = 'Payment record saved';
        $resp['redirect_url'] = env('SUCCESS_REDIRECT_URL');
        return response()->json($resp,200) ;
        
    }
}