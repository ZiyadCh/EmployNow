<?php

namespace App\Http\Controllers;

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
    }  //
}
