<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VehicleController;
use APP\Http\Controllers\ShortcodeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('toastr-notification',[\App\Http\Controllers\ToastrNotificationController::class,'toastrNotification']);


Route::get('/', function () {
     return view('index');
 });

Route::get('/shortcode','App\Http\Controllers\ShortcodeController@shortcode');
Route::get('/template', 'App\Http\Controllers\TemplateController@template');
Route::get('/form','App\Http\Controllers\FormController@form');
Route::get('/Oauth','App\Http\Controllers\GoogleController@index')
?>