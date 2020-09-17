<?php

use Illuminate\Support\Facades\Route;

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
Route::post('checksub', 'SubscriptionController@checkSubscriber')->name('post.check');
Route::post('usersubscribe', 'SubscriptionController@subScribeUser')->name('post.usersub');
Route::get('video', 'VideoController@index')->name('me.video');

// Route::get('userallow', 'VideoWatchController@getVids');

// Route::post('checksub', 'SubscriptionContoller@checkSubscribe')->name('post.check');

// Route::post('subscribe', 'SubscriptionContoller@subScribeUser')->name('post.subs');
