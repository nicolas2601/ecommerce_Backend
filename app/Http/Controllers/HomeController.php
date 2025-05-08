<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Importar el modelo Category

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = \App\Models\Category::all(); // Asegúrate de que el modelo Category esté importado o usa la ruta completa.
        return view('welcome', compact('categories'));
    }
}
