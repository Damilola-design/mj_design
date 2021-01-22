<?php


use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Auth;
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
    return view('main.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/web-form', 'HomeController@web')->name('web.form');
Route::get('/landing-form', 'HomeController@landing')->name('landing.form');
Route::get('/dropshiping-form', 'HomeController@dropshiping')->name('dropshiping.form');
Route::get('/client-portal', 'HomeController@portal')->name('client.portal');


//update users
Route::post('/update-user', 'UpdateUsers@update')->name('update.user');

// facebook socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
