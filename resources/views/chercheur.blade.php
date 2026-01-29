<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-bold">
                    {{ __("Trouver Des Recruteurs") }}
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
                        <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">Entreprise</th>
                        <th class="border border-gray-300 px-6 py-3 text-center text-sm font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($recruteur as $e)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">{{ $e->name }}</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">{{ $e->email }}</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">{{ $e->entreprise }}</td>
                        <td class="border border-gray-300 px-6 py-3">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('ajouter', $e->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-xs font-medium">
                                    Postuler
                                </a>

                                <a href="{{ route('edit', $e->id) }}" class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1 rounded text-xs font-medium">
                                    Modifier
                                </a>

                                <form action="{{ route('delete', $e->id) }}" method="POST" onsubmit="return confirm('Supprimer ce recruteur ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-xs font-medium">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
