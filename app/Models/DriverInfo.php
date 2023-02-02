<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverInfo extends Model
{
    use HasFactory;

    protected $table = 'driver_vehicle';

    protected $fillable = [
        'driver_id',
        'licence',
        'certificate_of_compliance',
        'date_of_birth',
        'address',
        'bank_details',
        'sort_code',
        'a_number',
        'bac_number',
    ];
}
