<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable =[
        'user1',
        'user2',
        'status'
    ];
}
