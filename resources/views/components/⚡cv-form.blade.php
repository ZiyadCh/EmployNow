<?php

use Livewire\Component;
use App\Models\Formation;
use App\Models\Experience;
use App\Models\Competence;

new class extends Component
{
    private $profile_id;
    public $formations = [];
    public $experiences = [];
    public $competences = [];

    public function addFormation()
    {
        $this->formations[] = ['etablissement' => '', 'diplome' => '', 'date_obtenu' => ''];
    }
    public function removeFormation($i)
    {
        unset($this->formations[$i]);
    }

    public function addExperience()
    {
        $this->experiences[] = ['entreprise' => '', 'poste' => '', 'date_debut' => '', 'date_fin' => ''];
    }
    public function removeExperience($i)
    {
        unset($this->experiences[$i]);
    }

    public function addCompetence()
    {
        $this->competences[] = ['title' => ''];
    }
    public function removeCompetence($i)
    {
        unset($this->competences[$i]);
    }

    public function save()
    {
        foreach ($this->formations as $f) {
            Formation::create([
                'profile_id' => $this->profile_id,
                'etablissement' => $f['etablissement'],
                'diplome' => $f['diplome'],
                'date_obtenu' => $f['date_obtenu']
            ]);
        }

        foreach ($this->experiences as $e) {
            Experience::create([
                'profile_id' => $this->profile_id,
                'entreprise' => $e['entreprise'],
                'poste' => $e['poste'],
                'date_debut' => $e['date_debut'],
                'date_fin' => $e['date_fin']
            ]);
        }

        foreach ($this->competences as $c) {
            Competence::create([
                'profile_id' => $this->profile_id,
                'title' => $c['title']
            ]);
        }
    }
};
?>

<div>
    <form wire:submit.prevent="save" class="">

        <div class="space-y-3">
            <h3 class="font-bold text-lg">Formations</h3>

            @foreach ($formations as $i => $f)
            <div class="flex items-center gap-2">
                <x-text-input class="flex-1" placeholder="Établissement" wire:model="formations.{{ $i }}.etablissement" />
                <x-text-input class="flex-1" placeholder="Diplome" wire:model="formations.{{ $i }}.diplome" />
                <input type="date" class="flex-1" placeholder="Date d'aquisition de diplome" wire:model="formations.{{ $i }}.date_obtenu" />
                <button type="button" wire:click="removeFormation({{ $i }})" class="px-3 py-2 border rounded text-red-600 font-bold">−</button>
            </div>
            @endforeach

            <button type="button" wire:click="addFormation" class="text-blue-600 border bg-blue-500 font-bold py-2 px-4 rounded ">+</button>
        </div>

        <div class="space-y-3">
            <h3 class="font-bold text-lg">Expériences professionnelles</h3>

            @foreach ($experiences as $i => $e)
            <div class="flex items-center gap-2">
                <x-text-input class="flex-1" placeholder="Entreprise" wire:model="experiences.{{ $i }}.entreprise" />
                <x-text-input class="flex-1" placeholder="Poste" wire:model="experiences.{{ $i }}.poste" />
                <x-text-input type="date" class="w-40" wire:model="experiences.{{ $i }}.date_debut" />
                <x-text-input type="date" class="w-40" wire:model="experiences.{{ $i }}.date_fin" />
                <button type="button" wire:click="removeExperience({{ $i }})" class="px-3 py-2 border rounded text-red-600 font-bold">−</button>
            </div>
            @endforeach

            <button type="button" wire:click="addExperience" class=" text-blue-600 border bg-blue-500 font-bold py-2 px-4 rounded text-blue-600 font-bold">+</button>
        </div>

        <div class="space-y-3">
            <h3 class="font-bold text-lg">Compétences</h3>

            @foreach ($competences as $i => $c)
            <div class="flex items-center gap-2">
                <x-text-input class="flex-1" placeholder="Compétence" wire:model="competences.{{ $i }}.nom" />
                <button type="button" wire:click="removeCompetence({{ $i }})" class="px-3 py-2 border rounded text-red-600 font-bold">−</button>
            </div>
            @endforeach

            <button type="button" wire:click="addCompetence" class="text-blue-600 font-bold text-blue-600 border bg-blue-500 font-bold py-2 px-4 rounded ">+</button>
        </div>

        <x-primary-button class="w-full ">Enregistrer CV</x-primary-button>

    </form>
</div>