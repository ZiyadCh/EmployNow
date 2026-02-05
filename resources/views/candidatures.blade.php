
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
 <!-- Card -->
        <div class="max-w-xs mx-auto">
            <div class="flex flex-col h-full bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Image -->
                <a class="block focus:outline-none focus-visible:ring-2" href="#0">
                    <figure class="relative h-0 pb-[56.25%] overflow-hidden">
                        <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out" src="" width="320" height="180" alt="Course">
                    </figure>
                </a>
                <!-- Card Content -->
                <div class="flex-grow flex flex-col p-5">
                    <!-- Card body -->
                    <div class="flex-grow">
                        <!-- Header -->
                        <header class="mb-3">
                                <h3 class="text-[30px] text-gray-900 font-extrabold leading-snug"></h3>
                        </header>
                        <!-- Content -->
                        <div class="mb-8">
                            <p></p>
                        </div>
                        <div class="mb-8">
                                <h3 class="font-extrabold">entreprise:</h3>
                            <p></p>
                        </div>
                        <div class="mb-8">
                                <h3 class="font-extrabold">Type de Contract:</h3>
                            <p></p>
                        </div>
                    </div>
                            <!-- liste-->
                </div>
            </div>
        </div>

           </div>
</section>
