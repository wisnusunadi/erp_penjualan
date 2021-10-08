<?php

use App\Events\SimpleNotifEvent;
use App\Http\Controllers\ChatController;
use App\Notifications\RealTimeNotification;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


// //COMMON
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/form-template', 'ItController@form_template')->name('form-template');
//     Route::get('/template_form_delete', 'ItController@template_form_delete')->name('template-form-delete');
//     Route::get('/template_form_cancel', 'ItController@template_form_cancel')->name('template-form-cancel');
// });
