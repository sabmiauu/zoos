<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'id_number', 'genre', 'birth_year', 'country', 'continent', 'species_id'
    ];

    //Con esto estableces la relación 1---*, que un Animal puede tener muchas especies.
    public function species() {
        return $this->belongsTo('App\Species');
    }
}
