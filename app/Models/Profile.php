<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillables = [
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function formation() {
        return $this->hasMany(Formations::class);
    }
    public function experience() {
        return $this->hasMany(Experience::class);
    }
    public function competence(){
        return $this->hasMany(Competence::class);
    }
}
