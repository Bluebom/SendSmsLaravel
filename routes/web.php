<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SmsVerificationController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/teste-sms/{number}', [SmsVerificationController::class, 'send']);

Route::get('/home', 'HomeController@index')->name('home');