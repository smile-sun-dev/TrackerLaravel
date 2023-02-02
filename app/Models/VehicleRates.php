<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class VehicleRates extends Model
{
    use HasFactory;

    protected $table = 'vehicle_rates';

    protected $fillable = [
        'vehicle_id',
    ];
    
    public function get_vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle','vehicle_id','id');
    }
    
}
