<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $fillable = [
        'vulgar_name', 'scientific_name', 'family', 'on_danger'
    ];
}
