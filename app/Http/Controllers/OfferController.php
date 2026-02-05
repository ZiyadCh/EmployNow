<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Offre;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function createOffre(Request $r)
    {
        $r->validate([
            'titre'       => 'required|string|max:255',
            'type'        => 'required|string|max:100',
            'entreprise'  => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        $imagePath = $r->file('image')->store('offres', 'public');

        Offre::create([
            'titre' => $r->input('titre'),
            'type' => $r->input('type'),
            'entreprise' => $r->input('entreprise'),
            'description' => $r->input('description'),
            'image' => $imagePath
        ]);
        return redirect()->back();
    }
    public function showOffre()
    {
        $offre = Offre::all();
        return view('liste-offre', ['offre' => $offre]);
    }
    public function details($id)
    {
        $offre = Offre::where('id', $id)->get();
        return view('detail-offre', ['offer' => $offre]);
    }
    public function postuler($userId, $offreId)
    {

        Application::firstOrCreate([
            'user_id' => $userId,
            'offre_id' => $offreId,
            'status' => 'en attente',
        ]);
        return redirect()->back();
    }
}
