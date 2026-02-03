<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-bold">
                    {{ __("Faire des connections!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-full border border-gray-300 border-collapse rounded-lg shadow-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">Nom</th>
                        <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">Email</th>
                        <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">Role</th>
                        <th class="border border-gray-300 px-6 py-3 text-center text-sm font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($recruteur as $e)
                    <tr class="">
                        <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">{{ $e->name }}</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">{{ $e->email }}</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">{{ $e->role }}</td>
                        <td class="border border-gray-300 px-6 py-3">
                            <div class="flex items-center justify-center gap-2">
                                <a href="" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-xs font-medium">
                                    Ajouter amis
                                </a>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex justify-center">
    <x-primary-button> <a href="liste-offre">Voir offres d'emploi</a></x-primary-button>
    </div>
</x-app-layout>
