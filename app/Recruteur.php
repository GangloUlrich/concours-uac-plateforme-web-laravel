<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruteur extends Model
{
    protected $table = 'recruteurs';

    protected $fillable = [
        'user_id', 'prenom', 'contact','nom_entreprise', 'domaine', 'poste',
    ];

    public function opportunites()
    {
        return $this->hasMany(Opportunite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
