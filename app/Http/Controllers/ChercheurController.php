<?php

namespace App\Http\Controllers;

use App\Models\Acceptes;
use Illuminate\Http\Request;
use App\Models\User;

class ChercheurController extends Controller
{
    public function list(){
        $recruteur = User::select('name','email','role')->get();
        return view('chercheur',['recruteur'=> $recruteur] );
    }
}
