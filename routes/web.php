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


/*
Route::name('site.' )->group(function () {
    Route::get('/','SiteController@home')->name('/'); //home page
    Route::get('about','SiteController@about')->name('about'); //about us
    Route::get('contactus','SiteController@contactus')->name('contactus'); //contact us
    Route::get('site', 'SiteController@theme')->name('site'); //site //To link header and footer wih the rest
    Route::get('header', 'SiteController@header')->name('header'); //header
    Route::get('footer', 'SiteController@footer')->name('footer'); //footer
});
*/

	Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('users', 'UserController');


    Route::prefix('patient')->name('patient.')->group(function () {
        Route::resource('invoices', 'Invoices\PatientInvoiceController')->only(['index', 'show']);
        Route::resource('appointments', 'Appointments\PatientAppointmentController')
            ->only(['index', 'show']);
    });

    Route::prefix('doctor')->name('doctor.')->group(function () {
        Route::resource('appointments', 'Appointments\DoctorAppointmentController')
            ->except(['create', 'store', 'destroy']);
    });



Route::resource('cheques', 'ChequeController');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
