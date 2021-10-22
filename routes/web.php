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
Route::get('/empresa', function () {return view('empresa');});
Route::get('/contacto', function () {return view('contacto');});
Route::get('/drones', function () {return view('drones');});
Route::get('/explorer', function () {return view('explorer');});
Route::get('/explorerpro', function () {return view('explorerpro');});
Route::get('/consulta', function () {return view('/dashboard/consulta');});
Route::post('/consulta', 'EmailController@consulta')->name('consulta');
Route::get('/ganaderia', function () {return view('ganaderiaDePrecision');});
Route::get('/agricultura', function () {return view('agriculturaDePrecision');});
Route::get('/inteligencia', function () {return view('inteligenciaArtificial');});
Route::get('/agrimensura', function () {return view('agrimensura');});
Route::get('/mineriaOilGas', function () {return view('mineriaOilGas');});
Route::get('/administracionSiembras', function () {return view('administracionSiembras');});
Route::get('/servicioDrones', function () {return view('servicioDrones');});
Route::get('/realidadVirtual', function () {return view('realidadVirtual');});
Route::get('/agriculturaDigital', function () {return view('agriculturaDigital');});
Route::get('/guest', function () {return view('/dashboard/linksEmbebidos/linkRegular');});
Route::get('/cotizacion', function () {return view('/dashboard/cotizacion');});
Route::post('/cotizacion', 'EmailController@cotizacion')->name('cotizacion');
Route::get('/terminosCondiciones', function () {return view('terminosCondiciones');});

/*SOLO VERIFICADAS*/
Route::get('/regular', function () {return view('/dashboard/linksEmbebidos/linkRegular');})->middleware('verified');
Route::get('/tutoriales', function () {return view('/dashboard/tutoriales');})->middleware('verified');
Route::get('/newsletter', function () {return view('/newsletter/newsletter');})->middleware('verified');
Route::get('/home', function () {return view('home');})->middleware('verified');

Route::post('/soporte', 'EmailController@soporte')->name('soporte');
Route::post('/newsletterEmail', 'NewsletterController@newsletterEmail')->name('newsletterEmail');
Route::get('suscribirse', 'NewsletterController@suscribirse')->name('suscribirse');
Route::get('desuscribirse', 'NewsletterController@desuscribirse')->name('desuscribirse');



/*ERRORES*/
Route::get('/403', function () { return view('/errors/403'); });



/*SOLO ADMIN*/
Route::group(['middleware' => 'admin'], function () {
    Route::get('/test', function () {
        return view('testRendimiento');
    });

    Route::get('/premium', function () {
        return view('/dashboard/linksEmbebidos/linkPremium');
    })->middleware('verified');

    Route::get('/soporte', function () {
        return view('/dashboard/soporte');
    })->middleware('verified');

    Route::get('/newsletterPanel', function () {
        return view('/newsletter/newsletterPanel');
    })->middleware('verified');

    Route::resource('users', 'UsersController');
});



/*PREMIUM*/
Route::group(['middleware' => 'premium'], function () {

    Route::get('/premium', function () {
        return view('/dashboard/linksEmbebidos/linkPremium');
    })->middleware('verified');

    Route::get('/soporte', function () {
        return view('/dashboard/soporte');
    })->middleware('verified');
});



