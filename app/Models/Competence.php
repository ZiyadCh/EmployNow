<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    //
    protected  $fillable= [
        'profile_id',
        'titre'
    ];
    public function profile() {
        return $this->belongsTo(Profile::class);
    }
}
