<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';

    protected $fillable = [
        'vehicle_class',
        'vehicle_type',
        'no_of_passenger',
        'no_of_plate',
        'make',
        'model',
        'year',
        'no_of_luggage',
        'taxi_badge',
        'insurance',
    ];
}
