<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
//Hay que incluir la clase Species porque la vamos a usar.
use App\Species;

class AnimalsController extends Controller
{
    function index(Request $req) {
        $animals = Animal::all();
        return view('animals.index', ['animals' => $animals]);
    }

    function create(Request $req) {
        //Para la vista de crear, y que nos muestre la llave foránea de "especies", hay que llamar a la clase Species con la vista
        $species = Species::all();
        //Y dentro del return indicar que nos devuelva el arreglo de las especies creadas
        return view('animals.create', ['species' => $species]);
    }

    function store(Request $req) {
        $animal = $req->input('animal');
        Animal::create($animal);
        return redirect()->route('animals.index');
    }
}
