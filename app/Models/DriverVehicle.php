<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverVehicle extends Model
{
    use HasFactory;

    protected $table = 'driver_vehicle';

    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'allotted_date',
    ];
}
