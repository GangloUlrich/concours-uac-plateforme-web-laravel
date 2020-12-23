<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunite extends Model
{
    protected $table = 'opportunites';

    protected $fillable = [
        'recruteur_id', 'type', 'titre_opportunite', 'description', 'delai', 'activation'
    ];

    public function recruteur()
    {
        return $this->belongsTo(Recruteur::class);
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class);
    }
}
