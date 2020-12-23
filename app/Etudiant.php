<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table = 'etudiants';

    protected $fillable = [
        'user_id','prenom', 'contact', 'age', 'entite', 'niveau', 'competences'
    ];

    public function opportunites()
    {
        return $this->belongsToMany(Opportunite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
