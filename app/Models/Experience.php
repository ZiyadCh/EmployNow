<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'id',
        'profile_id',
        'entreprise',
        'poste',
        'date_debut',
        'date_fin',
    ];
    public function profile() {
        return $this->belongsTo(Profile::class);
    }
}
