
<x-app-layout>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h2 class="text-sm font-semibold text-gray-800 text-center">
                        Offres d’emploi
                    </h2>
                </div>

                <div class="overflow-x-auto px-4 py-4">
                    <table class="w-full border-separate border-spacing-y-3">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase">
                                    Titre
                                </th>
                                <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase">
                                    Entreprise
                                </th>
                                <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($offre as $o)
                                <tr class="bg-white shadow-sm rounded-lg hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-sm text-gray-900 font-medium text-center">
                                        {{ $o->titre }}
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-700 text-center">
                                        {{ $o->entreprise }}
                                    </td>

                                    <td class="px-6 py-4 text-center">
                                        <a
                                            href="{{ route('detail-offre', ['id' => $o->id]) }}"
                                            class="inline-flex items-center justify-center rounded-md bg-blue-600 px-5 py-2 text-xs font-semibold text-white hover:bg-blue-700 transition"
                                        >
                                            Détails
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-10 text-center text-sm text-gray-500">
                                        Aucune offre disponible.
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

