<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'libelle'
    ];

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }
}
