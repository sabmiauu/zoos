<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Species;

class SpeciesController extends Controller
{
    //
    function index(Request $req) {
        $species = Species::all();
        return view('species.index', ['species' => $species]);
    }

    function create(Request $req) {
        return view('species.create');
    }

    function store(Request $req) {
        $species = $req->input('species');
        Species::create($species);
        return redirect()->route('species.index');
    }
}
