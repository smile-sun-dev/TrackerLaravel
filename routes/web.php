<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VehicleController;



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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('booking');
// });
Route::get('/', [IndexController::class, 'dashboard'])->name('dashboard');
Route::get('/add-floor', [IndexController::class, 'add_floor'])->name('add-floor');
Route::get('/add-project', [IndexController::class, 'add_project'])->name('add-project');
Route::get('/project-step-0', [IndexController::class, 'project_step0'])->name('project-step0');
Route::get('/project-step-1', [IndexController::class, 'project_step1'])->name('project-step1');
Route::get('/project-step-2', [IndexController::class, 'project_step2'])->name('project-step2');
Route::get('/project-step-3', [IndexController::class, 'project_step3'])->name('project-step3');



// Route::get('/get-locaiton', [IndexController::class, 'get_location'])->name('get_location');

// Route::post('calculate-miles', [IndexController::class, 'calc_miles'])->name('calc_miles');
// Route::post('booking-submit', [IndexController::class, 'booking_submit'])->name('booking_submit');

// Route::get('/checkout/{id}', [StripePaymentController::class, 'checkout'])->name('checkout');
// Route::post('/payment', [StripePaymentController::class, 'payment'])->name('checkout.payment');


// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });

Route::post('/step_form', [BookingController::class, 'store'])->name('step_form');

Route::get('/facades/{tablename}', function ($tablename) {
    // return $tablename;
    $data = 'App\Models\\' . $tablename;
    $data::factory()->count(20)->create();
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
// Route::get('/user', [DashboardController::class, 'user'])->name('user');
// Route::get('/bookingmanagment', [DashboardController::class, 'bookingmanagment'])->name('bookingmanagment');
// Route::get('/vehiclemanagment', [VehicleController::class, 'vehiclemanagment'])->name('vehiclemanagment');
// Route::get('/create', [VehicleController::class, 'create'])->name('vehicle.create');
// Route::post('/create_submit', [VehicleController::class, 'vehicle_create'])->name('vehicle.create.submit');
// Route::get('/edit/{vehicle}', [VehicleController::class, 'edit'])->name('vehicle.edit');
// Route::post('/update', [VehicleController::class, 'update'])->name('vehicle.update.submit');
// Route::get('/mapview/{id}',[DashboardController::class, 'mapview'])->name('map.view');





// Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
//     Route::get('index', [AdminController::class, 'index'])->name('dashboard');
//     Route::get('setings', [SettingController::class, 'setings'])->name('settings');
//     Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// });

// Route::get("admin/login", [SigninController::class, 'index'])->name('admin.login');
// Route::post("admin/signin", [SigninController::class, 'login'])->name('admin.login.process');

