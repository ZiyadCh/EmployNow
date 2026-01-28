<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Trouver Des Recruteurs") }}
                </div>
            </div>
        </div>
    </div>

<div class="p-6">
    <div class="">
        <table class="mx-auto w-full max-w-5xl border border-gray-300 border-collapse rounded-lg">

            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">
                        Nom
                    </th>
                    <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">
                        Email
                    </th>
                    <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">
                        Entreprise
                    </th>
                    <th class="border border-gray-300 px-6 py-3 text-center text-sm font-semibold text-gray-700">
                        Action
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white">
                @foreach ($recruteur as $e)
                <tr class="">
                    <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">
                        {{ $e->name }}
                    </td>
                    <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">
                        {{ $e->email }}
                    </td>
                    <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">
                        {{ $e->entreprise }}
                    </td>
                    <td class="border border-gray-300 px-6 py-3 text-center">
                        <a
                            href="{{ route('postuler', ['recruteur'=> $e->id]) }}"
                            class="inline-block rounded-md bg-blue-600 px-4 py-1.5 text-sm font-medium text-white "
                        >
                            Postuler
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
</x-app-layout>
