<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function vehiclemanagment()
    {   
        $vehicles = Vehicle::all();
        return view('admin.vehicle.vehiclemanagment')->with(compact('vehicles'));

    }


    public function create()
    {
        
        return view('admin.vehicle.create');
    }

    public function vehicle_create()
    {
        
        $vehicle = Vehicle::create([
            
            'vehicle_class' => $_POST['vehicle_class'],
            'vehicle_type'  => $_POST['vehicle_type'],
            'no_of_passenger' =>$_POST['no_of_passenger'],
            'no_of_plate' =>$_POST['no_of_plate'],
            'no_of_luggage' =>$_POST['no_of_luggage']

            
        ]);
        
        return redirect()->route('vehiclemanagment')->with('message', 'Vehicle has been created');
    }

    public function edit($id){
        
        $vehicle = Vehicle::where('id', $id)->first();
         return view('admin.vehicle.edit')->with(compact('vehicle')); 
    }
    
    public function update(Request $request)
    {
        Vehicle::where('id','=',$request->record_id)->update([
            
            'vehicle_class' => $request->vehicle_class,
            'vehicle_type'  => $request->vehicle_type,
            'no_of_passenger' =>$request->no_of_passenger,
            'no_of_plate' =>$request->no_of_plate,
            'no_of_luggage' =>$request->no_of_luggage,

        ]);

        return redirect()->route('vehiclemanagment')->with('message', 'Vehicle has been updated');
    }
}
