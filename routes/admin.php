<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function (){
    return 'Hola desde el administrador';
})->name('dashboard');
