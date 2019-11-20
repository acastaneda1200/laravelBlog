<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $name = 'Inicio';

    return view('inicio')->with('routeName', $name);
    }


}
