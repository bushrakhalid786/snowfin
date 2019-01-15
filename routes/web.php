<?php

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
    return view('welcome'); // need to change later to a landing page for people to login/register
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
    Route::resource('profile', 'ProfileController');
    Route::resource('companies', 'CompanyController');

});

Route::get('settings', function() {} );