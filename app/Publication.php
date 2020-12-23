<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'publications';

    protected $fillable = [
        'titre_publication', 'contenu_publication', 'image_publication',
    ];
}
