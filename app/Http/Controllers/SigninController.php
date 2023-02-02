<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SigninController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    // public function login(Request $request){

    //     $request->validate([
    //         'username' => 'required|max:20',
    //         'password' => 'required'
    //     ]);
        
        
    //     if ( Auth::guard('admin')->attempt(['username'=>$request->input('username'),
    //     'password'=>$request->input('password')])) {
    //         $admin = Auth::guard('admin')->user();
    //         dd("ads");
    //         if($admin->is_active == 1){
    //             return redirect()->route('dashboard');    
    //         }else{
    //             Auth::guard('admin')->logout();
    //             return redirect()->route('admin.login')
    //             ->with('error', 'Your account is deactivated, Contact system administrator')
    //             ->withInput();    
    //         }
        
    //     }
    //     else {
            
    //         return redirect()->route('admin.login')
    //             ->with('error', 'Ooops! Invalid Username or Password')
    //             ->withInput();
    //     }
    // }
    
    
    public function login(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if ( Auth::guard('admin')->attempt(['email'=>$request->input('email'),
        'password'=>$request->input('password')])) {
            $admin = Auth::guard('admin')->user();
    
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->route('admin.login')
                ->with('error', 'Ooops! Invalid Email or Password')
                ->withInput();
        }
    }
    

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
