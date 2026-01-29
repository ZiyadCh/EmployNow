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

// 2. Show edit form
    public function edit($id) {
        $recruteur = User::findOrFail($id);
        return view('edit', compact('recruteur'));
    }

    // 3. Update the data
    public function update(Request $request, $id) {
        $recruteur = User::findOrFail($id);
        $recruteur->update($request->all());
        return redirect()->route('chercheur');
    }

    // 4. Delete
    public function destroy($id) {
        User::destroy($id);
        return back();
    }
}
