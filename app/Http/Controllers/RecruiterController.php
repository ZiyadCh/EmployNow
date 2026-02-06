<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Offre;
use App\Models\User;
use Illuminate\Http\Request;

class RecruiterController extends Controller
{
    public function list()
    {
        $employant = User::select('id', 'name', 'email', 'specialite')->where('role', 'chercheur')->get();
        return view('recruteur', ['employant' => $employant]);
    }

    // Show edit form
    public function edit($id)
    {
        $recruteur = User::findOrFail($id);
        return view('edit', compact('recruteur'));
    }

    //Update the data
    public function update(Request $request, $id)
    {
        $recruteur = User::findOrFail($id);
        $recruteur->update($request->all());
        return redirect()->route('chercheur');
    }

    //  Delete
    public function destroy($id)
    {
        User::destroy($id);
        return back();
    }
    //filter
    public function filter(Request $request)
    {
        $employant = User::select('id', 'name', 'email', 'specialite')->where('role', 'chercheur')->where('name', 'Like', '%' . $request->input('search-nom') . '%')->where('specialite', 'Like', '%' . $request->input('search-specialite') . '%')->get();
        return view('recruteur', ['employant' => $employant]);
    }
    public function filterOffre(Request $request)
    {
        $offre = Offre::select()->where('titre', 'Like', '%' . $request->input('search-titre') . '%')->get();
        return view('liste-offre', ['offre' => $offre]);
    }
    //profile


    public function voir($id)
    {
        $employant = User::find($id);
        return view('profile-view', compact('employant'));
    }
    public function candidature()
    {
        $candidatures = User::query()
            ->join('applications', 'users.id', '=', 'applications.user_id')
            ->join('offres', 'offres.id', '=', 'applications.offre_id')
            ->where('applications.status', '=', 'en attente')
            ->select([
                '*',
            ])
            ->get();
        return view('candidatures', ['candidatures' => $candidatures]);
    }
}
