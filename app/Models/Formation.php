<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{
    protected  $fillables = [
        'id',
        'profile_id',
        'etablissement',
        'diplome',
        'date_obtenu',
    ];
    public function profile() {
        return $this->belongsTo(Profile::class);
    }
}
