<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelVente extends Model
{
    protected $vente = 'vente';
    protected $fillable = [
        'nom',
        'description',
        'origine',
        'etat',
        'prix',
        'image'
    ];
}



