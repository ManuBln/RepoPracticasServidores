<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAnimales extends Controller
{
    public function getAnimales(){
        $animales = ['Leon' , 'Gazela' , 'Hiena' , 'Simba'];

        return response()->json(['mensaje' => 'Estos son mis animales', 'datos' => $animales]);
    }
}
