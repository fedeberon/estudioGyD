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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'UsersController@index')->name('index');
//Route::get('/edit', 'UsersController@edit')->name('edit');
//Route::get('/show', 'UsersController@show')->name('show');
Route::get('/tutoriales', 'DashboardController@tutoriales')->name('tutoriales');
Route::get('/regular', 'DashboardController@linkRegular')->name('regular');
Route::get('/premium', 'DashboardController@linkPremium')->name('premium');
