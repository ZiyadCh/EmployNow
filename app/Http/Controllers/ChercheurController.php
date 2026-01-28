<?php

namespace App\Http\Controllers;

use App\Models\Acceptes;
use Illuminate\Http\Request;
use App\Models\User;

class ChercheurController extends Controller
{
    public function list(){
        $recruteur = User::select('name','email','entreprise')->where('role','recruteur')->get();
        return view('chercheur',['recruteur'=> $recruteur] );
    }
    public function postuler(){
        Acceptes::create([
            'chercheur_id'=>1,
            'recruteur_id'=> $recruteur
        ]);
    }
}
