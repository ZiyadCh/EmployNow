<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    public function list(){
        $employant = User::select('name','email','specialite')->where('role','chercheur')->where('specialite','!=',null)->get();
        return view('recruteur',['employant'=> $employant] );
    }
}
