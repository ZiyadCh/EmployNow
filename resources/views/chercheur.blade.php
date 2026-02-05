

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
                <div class="px-6 py-4 text-base font-semibold text-gray-800">
                    Faire des connexions
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">
                                    Nom
                                </th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">
                                    Email
                                </th>
                                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase">
                                    Rôle
                                </th>
                                <th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 bg-white">
                            @forelse ($recruteur as $e)
                                <tr class="hover:bg-gray-50 transition">


                                    <td class="px-6 py-4 text-sm text-gray-900 font-medium">
                                        {{ $e->name }}
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        <a href="mailto:{{ $e->email }}" class="text-blue-600 hover:underline">
                                            {{ $e->email }}
                                        </a>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-700">
                                        {{ $e->role }}
                                    </td>

                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ route('amis', ['senderId' => auth()->user()->id, 'receiverId' => $e->id ]) }}"
                                           class="inline-flex rounded-md bg-blue-600 px-4 py-1.5 text-xs font-semibold text-white hover:bg-blue-700 transition">
                                            Ajouter ami
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-10 text-center text-sm text-gray-500">
                                        Aucun recruteur trouvé.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex justify-center pt-4">
                <x-primary-button>
                    <a href="{{ url('liste-offre') }}">Voir offres d’emploi</a>
                </x-primary-button>
            </div>

        </div>
    </div>
</x-app-layout>
