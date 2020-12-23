<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gandaho extends Model
{
    protected $table = 'gandahos';

    protected $fillable = [
        'name', 'email', 'password',
    ];
}
