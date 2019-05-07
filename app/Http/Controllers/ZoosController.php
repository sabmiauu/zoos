<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zoo;

class ZoosController extends Controller
{
    //
    function index(Request $req) {
        $zoos = Zoo::all();
        return view('zoos.index', ['zoos' => $zoos]);
    }

    //La variable "$zoo" está definida desde la ruta en web.php con "{zoo}"
    //y a la hora de indicar la info que se debe mostrar en la vista, se indica con ['zoo' => $zoo"]
    function show(Request $req, Zoo $zoo) {
        return view('zoos.detail', ['zoo' => $zoo ]);
    }

    function create(Request $req) {
        return view('zoos.create');
    }

    function store(Request $req) {
        /*
        //Obtener los datos de los inputs y asignarlos a variables
        $n = $req->input('name');
        $ci = $req->input('city');
        $co = $req->input('country');
        $s = $req->input('size');
        $b = $req->input('budget');
        //Crear un nuevo objeto de la clase Zoo
        $zoo = new Zoo;
        //Asignar los valores de las variables a los atributos del objeto
        $zoo->name = $n;
        $zoo->city = $ci;
        $zoo->country = $co;
        $zoo->size = $s;
        $zoo->budget = $b;
        //Guardar el objeto creado
        $zoo->save();

        //Otra forma de crear un objeto, igual jalando las variables de los inputs es:
        Zoo::create([
            'name' => $name,
            'city' => $city,
            'country' => $country,
            'size' => $size,
            'annual_budget' => $annual_budget,
        ]);
        */

        // Una forma más resumida
        // Con esto se llaman a todos los datos de los inputs en un arreglo
        $zoo = $req->input('zoo');
        //Aquí se crea el nuevo objeto y se le asignan las variables del arreglo de los inputs
        Zoo::create($zoo);
        //Redireccionar al home
        return redirect()->route('zoos.index');
    }

    function edit(Request $req, Zoo $zoo) {
        return view('zoos.edit', ['zoo' => $zoo ]);
    }

    function update(Request $req, Zoo $zoo) {
        $zoo->name = $req->input('zoo.name');
        $zoo->city = $req->input('zoo.city');
        $zoo->country = $req->input('zoo.country');
        $zoo->size = $req->input('zoo.size');
        $zoo->budget = $req->input('zoo.budget');

        $zoo->save();

        return redirect()->route('zoos.show', ['zoo' => $zoo]);
    }
}
