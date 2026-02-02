<?php

use Livewire\Component;
use App\Models\Formation;
use App\Models\Experience;
use App\Models\Competence;

new class extends Component
{

    public function save()
    {
        Formations::create([

        ]);
    }
};

?>

<div>
    {{-- Smile, breathe, and go slowly. - Thich Nhat Hanh --}}

<form wire:submit="save" class="space-y-8">

    <div>
        <x-input-label value="Titre du profil" />
        <x-text-input class="w-full" placeholder="Titre du profil" />
    </div>

    <div class="space-y-3">
        <h3 class="font-bold text-lg">Formations</h3>

        <div class="flex items-center gap-2">
            <x-text-input class="flex-1" placeholder="Établissement" />
            <x-text-input class="flex-1" placeholder="Diplôme" />
            <button type="button" class="px-3 py-2 border rounded text-red-600 font-bold">−</button>
        <button type="button" class="text-blue-600 font-bold">+</button>
        </div>

    </div>

    <div class="space-y-3">
        <h3 class="font-bold text-lg">Expériences professionnelles</h3>

        <div class="flex items-center gap-2">
            <x-text-input class="flex-1" placeholder="Entreprise" />
            <x-text-input class="flex-1" placeholder="Poste" />
            <x-text-input type="date" class="w-40" />
            <x-text-input type="date" class="w-40" />
            <button type="button" class="px-3 py-2 border rounded text-red-600 font-bold">−</button>
        <button type="button" class="text-blue-600 font-bold">+</button>
        </div>

    </div>

    <div class="space-y-3">
        <h3 class="font-bold text-lg">Compétences</h3>

        <div class="flex items-center gap-2">
            <x-text-input class="flex-1" placeholder="Compétence" />
            <x-text-input class="w-40" placeholder="Niveau" />
            <button type="button" class="px-3 py-2 border rounded text-red-600 font-bold">−</button>
        <button type="button" class="text-blue-600 font-bold">+</button>
        </div>

    </div>

    <x-primary-button class="w-full">
        Enregistrer le profil
    </x-primary-button>

</form>
<div/>
