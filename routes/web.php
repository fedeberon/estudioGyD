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
Auth::routes(['verify' => true]);

/*NO PROTEGIDAS*/
Route::get('/', function () {return view('welcome');});
Route::get('/explorer', function () {return view('explorer');});
Route::get('/explorerpro', function () {return view('explorerpro');});
Route::get('/ganaderia', function () {return view('ganaderiaDePrecision');});
Route::get('/agricultura', function () {return view('agriculturaDePrecision');});
Route::get('/consulta', function () {return view('/dashboard/consulta');});



/*SOLO VERIFICADAS*/
Route::get('/regular', function () {return view('/dashboard/linksEmbebidos/linkregular');})->middleware('verified');
Route::get('/terminosCondiciones', function () {return view('terminosCondiciones');})->middleware('verified');
Route::get('/tutoriales', function () {return view('/dashboard/tutoriales');})->middleware('verified');
Route::get('/cotizacion', function () {return view('/dashboard/cotizacion');})->middleware('verified');
Route::get('/newsletter', function () {return view('/newsletter/newsletter');})->middleware('verified');
Route::get('/home', function () {return view('home');})->middleware('verified');

Route::post('/cotizacion', 'EmailController@cotizacion')->name('cotizacion');
Route::post('/soporte', 'EmailController@soporte')->name('soporte');
Route::post('/newsletterEmail', 'NewsletterController@newsletterEmail')->name('newsletterEmail');
Route::post('/consulta', 'EmailController@consulta')->name('consulta');
Route::get('suscribirse', 'NewsletterController@suscribirse')->name('suscribirse');
Route::get('desuscribirse', 'NewsletterController@desuscribirse')->name('desuscribirse');



/*ERRORES*/
Route::get('/403', function () { return view('/errors/403'); });



/*SOLO ADMIN*/
Route::group(['middleware' => 'premium'], function () {

    Route::get('/premium', function () {
        return view('/dashboard/linksEmbebidos/linkPremium');
    });

    Route::get('/soporte', function () {
        return view('/dashboard/soporte');
    });

    Route::get('/newsletterPanel', function () {
        return view('/newsletter/newsletterPanel');
    });

    Route::resource('users', 'UsersController');
});



/*SOLO ADMIN Y PREMIUM*/
Route::group(['middleware' => 'premium'], function () {

    Route::get('/premium', function () {
        return view('/dashboard/linksEmbebidos/linkPremium');
    })->middleware('verified');

    Route::get('/soporte', function () {
        return view('/dashboard/soporte');
    })->middleware('verified');
});



