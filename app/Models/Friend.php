<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable =[
        'sender',
        'receiver',
        'status'
    ];
    public function receiver() {
        return $this->belongsTo(User::class,'sender');
    }
    public function sender() {
        return $this->belongsTo(User::class,'receiver');
    }
}
