<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $fillable = [
        'vulgar_name', 'scientific_name', 'family', 'on_danger'
    ];

    //Con esto se indica la relación *---1, en la que una especie puede tener muchos animales.
    public function animals() {
        return $this->hasMany('App\Animal');
    }
}
