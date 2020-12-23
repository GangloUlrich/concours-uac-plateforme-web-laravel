<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $table = 'reponses';

    protected $fillable = [
        'reponse'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
