<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nouveau offre d'emploi
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form enctype="multipart/form-data" action="{{ route('enregistrer-offre', ['recruteur_id'=>auth()->user()->id]) }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="">Entreprise</label>
                            <x-input-label for="entreprise"  />
                            <x-text-input id="entreprise" class="block mt-1 w-full" type="text" name="entreprise" required />
                        </div>
                          <div>
                            <label>Titre</label>
                            <x-text-input id="titre" class="block mt-1 w-full" type="text" name="titre" placeholder="" required />
                        </div>

                        <div>
                            <x-input-label for="type" :value="__('Type de contrat')" />
                            <select id="type_contrat" name="type" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="CDI">CDI</option>
                                <option value="CDD">CDD</option>
                                <option value="Full-time">Full-time </option>
                                <option value="Stage">Stage</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                        </div>


                        <div>
                            <x-input-label for="description" :value="__('Description du poste')" />
                            <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required></textarea>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg border-2 border-dashed border-gray-200">
                            <x-input-label for="image" :value="__('Image de l\'offre ')" />
                            <input id="image" name="image" type="file" class=""
                                required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Enregistrer l\'offre') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


