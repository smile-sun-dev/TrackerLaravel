<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $table = 'bookings';
    protected $fillable = [
        'booking_type', 'booking_date', 'no_of_passenger', 'no_of_vehicles','user_id','bill_amount','miles','no_of_vehicles','order_number','admin_email_body','user_email_body'
        
    ];
    
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id' , 'id');
    }

    public function types(){
        return $this->belongsTo('App\Models\BookingType', 'booking_type' , 'id');
    }
    public function get_vehicle(){
        return $this->belongsTo('App\Models\Vehicle', 'no_of_vehicles' , 'id');
    }
}
