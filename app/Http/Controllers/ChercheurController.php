<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ChercheurController extends Controller
{
    public function list(){
        $recruteur = User::select('name','email','entreprise')->where('role','recruteur')->get();
        return view('chercheur',['recruteur'=> $recruteur] );
    }
    public function postuler(){
        User::create([

        ]);
    }
}
