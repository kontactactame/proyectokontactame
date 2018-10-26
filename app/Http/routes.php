<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    echo "hola Mundo -- tic 71";
});

Route::get('/areatriangulo', function () {
    $base= 10;
    $altura = 40;
    $area = ($base *$altura)/2;
    echo "El area es" . $area;
});


Route::get('/areatriangulo2/{base}/{altura}',
 function ($base,$altura) {
    $area = ($base *$altura)/2;
    echo "El area es" . $area;
});


Route::get('/',function()
{
    return view('inicio');
});
Route::get('/mensajito','curso@mensaje');
Route::get('/at','curso@areatriangulo');
Route::get('/ac/{lado}','curso@areacuadrado');
Route::get('/ventas/costos/{cant}/{costo}','curso@total');

Route::get('/altamaestro','curso@altamaestro');
Route::POST('/guardamaestro','curso@guardamaestro')->name('guardamaestro');
Route::get('/reportemaestros','curso@reportemaestros');
Route::get('/modificam/{idm}','curso@modificam')->name('modificam');
Route::POST('/guardamodificam','curso@guardamodificam')->name('guardamodificam');
Route::get('/eliminam/{idm}','curso@eliminam')->name('eliminam');
Route::get('/restauram/{idm}','curso@restauram')->name('restauram');
Route::get('/efisicam/{idm}','curso@efisicam')->name('efisicam');

Route::get('/altaperfill','perfil1@altaperfill');
Route::POST('/guardaperfil','perfil1@guardaperfil')->name('guardaperfil');

Route::get('/login','usuariosc@login');
Route::POST('/iniciasesion','usuariosc@iniciasesion')->name('iniciasesion');


/////////////////////////////Inicia Machote/////////////////////////////////////////////////////////////////////

Route::get('/index','machote@index');

/////////////////////////////fin Machote/////////////////////////////////////////////////////////////////////

/////////////////////////////inician altas/////////////////////////////////////////////////////////////////////

Route::get('/altaperfil','altaperfil@altaperfil')->name('perfil');
Route::POST('/altaperf','altaperfil@altaperf')->name('altaperf');
Route::POST('/guardaperfrfil','altaperfil@guardaperfil')->name('guardaperfil');
Route::get('/reporteperfil','altaperfil@reporteperfilf')->name('reporteperfil');
////////////////////////////////////////////alta postulante////////////////////////////////////////////////////////
Route::get('/altapostulantei','postulantec@altapostulantef')->name('postulante');
Route::POST('/guardapostulantei','postulantec@guardapostulantef')->name('guardapostulantei');
Route::get('/reportepostulantei','postulantec@reportepostulantef')->name('reportepostulantei');






