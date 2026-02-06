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
            'sender' => $senderId,
            'receiver' => $receiverId,
            'status' => 'en attente'
        ]);
        return redirect()->back();
    }
    public function list($id)
    {
        $demande = Friend::select('*')
            ->join('users', 'users.id', '=', 'friends.sender')
            ->where('friends.receiver', $id)
            ->where('status', 'en attente')
            ->get();

        $amis = Friend::select('*')
            ->join('users', 'users.id', '=', 'friends.sender')
            ->where('friends.receiver', $id)
            ->where('status', 'accepté')
            ->get();
        return view('liste-amis', ['amis' => $amis,'demande' => $demande]);
    }
    public function accepter($id) {
        Friend::where('sender',$id)
        ->update(['status'=> 'accepté']);
        return redirect()->back();
    }
    public function refuser($id) {
        Friend::where('sender',$id)
        ->update(['status'=> 'refusé']);
        return redirect()->back();
    }

}
