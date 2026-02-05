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
    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'applications',
            'offre_id',
            'user_id'
        )->withPivot('status');
    }
}
