
<?php

use Livewire\Component;
use App\Models\Formation;
use App\Models\Experience;
use App\Models\Competence;

new class extends Component
{
    public $formations = [];
    public $experiences = [];
    public $competences = [];

 // for dynamic adding things for all 3
        //formation
        public function addFormation(){
            $this->formations[] = ['etablissement' => '', 'diplome' => '' , 'date_obtenu' => ''];
        }
        public function removeFormation(){
            unset($this->formations[$i]);
        }
        //experiecne
        public function addExperience(){
            $this->experiences[] = ['entreprise' => '', 'poste' => '' , 'date_deput' => '','date_fin'=> ''];
        }
        public function removeExperience(){
            unset($this->experiences[$i]);
        }
        //competence
        public function addCompetence(){
            $this->competences[] = ['title' => ''];
        }
        public function removeCompetence(){
            unset($this->competences[$i]);
        }


    public function save()
    {
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
            <x-text-input class="flex-1" placeholder="Diplôme" wire:model="formations.{{ $i }}.diplome" />
            <button type="button" wire:click="removeFormation({{ $i }})" class="px-3 py-2 border rounded text-red-600 font-bold">−</button>
        </div>
        @endforeach

        <button type="button" wire:click="addFormation" class="text-blue-600 font-bold">+</button>
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

        <button type="button" wire:click="addExperience" class="text-blue-600 font-bold">+</button>
    </div>

    <div class="space-y-3">
        <h3 class="font-bold text-lg">Compétences</h3>

        @foreach ($competences as $i => $c)
        <div class="flex items-center gap-2">
            <x-text-input class="flex-1" placeholder="Compétence" wire:model="competences.{{ $i }}.nom" />
            <x-text-input class="w-40" placeholder="Niveau" wire:model="competences.{{ $i }}.niveau" />
            <button type="button" wire:click="removeCompetence({{ $i }})" class="px-3 py-2 border rounded text-red-600 font-bold">−</button>
        </div>
        @endforeach

        <button type="button" wire:click="addCompetence" class="text-blue-600 font-bold">+</button>
    </div>

    <x-primary-button class="w-full">Enregistrer CV</x-primary-button>

</form>
</div>
