<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**Responde a la raiz de estudiante
     */
    public function index(){
        return view('raizestudiante');
    }

    /**responde a las peticiones de estudiante */
    public function crear(){
        return view('crearestudiante');
    }
}
