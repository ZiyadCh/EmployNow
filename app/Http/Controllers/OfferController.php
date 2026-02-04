<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Offre;
use Illuminate\Http\Request;

class OfferController extends Controller
{
      public function createOffre(Request $r,$id) {

        $imagePath = $r->file('image')->store('offres', 'public');

        Offre::create([
            'recruteur_id' => $id,
            'titre' => $r->input('titre'),
            'type' => $r->input('type'),
            'entreprise' => $r->input('entreprise'),
            'description' => $r->input('description'),
            'image' => $imagePath
        ]);
    }
    public function showOffre() {
        $offre = Offre::all();
        return view('liste-offre',['offre'=> $offre] );
    }
    public function details($id) {
        $offre = Offre::where('id',$id)->get();
        return view('detail-offre', ['offer'=> $offre]);
    }
    public function postuler($userId,$offreId) {

        Application::firstOrCreate([
            'user_id' => $userId,
            'offre_id' => $offreId,
            'status' => 'en attente',
        ]);
    }
}
