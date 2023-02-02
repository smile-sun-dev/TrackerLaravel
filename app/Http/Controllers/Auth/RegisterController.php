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

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // Driver
            'type' => ['required', 'string', 'max:5'],
            'name' => ['required', 'string', 'max:30'],
            'username' => ['required', 'string', 'unique:users', 'max:30'],
            'phonenumber' => ['required', 'string', 'max:11'],
            'age' => ['required', 'string', 'max:2'],
            'gender' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'max:12', 'confirmed'],

            // Vehicle
            'vehicle_class' => ['required', 'string', 'max:255'],
            'vehicle_type' => ['required', 'string', 'max:50'],
            'no_of_passenger' => ['required', 'string', 'max:3'],
            'no_of_plate' => ['required', 'string', 'max:20'],
            'make' => ['required', 'string', 'max:20'],
            'model' => ['required', 'string', 'max:20'],
            'year' => ['required', 'string', 'max:10'],
            'no_of_luggage' => ['required', 'string', 'max:100'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        try {
            
            $user = User::create([
                'type' => $data['type'],
                'name' => $data['name'],
                'username' => $data['username'],
                'phonenumber' => $data['phonenumber'],
                'age' => $data['age'],
                'gender' => $data['gender'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $vehicle = Vehicle::create([
                'vehicle_class' => $data['vehicle_class'],
                'vehicle_type' => $data['vehicle_type'],
                'no_of_passenger' => $data['no_of_passenger'],
                'no_of_plate' => $data['no_of_plate'],
                'make' => $data['make'],
                'model' => $data['model'],
                'year' => $data['year'],
                'no_of_luggage' => $data['no_of_luggage'],
                'taxi_badge' => $data['taxi_badge'],
                'insurance' => $data['insurance'],
            ]);
            
            DriverInfo::create([
                'driver_id' => $user->id,
                'licence' => $data['licence'],
                'certificate_of_compliance' => $data['certificate_of_compliance'],
                'date_of_birth' => $data['date_of_birth'],
                'address' => $data['address'],
                'bank_details' => $data['bank_details'],
                'sort_code' => $data['sort_code'],
                'a_number' => $data['a_number'],
                'bac_number' => $data['bac_number'],
            ]);
            
            DriverVehicle::create([
                'vehicle_id' => $vehicle->id,
                'driver_id' => $user->id,
                'allotted_date' => Carbon::now(),
            ]);

            return $user;

        } catch (\Throwable $th) {
            // throw $th;
            dd($th);
        }
    }
}
