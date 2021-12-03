<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login','\App\Http\Controllers\API\UserController@login');
Route::post('register','\App\Http\Controllers\API\UserController@register');
Route::post('flights','\App\Http\Controllers\API\flightsController@createflight');
Route::get('Passengerlist','\App\Http\Controllers\API\flightsController@showpassenger');
Route::put('Showflight/{id}','\App\Http\Controllers\API\flightsController@showflightsbyid');
Route::put('updateflight/{id}','\App\Http\Controllers\API\flightsController@updateflightsbyid');
Route::delete('flight_delete/{id}','\App\Http\Controllers\API\flightsController@flightdeletebyid');
Route::group(['middleware'=>'auth:api'],function(){
Route::post('details','\App\Http\Controllers\API\UserController@details');
});
