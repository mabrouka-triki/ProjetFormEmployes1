<?php

use App\Http\Controllers\EmployeControleur;
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
    return view('home');
});


Route::get('/ajouterEmploye',function(){
    return view("vues/formEmploye");
});

Route::post('/postEmploye',[EmployeControleur::class,'postAjouterEmploye']);
Route::get('/listerEmploye',[EmployeControleur::class,'listerEmployes']);
Route::get('/modifierEmploye/{id}',[EmployeControleur::class,'modifier']);

Route::post('/postmodifierEmploye/{id}', [
    'uses' => 'App\Http\Controllers\EmployeControleur@postmodificationEmploye',
    'as' => 'postmodifierEmploye'
]);





