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
    return view('welcome');
});

Route::view('/inicio','inicio');
Route::view('/QS','/publico/base/QS');
Route::view('/faq','/publico/base/faq');
Route::view('/register','/publico/base/registrate');
Route::view('/explorar','/publico/base/explorar');
Route::view('/ingresar','/publico/base/ingresar');
Route::view('/contacto','/publico/base/contacto');
Route::view('/regiones','/publico/base/regiones');
Route::view('/asociaciones','/publico/base/asociaciones');
Route::view('/info-a-ba','/publico/base/info-asociacion-bancodealimentos');
Route::view('/info-a-ach','/publico/base/info-asociacion-accioncontraelhambre');
Route::view('/info-a-apt','/publico/base/info-asociacion-alimentosparatodos');
Route::view('/info-a-wfp','/publico/base/info-asociacion-wfp');
Route::view('/info-a-fa','/publico/base/info-asociacion-feedingAmerica');
Route::view('/info-a-thp','/publico/base/info-asociacion-thehungerproject');
Route::view('/ongs','/publico/base/ongs');
Route::view('/terms','/publico/base/terms');
Route::view('/privacy','/publico/base/privacy');
Route::view('/sup','/publico/base/support');
Route::view('/search','/publico/base/search');



