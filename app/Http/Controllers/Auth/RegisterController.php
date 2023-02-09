<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DriverInfo;
use Carbon\Carbon;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\DriverVehicle;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\returnSelf;
use Brian2694\Toastr\Facades\Toastr;

class RegisterController extends Controller
{
   
    use RegistersUsers;
    
}
