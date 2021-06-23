<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        //dd("test");
        $respuesta["title"]="prueba";
        return view("home.home",$respuesta);
    }
}
