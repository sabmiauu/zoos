<?php

namespace App\Http\Controllers;

//From request import request
use Illuminate\Http\Request;

//El "extends" es el método para heredar en php
class RegistroController extends Controller
{
    //
    function index(Request $req) {
        return "Conejito";
    }
}
