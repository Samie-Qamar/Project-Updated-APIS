<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\portfolioController;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\AdminPanel\PassengerController;
use App\Http\Controllers\AdminPanel\TicketController;
use App\Http\Controllers\AdminPanel\FlightController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/portfolio',[portfolioController::class,'port']);
Route::get('/admin_panel',[AdminController::class,'admin']);
Route::get('/passenger-info',[PassengerController:: class,'Passengers']);
Route::get('/flight-info',[FlightController:: class,'Flight_info']);
Route::get('/Ticket-info',[TicketController:: class,'Ticket_info']);
Route::post('/pass_submit',[PassengerController:: class,'create_passengers']);
Route::post('/flight_submit',[FlightController:: class,'create_flight']);
Route::post('/Ticket_submit',[TicketController::class,'create_Ticket']);
