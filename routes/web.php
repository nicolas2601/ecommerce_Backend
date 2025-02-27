<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', function () {
    echo "Listado de productos";
});

Route::get('/products/create', function () {
    echo "Formulario para crear producto";
});



Route::get('/products/{name}', function ($name) {
    echo "PRODUCTO: $name";
});

Route::get('/products/{name}/{category}', function ($name, $cateory) {
    echo "PRODUCTO: $name, y tiene una categoria $cateory";
});

