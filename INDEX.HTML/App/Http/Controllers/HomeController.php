<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;

class HomeController extends Controller
{
    public function Nuevo.html() {
        return view( view:'test',[
            'title'=>'ExportaFacil en Codigo'
            ]);
    }
}