<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleRates;
use App\Models\Bookings;
use App\Models\BookingLocation;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\Mail\MailContact;
use Mail;
use Auth;


class IndexController extends Controller
{
    function __construct(Request $request)
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('home');
    }

    public function booking()
    {
        $title = "Booking Application";
        $vehicles = Vehicle::all();
        // dd(Hash::make('admin321'));
        return view('booking')->with(compact('title','vehicles'));
    }
        
        
    private function get_miles($long,$lat){
        
        $miles_total = 0;
        $api_key = env('API_KEY');
        if(isset($lat[2]['value']) && $lat[2]['value'] == ""){
            $linked = "origins=".$lat[0]['value']."%2C".$long[0]['value']."&destinations=".$lat[1]['value']."%2C".$long[1]['value'];
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/distancematrix/json?'.$linked.'&key='.$api_key);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            
            $result = curl_exec($ch);
            $result =json_decode($result , true);
            if($result['status'] == "OK"){
                $miles = $result['rows'][0]['elements'][0]['distance']['text'];  
                $miles = str_replace(" km", "" , $miles);
                $miles_total = $miles;
            }else{
                $miles_total = 0;
            }
            
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
        
        }else{
            
            
            
            $linked = "origins=".$lat[0]['value']."%2C".$long[0]['value']."&destinations=".$lat[1]['value']."%2C".$long[1]['value'];
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/distancematrix/json?'.$linked.'&key='.$api_key);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                
            $result = curl_exec($ch);
            $result =json_decode($result , true);
            if($result['status'] == "OK"){
                
                $miles_1 = $result['rows'][0]['elements'][0]['distance']['text'];  
                $miles_1 = str_replace(" km", "" , $miles_1);
                $miles_total = $miles_1;
            }else{
                $miles = 0;
            }
            
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
            
            
            
            $linked = "origins=".$lat[2]['value']."%2C".$long[2]['value']."&destinations=".$lat[3]['value']."%2C".$long[3]['value'];
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/distancematrix/json?'.$linked.'&key='.$api_key);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                
            $result = curl_exec($ch);
            $result =json_decode($result , true);
            if($result['status'] == "OK"){
                
                $miles_2 = $result['rows'][0]['elements'][0]['distance']['text'];  
                $miles_2 = str_replace(" km", "" , $miles_2);
                $miles_total = $miles_total + $miles_2;
            }else{
                $miles_2 = 0;
                $miles_total = $miles_total + $miles_2;
            }
            
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
            
        }
        return $miles_total;
    }
    
    public function calc_miles(){
        
        $airport_charges = 0;
        foreach ($_POST['calc_locations'] as $key => $value){
            if( strpos( strtolower($value), 'airport' ) !== false) {
                $airport_charges = $airport_charges + 10;
            }    
        }
        
        $longitutde_data = $_POST['longitutde_data'];
        $latitude_data = $_POST['latitude_data'];
        
        $_POST['get_miles'] = $this->get_miles($longitutde_data,$latitude_data);
        
        if(isset($_POST['get_miles'])){
            //$vehicle_id = $_POST['vehicle_id'];
            $miles = round($_POST['get_miles'] * 0.621371);

            $vehicle_rate = VehicleRates::where('range_start' , '<=' , $miles)->where('range_end' , '>' , $miles)->get();
            
            
            $body = '';
            foreach($vehicle_rate as $key=> $rates){
                $vehicle_info = $rates->get_vehicle;
                
                $vehicle_pic = asset($vehicle_info->vehicle_picture);
                
                $total_amount = ($rates->starting_amount * $miles)+$airport_charges;
                $body .= '<label style="" data-passanger="'.$vehicle_info->no_of_passenger.'" class="vehicle-selection col-xl-4 col-lg-6"  data-luggage="'.$vehicle_info->no_of_luggage.'" data-rt="'.$rates->starting_amount.'" data-ml="'.$miles.'" data-amt="'.$total_amount.'">
                                <input type="radio" name="vehicle_id" value="'.$vehicle_info->id.'" />
                                <div class="">
                                
                               
                                    <h5>'.$vehicle_info->vehicle_class.'</h5>
                                    <img src="'.$vehicle_pic.'" title="'.$vehicle_info->vehicle_class.' | '.$vehicle_info->vehicle_type.' | '.$vehicle_info->no_of_passenger.' passengers space" alt="Option '.($key+1).'" />
                                    <div class="row">
                                        <div class="col-sm-4"><p>Passenger: '.$vehicle_info->no_of_passenger.'</p></div>
                                        <div class="col-sm-4"><p>Luggage: '.$vehicle_info->no_of_luggage.'</p></div>
                                        <div class="col-sm-4"><p>Hand Luggage: '.$vehicle_info->no_of_luggage.'</p></div>
                                    </div>
                                    <div class="book-btn">£ '.$total_amount.' | BOOK NOW <br> Total Miles ('.$miles.' * '.$rates->starting_amount.' + '.$airport_charges.' )</div>
                                </div>
                            </label>';
            }

                            
            if(count($vehicle_rate) > 0){
               return $body;
            }else{
                return $body;
            }
        }
    }

    public function booking_submit(){
        
        $_POST['rate'] = $_POST['rt'];
        $_POST['miles'] = $_POST['ml'];
        
        // Change to Door number
        $_POST['pickup_door_number'] = $_POST['pick_street_address'];
        $_POST['drop_door_number'] = $_POST['drop_street_address'];
        // For return
        $_POST['return_pick_door_number'] = $_POST['return_pick_street_address'];
        $_POST['return_drop_door_number'] = $_POST['return_drop_street_address'];
        
        
        
        $vehicle = Vehicle::find($_POST['vehicle_id']);
        $_POST['amount'] = ($_POST['rt'] * $_POST['ml']) + $vehicle->first_mile_rate;
        
        $_POST['vehicle_name'] = $vehicle->vehicle_class;
        $_POST['vehicle_passengers_allow'] = $vehicle->no_of_passenger;
        $_POST['vehicle_luggage_allow'] = $vehicle->no_of_luggage;
        $token_ignore = ['_token' => '','via_location' => ''
            ,'via_full_address' => ''
            ,'via_postal_code' => ''
            ,'return_date' => ''
            ,'hours' => ''
            ,'rt' => ''
            ,'ml' => ''
            ,'amt' => ''
        ];

        $post_feilds = array_diff_key($_POST, $token_ignore);
        
        $find_user = User::where("email" , $post_feilds['email'])->first();
        
        if($find_user){
            $user_id = $find_user->id;
        }else{
            $user = User::create([
                'type' => 2,
                'name' => $post_feilds['name'],
                'email' => $post_feilds['email'],
                'phonenumber' => $post_feilds['contact_number'],
                'password' => Hash::make($post_feilds['contact_number'])
            ]);
            $user_id = $user->id;
        }
        
       
        $booking = Bookings::create([
            'user_id' => $user_id,
            'booking_type' => ($post_feilds['type'] == 'One Way'?1:2),
            'booking_date' => $post_feilds['pickup_date'],
            'return_date' => $post_feilds['pickup_date'],
            'no_of_passenger' => $post_feilds['vehicle_passengers_allow'],
            'bill_amount' => $post_feilds['amount'],
            'miles' => $post_feilds['miles'],
            'no_of_vehicles' => $vehicle->id,
            'order_number' => "Prestige-".Str::random(15)
        ]);
        
        
        foreach($post_feilds['longitutde'] as $key => $temp){
            
            $booking_location = BookingLocation::create([
                'parent_booking_locations' => $key,
                'booking_id' => $booking->id,
                'pin_location' => $post_feilds['pickup_location'],
                'postalcode' => $post_feilds['pickup_full_address'],
                'address' => $post_feilds['pick_street_address'],
                'longitutde' => $post_feilds['longitutde'][$key],
                'latitude' => $post_feilds['latitude'][$key],
            ]);
        }
        
        $token_ignore = [
            'pick_street_address' => ''
            ,'drop_street_address' => ''
            ,'return_pick_street_address' => ''
            ,'return_drop_street_address' => ''
        ];

        $post_feilds = array_diff_key($post_feilds, $token_ignore);
        
        $details = "<tbody>";
        foreach ($post_feilds as $key => $value) {
            if($key != 'longitutde' && $key != 'latitude' && $value != "" && $value != "None"){
                if($key == 'amount'){
                    $key = str_replace('_', ' ', $key);
                    $details .= "<tr><td style='padding:10px;width:50%'><b>".ucwords($key)."</b></td> <td style='padding:10px;width:50%;text-align: right;'> £ ".$value."</td></tr>";
                }
                else{
                    $key = str_replace('_', ' ', $key);
                    $details .= "<tr><td style='padding:10px;width:50%'><b>".ucwords($key)."</b></td> <td style='padding:10px;width:50%;text-align: right;'> ".$value."</td></tr>";
                }
            }
        }

        $details .= "</tbody>";
        
        $user_details = "<tbody>";
        foreach ($post_feilds as $key1 => $value1) {
            if($key1 != 'longitutde' && $key1 != 'latitude' && $key1 != 'bill_amount' && $key1 != 'miles' && $value1 != "" && $value1 != "None"){
                if($key1 == 'amount'){
                    $key1 = str_replace('_', ' ', $key1);
                    $user_details .= "<tr><td style='padding:10px;width:50%'><b>".ucwords($key1)."</b></td> <td style='padding:10px;width:50%;text-align: right;'> £ ".$value1."</td></tr>";
                }
                else{
                    $key1 = str_replace('_', ' ', $key1);
                    $user_details .= "<tr><td style='padding:10px;width:50%'><b>".ucwords($key1)."</b></td> <td style='padding:10px;width:50%;text-align: right;'> ".$value1."</td></tr>";
                }
            }
        }

        $user_details .= "</tbody>";
        
        $booking->admin_email_body = $details;
        $booking->user_email_body = $user_details;
        $booking->save();
        
        // $mail = Mail::to(env('SEND_BOOKING_EMAIL'))->send(new MailContact($details));
        
        $enc_id = Crypt::encryptString($booking->id);
        return redirect()->route('checkout',[$enc_id])->with('message', 'You booking in on pending');
        //return redirect('https://prestige.testlivesite.com/thank-you/');
    }
    
    public function get_location(){
        $title = "Location";
        return view('location')->with(compact('title'));
    }

    public function add_project(){
        return view('project.create');
    }

    public function add_floor(){
        return view('project.add-project');
    }

    public function project_step0(){
        return view('project.project-step0');
    }
    public function project_step1(){
        return view('project.project-step1');
    }
}
