<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get ('/iniciar',
 [ App\Http\Controllers\contollerQuiz::class,'index'])
  -> name ('iniciar');


Route::post ('/dadosPagina1',
 [ App\Http\Controllers\contollerQuiz::class ,'dadosPagina1']) 
 -> name ('dadosPagina1') ;

 Route::post ('/dadosPagina2',
 [ App\Http\Controllers\contollerQuiz::class ,'dadosPagina2']) 
 -> name ('dadosPagina2') ;

 Route::post ('/dadosPagina3',
 [ App\Http\Controllers\contollerQuiz::class ,'dadosPagina3']) 
 -> name ('dadosPagina3') ;

 Route::post ('/dadosPagina4',
 [ App\Http\Controllers\contollerQuiz::class ,'dadosPagina4']) 
 -> name ('dadosPagina4') ;

 Route::post ('/dadosPagina5',
 [ App\Http\Controllers\contollerQuiz::class ,'dadosPagina5']) 
 -> name ('dadosPagina5') ;

 Route::post ('/dadosPagina6',
 [ App\Http\Controllers\contollerQuiz::class ,'dadosPagina6']) 
 -> name ('dadosPagina6') ;

 Route::post ('/dadosPagina7',
 [ App\Http\Controllers\contollerQuiz::class ,'dadosPagina7']) 
 -> name ('dadosPagina7') ;