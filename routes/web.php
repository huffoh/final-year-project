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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/medizoid', function () {
    return view('medizoid');
});

Auth::routes();

Route::resource('Patient', 'PatientController');

Route::resource('Driver', 'DriverController');

Route::resource('Appointment', 'AppointmentController');

Route::get('/home', 'HomeController@index')->name('home');
