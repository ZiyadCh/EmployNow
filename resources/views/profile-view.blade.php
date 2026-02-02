
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profil
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">

                    <div>
                        <h3 class="text-lg font-medium text-gray-900">
                            Informations personnelles
                        </h3>
                        <p class="text-sm text-gray-500">
                            Détails du profil du chercheur
                        </p>
                    </div>

                    <div class="border-t border-gray-200 pt-4 space-y-3">
                     <div>
                            <span class="block text-sm font-medium text-gray-600">
                                Image
                            </span>
                            <span class="rounded-lg border">
                                <img src="{{ asset('storage/' . $employant->pfp) }}" alt="pfp">
                            </span>
                        </div>
                        <div>
                            <span class="block text-sm font-medium text-gray-600">
                                Nom
                            </span>
                            <span class="text-gray-900">
                                {{ $employant->name }}
                            </span>
                        </div>

                        <div>
                            <span class="block text-sm font-medium text-gray-600">
                                Email
                            </span>
                            <span class="text-gray-900">
                                {{ $employant->email }}
                            </span>
                        </div>

                        <div>
                            <span class="block text-sm font-medium text-gray-600">
                                Spécialité
                            </span>
                            <span class="text-gray-900">
                                {{ $employant->specialite }}
                            </span>
                        </div>

                    </div>

                    <div class="pt-4">
                        <a
                            href="{{ route('recruteur') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md
                                   font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                                   focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2
                                   focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        >
                            Retour
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
