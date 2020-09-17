<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscribeController;


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
Route::get('subscription', 'SubscriptionController@index')->name('me.subscribe');
Route::get('video', 'VideoController@index')->name('me.video');

// Route::get('userallow', 'VideoWatchController@getVids');

Route::get('checksub', 'SubscriptionContoller@checkSubscribe');

Route::get('subscribe', 'SubscriptionContoller@subScribeUser');
