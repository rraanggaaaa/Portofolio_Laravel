@include('partials.header')

<body>
    
    <!-- about -->
    <section class="pt-10 overflow-hidden bg-gray-50 md:pt-0 sm:pt-16 2xl:pt-16">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid items-center grid-cols-1 md:grid-cols-2">

                <div>
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Hey 👋<br> I am
                        <br class="block sm:hidden" />Dwi Rangga Okta Zuhdiyanto
                    </h2>
                    <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-600 md:mt-8">
                        Ini merupakan tugas Trend Teknologi Mobile (A)<br>
                        Tools yang digunakan adalah:<br>
                         Laravel v.11.0.8<br> 
                        vite plugin v.1.0.2<br>dengan bulid style Tailwind CSS
                    </p>

                    <p class="mt-4 text-xl text-gray-600 md:mt-8">
                        <span class="relative inline-block">
                            <span class="absolute inline-block w-full bottom-0.5 h-2 bg-yellow-300"></span>
                            <span class="relative">Cari tahu Tailwind CSS: </span>
                        </span>
                        <a href="#" title="" class="transition-all duration-200 text-sky-500 hover:text-sky-600 hover:underline">https://tailwindcss.com/</a>
                    </p>
                </div>

                <div class="relative">
                    <img class="absolute inset-x-0 bottom-0 -mb-6 -translate-x-1/2 left-1/2" src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/blob-shape.svg" alt="" />

                    <img class="relative w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110" src="https://i.ibb.co/8sP5cb1/rangga-unbg.png" alt="" />
                </div>

            </div>
        </div>
    </section>

   
</body>

@include ('partials/footer')