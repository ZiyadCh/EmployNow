<?php

use Livewire\Component;

class CV extends Component
{
  public $education = '';
    public $experience = '';
    public $skills = '';

    public function mount()
    {
        // Optional: prefill if profile exists
        $profile = auth()->user()->profile;
        if ($profile) {
            $this->education = $profile->formations ?? '';
            $this->experience = $profile->experiences ?? '';
            $this->skills = $profile->competences ?? '';
        }
    }

    public function save()
    {
        $this->validate([
            'education' => 'required|string',
            'experience' => 'required|string',
            'skills' => 'required|string|max:255',
        ]);

        Profile::updateOrCreate(
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
        {{-- FORMATION --}}
        <div>
            <x-input-label for="education" value="Formation" />
            <textarea
                id="education"
                name="education"
                rows="4"
                class="mt-1 block w-full rounded-md border-gray-300"
                placeholder=""
                required
            ></textarea>
            <x-input-error :messages="$errors->get('education')" class="mt-2" />
        </div>

        {{-- EXPÉRIENCES --}}
        <div>
            <x-input-label for="experience" value="Expériences professionnelles" />
            <textarea
                id="experience"
                name="experience"
                rows="5"
                class="mt-1 block w-full rounded-md border-gray-300"
                placeholder=""
                required
            ></textarea>
            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
        </div>

        {{-- COMPÉTENCES --}}
        <div>
            <x-input-label for="skills" value="Compétences" />
            <x-text-input
                id="skills"
                name="skills"
                type="text"
                class="mt-1 block w-full"
                placeholder=""
                required
            />
            <x-input-error :messages="$errors->get('skills')" class="mt-2" />
        </div>


</div>
