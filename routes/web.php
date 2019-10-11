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
Auth::routes();
Auth::routes(['verify' => true]);
Route::get('profile', function () {
    return '<h1>This is profile page</h1>';
})->middleware('verified');

Route::get('/', function () {
    return view('welcome');
});



/*UNIVERSAL ROUTES*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tutoriales', 'DashboardController@tutoriales')->name('tutoriales');
Route::get('/cotizacion', 'DashboardController@cotizacion')->name('cotizacion');
Route::get('/terminosCondiciones', 'HomeController@terminosCondiciones')->name('terminosCondiciones');
Route::post('/contactar', 'EmailController@contact')->name('contact');



/*ERRORS*/
Route::get('/403', function () { return view('/errors/403'); });



/*ADMIN PERMISSIONS*/
Route::group(['middleware' => 'admin'], function () {
    Route::get('/premium', 'DashboardController@linkPremium')->name('premium');
    Route::get('/regular', 'DashboardController@linkRegular')->name('regular');
    Route::get('/soporte', 'DashboardController@soporte')->name('soporte');
    Route::post('/soporte', 'EmailController@soporte')->name('soporte');
    Route::resource('users', 'UsersController');
});



/*PREMIUM PERMISSIONS*/
Route::group(['middleware' => 'premium'], function () {
    Route::get('/premium', 'DashboardController@linkPremium')->name('premium');
    Route::get('/soporte', 'DashboardController@soporte')->name('soporte');
});



/*REGULAR PERMISSIONS*/
Route::group(['middleware' => 'regular'], function () {
    Route::get('/regular', 'DashboardController@linkRegular')->name('regular');
});
