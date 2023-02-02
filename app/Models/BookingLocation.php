<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingLocation extends Model
{
    use HasFactory;

    protected $table = 'booking_locations';
    protected $fillable = [
        'address', 'longitutde','parent_booking_locations','booking_id',
        'pin_location','postalcode','latitude'
    ];
}
