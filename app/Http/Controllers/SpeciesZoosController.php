<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Species;
use App\Zoo;

class SpeciesZoosController extends Controller
{
    //Se piden los datos del zoo porque de ahí parte la relación
    function edit(Request $req, Zoo $zoo) {
        //Se llama a los elementos de la clase species para poder usarlos dentro de los zoos
        $species = Species::all();
        //Se llaman en el arreglo los elementos zoo y los elementos species
        return view('zoos_species.edit', ['zoo' => $zoo, 'species' => $species ]);
    }

    function update(Request $req, Zoo $zoo) {
        $species = $req->input('species');
        //Esto relaciona el zoo con las especies indicadas en la variable $species
        //Estas relaciones entre el zoo y las species están indicadas en sus archivos.php (relación *---*)
        $zoo->species()->attach($species);
        return redirect()->route('zoos.show', ['zoo' => $zoo]);
    }
}
