


<div>
    <x-app-layout>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                    <h2 class="text-lg font-semibold text-gray-800">Candidatures</h2>
                    <span class="text-sm text-gray-500">
                        {{ $candidatures->count() }} résultat(s)
                    </span>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full border-collapse">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Offre
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Email du candidat
                                </th>
                                <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Statut
                                </th>
                                <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 bg-white">
                            @forelse ($candidatures as $c)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-sm text-gray-800 font-medium">
                                        {{ $c->titre }}
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        <a href="" class="text-blue-600 hover:underline">
                                            {{ $c->email }}
                                        </a>
                                    </td>

                                    <td class="px-6 py-4 text-center">
                                        <span class="inline-flex items-center rounded-full px-2.5 py-1 text-xs font-medium
                                            {{ $c->status === 'en attente' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-700' }}">
                                            {{ $c->status }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="#"
                                               class="inline-flex items-center justify-center rounded-md bg-blue-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-blue-700 transition">
                                                Accepter
                                            </a>

                                            <a href="#"
                                               class="inline-flex items-center justify-center rounded-md bg-red-600 px-3 py-1.5 text-xs font-semibold text-white hover:bg-red-700 transition">
                                                Refuser
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-10 text-center text-sm text-gray-500">
                                        Aucune candidature trouvée.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
