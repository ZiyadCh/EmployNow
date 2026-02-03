<x-app-layout>
<!--
Include Tailwind JIT CDN compiler
More info: https://beyondco.de/blog/tailwind-jit-compiler-via-cdn
-->
<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

<!-- Specify a custom Tailwind configuration -->
<script type="tailwind-config">
{
  theme: {
    extend: {
      colors: {
        gray: colors.blueGray,
      }
    }
  }
}
</script>

<!-- Snippet -->
<section class="flex flex-col justify-center antialiased bg-gray-50 text-gray-600 min-h-screen p-4">
    <div class="h-full">
        @foreach ($offer as $o)
 <!-- Card -->
        <div class="max-w-xs mx-auto">
            <div class="flex flex-col h-full bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Image -->
                <a class="block focus:outline-none focus-visible:ring-2" href="#0">
                    <figure class="relative h-0 pb-[56.25%] overflow-hidden">
                        <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out" src="{{ asset('storage/' . $o->image) }}" width="320" height="180" alt="Course">
                    </figure>
                </a>
                <!-- Card Content -->
                <div class="flex-grow flex flex-col p-5">
                    <!-- Card body -->
                    <div class="flex-grow">
                        <!-- Header -->
                        <header class="mb-3">
                                <h3 class="text-[30px] text-gray-900 font-extrabold leading-snug">{{$o->titre}}</h3>
                        </header>
                        <!-- Content -->
                        <div class="mb-8">
                            <p>{{$o->description}}</p>
                        </div>
                        <div class="mb-8">
                                <h3 class="font-extrabold">entreprise:</h3>
                            <p>{{$o->entreprise}}</p>
                        </div>
                        <div class="mb-8">
                                <h3 class="font-extrabold">Type de Contract:</h3>
                            <p>{{$o->type}}</p>
                        </div>
                            <x-primary-button>Postuler</x-primary-button>
                    </div>
                    <!-- Card footer -->

                </div>
            </div>
        </div>

        @endforeach
           </div>
</section>

<!-- More components -->
<div x-show="open" class="fixed bottom-0 right-0 w-full md:bottom-8 md:right-12 md:w-auto z-60" x-data="{ open: true }">
    <div class="bg-gray-800 text-gray-50 text-sm p-3 md:rounded shadow-lg flex justify-between">
        <div>👉 <a class="hover:underline ml-1" href="https://cruip.com/?ref=codepen-cruip-snippet-10" target="_blank">More components on Cruip.com</a></div>
        <button class="text-gray-500 hover:text-gray-400 ml-5" @click="open = false">
            <span class="sr-only">Close</span>
            <svg class="w-4 h-4 flex-shrink-0 fill-current" viewBox="0 0 16 16">
                <path d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z" />
            </svg>
        </button>
    </div>
</div>






</x-app-layout>
