<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accepte extends Model
{
    protected $fillable = [
        'chercheur_id',
        'recruteur_id',
    ];
}
