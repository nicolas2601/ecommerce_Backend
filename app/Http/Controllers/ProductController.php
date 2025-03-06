<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return view('products.index');
    }

    public function create(){

        return view('products.create'); //retoma el formulario para crear un prodcuto
    }

    public function show($name){

        echo "PRODUCTO $name";
        return view('products.show');
    }

}
