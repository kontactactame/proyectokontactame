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




/////////////////////////////Inicia Machote/////////////////////////////////////////////////////////////////////

Route::get('/index','machote@index');

/////////////////////////////fin Machote/////////////////////////////////////////////////////////////////////

/////////////////////////////inician altas/////////////////////////////////////////////////////////////////////

Route::get('/altaperfil','altaperfil@altaperfil')->name('perfil');
Route::POST('/altaperf','altaperfil@altaperf')->name('altaperf');
Route::POST('/guardaperfrfil','altaperfil@guardaperfil')->name('guardaperfil');
Route::get('/reporteperfil','altaperfil@reporteperfilf')->name('reporteperfil');

Route::get('/modificam/{id_perfil}','altaperfil@modificam')->name('modificam');
Route::POST('/guardamodificam','altaperfil@guardamodificam')->name('guardamodificam');
////////////////////////////////////////////alta postulante////////////////////////////////////////////////////////
Route::get('/altapostulantei','postulantec@altapostulantef')->name('postulante');
Route::POST('/guardapostulantei','postulantec@guardapostulantef')->name('guardapostulantei');
Route::get('/reportepostulantei','postulantec@reportepostulantef')->name('reportepostulantei');

Route::get('/modificam1/{id_postulante}','postulantec@modificam1')->name('modificam1');
Route::POST('/guardamodificam1','postulantec@guardamodificam1')->name('guardamodificam1');

//usuario//

Route::get('/altausuarioi','altausuario@altausuario')->name('altausuarioi');
Route::POST('/guardausuario','altausuario@guardausuario')->name('guardausuario');
Route::get('/reporteusuarioi','altausuario@reporteusuariof')->name('reporteusuarioi');
Route::get('/modificausuarioi/{id_usuario}','altausuario@modificausuariof')->name('modificausuarioi');
Route::POST('/guardausuariomi','altausuario@guardausuariom')->name('guardausuariomi');





