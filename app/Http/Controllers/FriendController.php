<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\Friends;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function demande($senderId, $receiverId)
    {
        Friend::firstOrCreate([
            'user1' => $senderId,
            'user2' => $receiverId,
            'status' => 'en attente'
        ]);
        return redirect()->back();
    }
    public function list($id)
    {
        $demande = Friend::select('*')
            ->join('users', 'users.id', '=', 'friends.user2')
            ->where('friends.user1', $id)
            //->where('status', 'accepte')
            ->where('status', 'en attente')
            ->get();

        $amis = Friend::select('*')
            ->join('users', 'users.id', '=', 'friends.user2')
            ->where('friends.user1', $id)
            //->where('status', 'accepte')
            ->get();
        return view('liste-amis', ['amis' => $amis,'demande' => $demande]);
    }
}
