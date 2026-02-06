
<x-app-layout>
    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <h2 class="text-sm font-semibold text-gray-800 mb-4">
                    Demandes d’amitié
                </h2>

                @foreach($demande as $d)
                <div class="flex items-center justify-between bg-yellow-50 rounded-lg px-4 py-3">
                    <span class="text-sm text-gray-800">
                            {{$d->name}}
                    </span>

                    <div class="flex gap-2">
                        <button class="inline-flex rounded-md bg-black-600 px-3 py-1 text-xs font-semibold ">
                                <a href="{{ route('accepter-ami', ['sender'=> $d->sender]) }}">
                            Accepter
                                </a>
                        </button>

                        <button
                            class="inline-flex rounded-md bg-red-600 px-3 py-1 text-xs font-semibold text-white hover:bg-red-700 transition">
                                <a href="{{ route('refuser-ami', ['sender'=> $d->sender]) }}">
                            Refuser
                                </a>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 space-y-4">
                <h2 class="text-sm font-semibold text-gray-800">
                    Mes amis
                </h2>

                @foreach ($amis as $a)
                    <div class="flex justify-between bg-gray-50 rounded-lg px-4 py-3">
                        <span class="text-sm text-gray-800">
                            {{ $a->name }}
                        </span>

                        <span class="text-xs text-gray-600">
                            Accepté
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


