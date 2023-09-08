<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramacionController extends Controller
{
    //Metodo para la pagina principal de la pagina de Programacion Academica
    public function index(){
        return view('programacion.index');
    }

    //Metodo para crear una programacion
    public function create(){
        return view('programacion.create');
    }

    //Metodo para mostrar los detalles del resgistro
    public function show($procedimiento){
        return view('programacion.show', compact('procedimiento'));
    }
}
