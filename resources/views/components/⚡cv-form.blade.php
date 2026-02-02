<?php

use Livewire\Component;

new class extends Component
{
  public $education = '';
    public $experience = '';
    public $skills = '';

       public function save()
    {
        $this->validate([
            'education' => 'required|string',
            'experience' => 'required|string',
            'skills' => 'required|string|max:255',
        ]);

        Profile::create(
            ['user_id' => auth()->id()],
            [
                'formations' => $this->education,
                'experiences' => $this->experience,
                'competences' => $this->skills,
            ]
        );
    }
};

?>

<div>
    {{-- Smile, breathe, and go slowly. - Thich Nhat Hanh --}}

<div class="space-y-6">

    <div>
        <x-input-label value="Titre du profil" />
        <x-text-input class="w-full" placeholder="Titre du profil" />
    </div>

    <h3 class="font-bold mt-4">Formations</h3>
    <div class="space-y-2" id="formations-container">
        <div class="flex space-x-2 items-center">
            <x-text-input placeholder="École" class="flex-1" />
            <x-text-input placeholder="Diplôme" class="flex-1" />
            <x-text-input placeholder="Année début" class="w-24" />
            <x-text-input placeholder="Année fin" class="w-24" />
            <button type="button" class="text-red-600 font-bold p-4  border">-</button>
        </div>
    </div>
    <button type="button" class="text-blue-600 font-bold mt-2">+</button>

    <h3 class="font-bold mt-4">Expériences professionnelles</h3>
    <div class="space-y-2" id="experiences-container">
        <div class="flex space-x-2 items-center">
            <x-text-input placeholder="Entreprise" class="flex-1" />
            <x-text-input placeholder="Poste" class="flex-1" />
            <x-text-input placeholder="Année début" class="w-24" />
            <x-text-input placeholder="Année fin" class="w-24" />
            <button type="button" class="text-red-600 p-4 font-bold">-</button>
        </div>
    </div>
    <button type="button" class="text-blue-600 font-bold mt-2">+</button>

    <h3 class="font-bold mt-4">Compétences</h3>
    <div class="space-y-2" id="skills-container">
        <div class="flex space-x-2 items-center">
            <x-text-input placeholder="Compétence" class="flex-1" />
            <x-text-input placeholder="Niveau (optionnel)" class="w-32" />
            <button type="button" class="text-red-600 font-bold p-4">-</button>
        </div>
    </div>
    <button type="button" class="text-blue-600 font-bold mt-2">+</button>

    <div class="mt-6">
        <x-primary-button class="w-full">Enregistrer le profil</x-primary-button>
    </div>

</div>
</div>
