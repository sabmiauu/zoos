<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zoo extends Model
{
    //Esta indicación se hace para hacer un arreglo de las variables que crearán el objeto Zoo
    protected $fillable = [
        'name', 'city', 'country', 'size', 'budget'
    ];

    //Aquí le indicamos al Zoo que un Zoo tiene muchas especies
    public function species() {
        return $this->belongsToMany('App\Species');
    }
}
