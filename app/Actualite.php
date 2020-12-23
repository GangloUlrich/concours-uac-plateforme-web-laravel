<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $table = 'actualites';

    protected $fillable = [
        'titre_actualite', 'contenu_actualite', 'image_actualite',
    ];
}
