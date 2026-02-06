<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
<h1> <a href="{{ route('liste-amis', ['id'=>auth()->user()->id ]) }}"
                        class="px-6 py-4 text-base font-semibold text-gray-800 inline-flex rounded-md bg-blue-700 px-4 py-1.5 font-bold text-white hover:bg-blue-700 transition">
                        Votre Amis
                    </a>
                </h1>
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                <div class="px-4 py-3 border-b border-gray-200">
                    <h2 class="text-sm font-semibold text-gray-800">Rechercher</h2>
                </div>

                <div class="px-4 py-3">
                    <form action="{{ route('filter') }}" method="GET"
                          class="flex flex-col sm:flex-row gap-3 items-end">

                        <div class="flex-1">
                            <label for="search_nom" class="block text-xs font-medium text-gray-600">
                                Nom
                            </label>
                            <input
                                id="search_nom"
                                name="search-nom"
                                type="text"
                                value="{{ request('search-nom') }}"
                                class="mt-1 w-full rounded-md border-gray-300 px-2 py-1 text-sm focus:border-blue-500 focus:ring-blue-500"
                            >
                        </div>

                        <div class="flex-1">
                            <label for="search_specialite" class="block text-xs font-medium text-gray-600">
                                Spécialité
                            </label>
                            <input
                                id="search_specialite"
                                name="search-specialite"
                                type="text"
                                value="{{ request('search-specialite') }}"
                                class="mt-1 w-full rounded-md border-gray-300 px-2 py-1 text-sm focus:border-blue-500 focus:ring-blue-500"
                            >
                        </div>

                        <button type="submit"
                                class="h-8 rounded-md bg-blue-600 px-4 text-sm font-semibold text-white hover:bg-blue-700 transition">
                            Filtrer
                        </button>
                    </form>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                <x-primary-button>
                    <a href="{{ url('candidature') }}">Consulter candidatures</a>
                </x-primary-button>

                <div class="flex items-center gap-2">
                    <span class="text-sm font-medium text-gray-700">Nouvelle offre</span>
                    <a href="{{ url('offre') }}"
                       class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-blue-600 text-sm font-semibold text-white hover:bg-blue-700 transition">
                        +
                    </a>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                <div class="px-4 py-3 border-b border-gray-200 flex items-center justify-between">
                    <h3 class="text-sm font-semibold text-gray-800">Trouver des employant</h3>

                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase">
                                    Nom
                                </th>
                                <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase">
                                    Email
                                </th>
                                <th class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase">
                                    Spécialité
                                </th>
                                <th class="px-4 py-2 text-center text-xs font-semibold text-gray-600 uppercase">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 bg-white">
                            @forelse ($employant as $e)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-4 py-2 text-sm text-gray-900 font-medium">
                                        {{ $e->name }}
                                    </td>

                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        <a href="mailto:{{ $e->email }}" class="text-blue-600 hover:underline">
                                            {{ $e->email }}
                                        </a>
                                    </td>

                                    <td class="px-4 py-2 text-sm text-gray-700">
                                        {{ $e->specialite }}
                                    </td>

                                    <td class="px-4 py-2 text-center">
                                        <a href="{{ route('voir', $e->id) }}"
                                           class="inline-flex rounded-md bg-blue-600 px-3 py-1 text-xs font-semibold text-white hover:bg-blue-700 transition">
                                            Profil
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-4 py-6 text-center text-sm text-gray-500">
                                        Aucun employant trouvé.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
