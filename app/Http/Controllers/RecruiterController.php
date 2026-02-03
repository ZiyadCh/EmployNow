<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    public function list(){
        $employant = User::select('id','name','email','specialite')->where('role','chercheur')->get();
        return view('recruteur',['employant'=> $employant] );
    }

// Show edit form
    public function edit($id) {
        $recruteur = User::findOrFail($id);
        return view('edit', compact('recruteur'));
    }

    //Update the data
    public function update(Request $request, $id) {
        $recruteur = User::findOrFail($id);
        $recruteur->update($request->all());
        return redirect()->route('chercheur');
    }

    //  Delete
    public function destroy($id) {
        User::destroy($id);
        return back();
    }
    //filter
    public function filter(Request $request){
        $employant = User::select('id','name','email','specialite')->where('role','chercheur')->where('name','Like','%'.$request->input('search-nom').'%')->where('specialite','Like','%'.$request->input('search-specialite').'%')->get();
        return view('recruteur',['employant'=> $employant] );
    }
    //profile
    public function voir($id) {
         $employant = User::find($id);
        return view('profile-view', compact('employant'));
    }
    public function creeOffre() {
        # code...
    }
}
