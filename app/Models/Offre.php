<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected  $fillable = [
        'recruteur_id',
        'titre',
        'type',
        'entreprise',
        'description',
        'image',
    ];
    public function user() {
        return $this->belongsToMany(User::class);
    }
}
