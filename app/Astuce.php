<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Astuce extends Model
{
    protected $table = 'astuces';

    protected $fillable = [
        'titre_astuce', 'contenu_astuce', 'image_astuce',
    ];
}
