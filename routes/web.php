<?php

use App\Http\Controllers\EmployeControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/listerEmployes', [ EmployeControllers::class , 'listEmployes']);
Route::get('/ajouterEmploye', [ EmployeControllers::class , 'addEmploye']);
Route::post('/validerEmploye', [ EmployeControllers::class , 'validEmploye']);

Route::get('/editerEmploye/{id}', [ EmployeControllers::class , 'editEmploye']);

