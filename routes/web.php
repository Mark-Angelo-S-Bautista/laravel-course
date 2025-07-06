<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');

Route::get('/product/{id}', function(string $id){
    return "Product ID: " . $id;
})->whereNumber('id');

Route::get('/sum/{num1}/{num2}', function(float $num1, $num2){
    return $num1 + $num2;
})->whereNumber('num1, num2');