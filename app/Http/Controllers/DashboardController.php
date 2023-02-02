<?php

namespace App\Http\Controllers;
use App\Models\Bookings;
use App\Models\BookingLocation;
use App\Models\User;
use Illuminate\Http\Request;

use Auth;
class DashboardController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        $to = date('Y-m-d');
        $from = date('Y-m-d',strtotime('-7 days'));
        $bookings = Bookings::with('user')->whereBetween('booking_date', [$from, $to])->where("is_active", 1)->orderBy("created_at")->get();
        $all_booking = Bookings::all(); 
        $paid_booking = Bookings::where('is_paid','1')->get();
        $total_earnings = 0;
        foreach($paid_booking as $book){
                $total_earnings += $book->bill_amount;
        }
        $total_users = user::all();

    

        

        return view('admin.dashboard')->with(compact('bookings','all_booking','paid_booking','total_earnings','total_users','total_users'));
    }
    
    // public function bookingmanagment(){
    //     $user = Auth::user();
    //     $bookingmanagment = bookingmanagment::where("is_active", 1)->orderBy("created_at")->get();
    //     return view('admin.bookingmanagment')->with(compact('bookingmanagment'));
    // }

    public function bookingmanagment(){
        $user = Auth::user();
        $bookings = Bookings::with('user')->where("is_active", 1)->orderBy("created_at")->get();
        
        return view('admin.bookingmanagment')->with(compact('bookings'));
    }

   

    public function user(){
        $user = Auth::user();
        $users = User::where("is_active", 1)->orderBy("created_at")->get();
        return view('admin.user')->with(compact('users'));
    }

    public function mapview($id){
        
        $booking_locations = BookingLocation::where([
            ['booking_id', $id],
            ['latitude','!=','']
            
        ])->get();


        $booking_locations_array = [];

        $last_booking = count($booking_locations) - 1;

        $booking_locations_array[] .= $booking_locations[0]->latitude;
        $booking_locations_array[] .= $booking_locations[0]->longitutde;
        $booking_locations_array[] .= $booking_locations[$last_booking]->latitude;
        $booking_locations_array[] .= $booking_locations[$last_booking]->longitutde;
        
        // dd($booking_locations_array);
        
        return view ('admin.mapview')->with(compact('booking_locations_array'));
    }
   
}

   
