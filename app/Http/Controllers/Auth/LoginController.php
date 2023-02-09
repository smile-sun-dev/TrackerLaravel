<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    protected $redirectTo = 'index';
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function authenticated(Request $request, $user)
    {
        // if ($user->type != 3) {
        //     Auth::logout();
        //     return redirect(route('login'))->with(['error' => 'No Page Found']);
        // }
        $user = auth()->user();
        if ($user->role == 'user') {
            if ($user->is_active == 0) {
                   Toastr::success('Welcome)', 'Success!!');
                    return view('index');
            }
            else
            {
                dd("user");
            }
        }

        //return redirect(url('index'));
        
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
