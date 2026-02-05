<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\Friends;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function demande($senderId,$receiverId){
        Friend::firstOrCreate([
            'user1' => $senderId,
            'user2' => $receiverId,
            'status' => 'en attente'
        ]);
        return redirect()->back();
    }
}
