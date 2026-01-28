<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChercheurController extends Controller
{
    public function list(){
        $recruteur = User::select('name','email','specialite')->where('role','recruteur')->get();
        return view('recruteur',['recruteur'=> $recruteur] );
    }
}
