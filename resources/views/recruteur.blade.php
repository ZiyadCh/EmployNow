<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Trouver Des Employant") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border flex justify-between">
                        <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Specialite</th>
                        </tr>
                        @foreach ($employant as $e)
                        <tr>
                            <td>{{ $e['name'] }}</td>
                            <td>{{ $e['email'] }}</td>
                            <td>{{ $e['specialite'] }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
