<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white ">
                <div class="p-6 text-gray-900">
                    <h2>rechercher</h2><br>
<form action="{{ route('filter') }}" method="GET">
        <label for="search-nom">nom:</label>
        <input class="border" type="text" name="search-nom" >

        <label for="search-specialite">specialité:</label>
        <input class="border" type="text" name="search-specialite">

        <button type="submit" class="inline-block rounded-md bg-blue-600 px-4 py-1.5 text-sm font-medium text-white hover:bg-blue-700 transition">
            filtrer
        </button>
    </form>
                </div>
            </div>
        </div>
    </div>

<div class="p-6">
    <div class="overflow-x-auto">
        <table class="mx-auto w-full max-w-5xl border border-gray-300 border-collapse rounded-lg">

            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">
                        nom
                    </th>
                    <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">
                        email
                    </th>
                    <th class="border border-gray-300 px-6 py-3 text-left text-sm font-semibold text-gray-700">
                        specialité
                    </th>
                    <th class="border border-gray-300 px-6 py-3 text-center text-sm font-semibold text-gray-700">
                        action
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white">
                @foreach ($employant as $e)
                <tr class="hover:bg-gray-50 transition">
                    <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">
                        {{ $e->name }}
                    </td>
                    <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">
                        {{ $e->email }}
                    </td>
                    <td class="border border-gray-300 px-6 py-3 text-sm text-gray-800">
                        {{ $e->specialite }}
                    </td>
                    <td class="border border-gray-300 px-6 py-3 text-center">
                        <a
                            href="{{ route('voir', $e->id) }}"
                            class="inline-block rounded-md bg-blue-600 px-4 py-1.5 text-sm font-medium text-white "
                        >
                            Profile
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
</x-app-layout>
