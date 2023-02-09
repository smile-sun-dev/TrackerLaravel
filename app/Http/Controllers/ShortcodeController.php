<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Auth;
class ShortcodeController extends Controller
{
    public function shortcode(){
        //dd("Dfdfdf");
        return view('shortcode.all_code');
    }
}
