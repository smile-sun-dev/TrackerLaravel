<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
class ToastrNotificationController extends Controller
{
    public function toastrNotification()
    {
        //put your logic here

         Toastr::success('You Have Successfully Registered)', 'Success!!');
        return view('welcome');
    }
}
