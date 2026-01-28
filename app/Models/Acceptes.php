<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acceptes extends Model
{
    protected $fillable = [
        'chercheur_id',
        'recruteur_id',
    ];
}
