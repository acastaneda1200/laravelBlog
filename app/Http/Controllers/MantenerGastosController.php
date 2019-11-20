<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenerGastosController extends Controller
{
    public function mantenerGastos(){
        $name = 'Mantener';

        return view('mantener')->with('routeName', $name);
    }
}
