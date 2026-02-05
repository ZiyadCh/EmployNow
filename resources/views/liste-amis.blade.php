<x-app-layout>
    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 space-y-4">
                @foreach ($amis as $a)
                <div class="flex justify-between bg-gray-50 rounded-lg px-4 py-3">
                    <span class="text-sm text-gray-800">
                        {{ $a->name }}
                    </span>

                    <span class="text-xs text-gray-600">
                        {{ $a->status }}
                    </span>
                </div>
                @endforeach

                @if ($amis->isEmpty())
                <p class="text-center text-sm text-gray-500">
                    Aucun ami trouvé.
                </p>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>