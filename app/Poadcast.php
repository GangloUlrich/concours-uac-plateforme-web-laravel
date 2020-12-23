<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poadcast extends Model
{
    protected $table = 'poadcasts';

    protected $fillable = [
        'titre_poadcast', 'lien_poadcast'
    ];
}
