<?php

namespace App\Http\Controllers;

use App\Models\Acceptes;
use Illuminate\Http\Request;
use App\Models\User;

class ChercheurController extends Controller
{
    //trouver des recruteurs
    public function list(){
        $recruteur = User::select('id','name','email','role')->whereNot('id',auth()->user()->id)->get();
        return view('chercheur',['recruteur'=> $recruteur] );
    }
    //

}
