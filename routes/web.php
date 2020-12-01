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

Auth::routes();

Route::get('/user', 'DashboardController@index')->name('user');
Route::resource('/profile','ProfileController');
// Route::prefix('driver')->group(function(){
//     Route::get('/', 'DriverController@index')->name('driver.dashboard');
//     Route::get('/login', 'Driver\DriverLoginController@showLoginForm')->name('driver.login');
//     Route::post('/login', 'Driver\DriverLoginController@login')->name('driver.login.submit');
//     Route::get('/register', 'Driver\DriverRegisterController@showRegisterForm')->name('driver.register');
//     Route::post('/register', 'Driver\DriverRegisterController@register')->name('driver.register.submit');
// });


Route::get('/admin' ,'AdminController@index')->name('admin')->middleware('admin');
Route::get('/volunteer' ,'VolunteerController@index')->name('volunteer')->middleware('volunteer');

Route::resource('/forum','ForumController');
Route::get('/search','ForumController@search')->name('search');
// Route::get('/forum-page',function(){
//     return view('forums.forum-welcome');
// });

;
Route::resource('/comment','CommentController');

Route::resource('/welcome-forum','EvaluateController');


// Route::resource('/letstalk','LetstalkController');
