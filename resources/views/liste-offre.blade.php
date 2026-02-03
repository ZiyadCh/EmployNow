<div>
    <x-app-layout>
            <table class="w-full border border-gray-300 border-collapse rounded-lg shadow-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">Titre</th>
                        <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">Entreprise</th>
                        <th class="border border-gray-300 px-6 py-3 text-center text-sm font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($offre as $o)
                    <tr class="">
                        <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">{{$o->titre}}</td>
                        <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">{{$o->entreprise}}</td>
                        <td class="border border-gray-300 px-6 py-3">
                            <div class="flex items-center justify-center gap-2">
                             <a href="{{ route('detail-offre', ['id' => $o->id]) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-xs font-medium">
                                    details
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

    </x-app-layout>
</div>
