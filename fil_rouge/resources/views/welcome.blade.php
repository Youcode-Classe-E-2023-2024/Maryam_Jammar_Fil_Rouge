<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>

<!-- component -->
<script src="//unpkg.com/alpinejs" defer></script>

<style>
    .card_box {
        position: relative;
    }

    .out {
        content: 'Solde Out!';
        position: absolute;
        width: 200%;
        height: 40px;
        background-image: linear-gradient(45deg, #ff6547 0%, #ffb144 51%, #ff7053 100%);
        transform: rotate(-15deg) translateY(-70px);
        /*transform: rotate(-33deg) translateY(-10px);*/
        display: flex;
        align-items: center;
        justify-content: start;
        padding-left: 8%;
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.23);
    }
</style>
<main>
    <section class="bg-white dark:bg-gray-900">
        {{--        <div class="absolute h-3/5 inset-0 bg-black opacity-35"></div>--}}
        <div class="h-3/5 flex justify-center items-center flex-col mx-auto inset-0 bg-cover bg-center">

            <nav x-data="{ isOpen: false }"
                 class="container text-center w-full h-16 bg-black bg-opacity-15 fixed top-0 z-10 p-6 lg:flex lg:items-center lg:justify-around">
                <div class="flex items-center justify-between">
                    <div>
                        <a class="text-2xl font-bold text-white hover:text-gray-300 dark:text-white dark:hover:text-gray-300 lg:text-3xl"
                           href="/">Tchikita</a>
                    </div>

{{--                    <div>--}}
{{--                        <img class="w-36 font-bold text-white hover:text-gray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl"--}}
{{--                             src="https://cdn.discordapp.com/attachments/1173898263309586467/1233079515417280573/Capture-removebg-preview_6.png?ex=662bca49&is=662a78c9&hm=68f3bc8f926523554381139b66240023a07ea1d15167bf709556caad2b64b5eb&"></img>--}}
{{--                    </div>--}}
                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button"
                                class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none dark:text-gray-200 dark:hover:text-gray-400 dark:focus:text-gray-400"
                                aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6"
                                 fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16"/>
                            </svg>

                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                     class="absolute inset-x-0 z-20 w-full bg-white px-6 py-4 shadow-md transition-all duration-300 ease-in-out dark:bg-gray-900 lg:relative lg:top-0 lg:mt-0 lg:flex lg:w-auto lg:translate-x-0 lg:items-center lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none lg:dark:bg-transparent">
                    <div class="lg:-px-8 flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
                        <a class="transform text-gray-300 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                           href="/about_Us">About Us</a>
                        @guest
                            <div class="flex justify-around items-center">
                                <a href="/sign-up"
                                   class="transform text-gray-300 transition-colors duration-300 hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 lg:mx-8"
                                   type="button">
                                    Create Event
                                </a>
                            </div>
                            <button data-modal-target="default-modal-register"
                                    data-modal-toggle="default-modal-register"
                                    class="transform text-gray-300 transition-colors duration-300 hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 lg:mx-8"
                                    type="button">
                                Sign in
                            </button>
                        @else
                            <a class="transform text-gray-300 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                               href="#">Welcome {{ auth()->user()->name }} !</a>
                            <form method="POST" action="/logout">
                                @csrf
                                <button
                                    class="transform text-gray-300 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8">
                                    Logout
                                </button>
                            </form>
                        @endguest
                    </div>

                    <!-- searchbar -->
{{--                    <div class='flex items-center justify-center pt-4 border-none'>--}}
{{--                        <form action="/search" method="GET" class="flex items-center  w-full">--}}
{{--                            <div class="flex rounded-full bg-[#0d1829] px-2 w-full max-w-[600px]">--}}
{{--                                <input--}}
{{--                                    type="text" name="search"--}}
{{--                                    class="w-full bg-[#0d1829] flex bg-transparent pl-2 text-[#cccccc] outline-0 border-none focus:rounded-full focus:border-none"--}}
{{--                                    none--}}
{{--                                    placeholder="Search by title, country, city..."--}}
{{--                                />--}}
{{--                                <button type="submit" class="relative bg-[#0d1829] rounded-full">--}}
{{--                                    <svg width="25px" height="30px" viewBox="0 0 24 24" fill="none"--}}
{{--                                         xmlns="http://www.w3.org/2000/svg">--}}

{{--                                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>--}}

{{--                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>--}}

{{--                                        <g id="SVGRepo_iconCarrier">--}}
{{--                                            <path--}}
{{--                                                d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"--}}
{{--                                                stroke="#999" stroke-width="2" stroke-linecap="round"--}}
{{--                                                stroke-linejoin="round"/>--}}
{{--                                        </g>--}}

{{--                                    </svg>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                </div>
            </nav>

            <div id="default-carousel"
                 class="h-3/5 bg-white dark:bg-gray-900 absolute top-0 left-0 right-0 bottom-0 z-0"
                 data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden  md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://i.pinimg.com/564x/16/49/b8/1649b845c47695dc2041946d41859e87.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://i.pinimg.com/564x/16/49/b8/1649b845c47695dc2041946d41859e87.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://i.pinimg.com/564x/16/49/b8/1649b845c47695dc2041946d41859e87.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://i.pinimg.com/564x/16/49/b8/1649b845c47695dc2041946d41859e87.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://i.pinimg.com/564x/16/49/b8/1649b845c47695dc2041946d41859e87.jpg"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
            </div>

            <!-- component -->
            <div class="flex h-full w-full items-center justify-center container mx-auto px-8 relative">
                <div class="max-w-2xl text-center mb-72 lg:mb-0">
                    <h1 class="text-3xl sm:text-5xl capitalize tracking-widest text-white lg:text-7xl flex justify-between">
                        <p class="">Comming</p> Soon
                    </h1>
                    {{--                    <span class="text-cyan-400 text-5xl font-bold font-roboto leading-52px">Live.</span>--}}

                    <p class="mt-6 lg:text-lg text-white">You can subscribe to our newsletter, and let you know when we
                        are
                        back</p>

                    <div class="mt-8 flex flex-col space-y-3 sm:-mx-2 sm:flex-row sm:justify-center sm:space-y-0">
                        {{--                        <input id="email" type="text"--}}
                        {{--                               class="rounded-md border border-transparent bg-white/20 px-4 py-2 text-white placeholder-white backdrop-blur-sm focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 sm:mx-2"--}}
                        {{--                               placeholder="Email Address"/>--}}

                        {{--                        <button--}}
                        {{--                            class="transform rounded-md bg-blue-700 px-8 py-2 text-sm font-medium capitalize tracking-wide text-white transition-colors duration-200 hover:bg-blue-600 focus:bg-blue-600 focus:outline-none sm:mx-2">--}}
                        {{--                            Notify Me--}}
                        {{--                        </button>--}}
                        <form action="/search" method="GET" class="flex items-center w-full">
                            <label for="voice-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="search"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black dark:focus:border-black"
                                       placeholder="Search by title, country, city..." required>
                            </div>
                            <button type="submit"
                                    class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-black rounded-lg border border-black hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-black dark:bg-black dark:hover:bg-black dark:focus:ring-black">
                                <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                Search
                            </button>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-36 py-10">
            <h1 class=" text-2xl capitalize  font-bold leading-9 dark:text-white lg:text-2xl">
                Explore Categories in Marrakech
            </h1>

            <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-4 md:gap-12 xl:mt-12 xl:grid-cols-6 xl:gap-12">
                @foreach($categories as $category)
                    <a href="/events/filter/{{$category->name}}" class="h-40 w-40 rounded-full">
                        <img class="h-40 w-40 rounded-full object-cover"
                             src="{{$category->image}}"/>
                        <h2 class="mt-4 capitalize text-center text-black text-base font-semibold font-open-sans leading-tight">
                            {{$category->name}}</h2>
                    </a>
                @endforeach
                <button data-modal-target="crypto-modal" data-modal-toggle="crypto-modal">
                    <div class="relative h-40 w-40 rounded-full">
                        <img class="h-40 w-40 rounded-full"
                             src="https://cdn2.allevents.in/transup/58/28516da6a2483f963cd0007b4d0567/Theatre.webp"
                             alt="All Categories">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-sky-400 to-fuchsia-500 opacity-40 rounded-full"></div>
                        <div
                            class="absolute inset-0 flex justify-center items-center text-white text-[32px] font-semibold font-open-sans leading-tight">
                            {{ max(0, count($allCategories) - 5) }}+

                        </div>
                    </div>
                    <div
                        class="mt-4 capitalize text-center text-black text-base font-semibold font-open-sans leading-tight">
                        All
                        Categories
                    </div>
                </button>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="h-[26rem] bg-gray-100 dark:bg-gray-800">
            <div class="container mx-auto px-36 py-10">
                <h1 class=" text-2xl capitalize  font-bold leading-9 dark:text-white lg:text-2xl">
                    Explore Events
                    across the World
                </h1>

                {{--                <p class="mx-auto mt-6 max-w-2xl text-center text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit--}}
                {{--                    amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias, adipisci--}}
                {{--                    rem similique, at omnis eligendi optio eos harum.</p>--}}
            </div>
        </div>

        <div class="container mx-auto -mt-72 px-36 py-16 sm:-mt-80 md:-mt-96">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-4">
                <a href="/events/Rabat"
                   class="w-64 h-[215px] relative rounded-[5px] flex-col justify-start items-start flex bg-center bg-cover"
                   style="background-image: url('https://mediorientedintorni.com/wp-content/uploads/2023/01/photo1673377109-3-1024x790.jpeg');">
                    <div
                        class="w-full h-full flex flex-col justify-end pl-3 text-white text-lg font-extralight font-['Roboto']">
                        <div class="mb-2">Rabat</div>
                    </div>
                </a>
                <a href="/events/Casablanca"
                   class="w-64 h-[215px] relative rounded-[5px] flex-col justify-start items-start flex bg-center bg-cover"
                   style="background-image: url('https://a.travel-assets.com/findyours-php/viewfinder/images/res70/469000/469964-Hassan-Ii-Mosque.jpg');">
                    <div
                        class="w-full h-full flex flex-col justify-end pl-3 text-white text-lg font-extralight font-['Roboto']">
                        <div class="mb-2">Casablanca</div>
                    </div>
                </a>
                <a href="/events/Marrakech"
                   class="w-64 h-[215px] relative rounded-[5px] flex-col justify-start items-start flex bg-center bg-cover"
                   style="background-image: url('https://media.gq-magazine.co.uk/photos/5d138f50976fa31476f39436/master/pass/marrakech-gq-9oct18_istock_b.jpg');">
                    <div
                        class="w-full h-full flex flex-col justify-end pl-3 text-white text-lg font-extralight font-['Roboto']">
                        <div class="mb-2">Marrakech</div>
                    </div>
                </a>
                <a href="/events/Tanger"
                   class="w-64 h-[215px] relative rounded-[5px] flex-col justify-start items-start flex bg-center bg-cover"
                   style="background-image: url('https://www.tanjamarinabay.ma/wp-content/uploads/2016/05/Sans-titre-1-1.jpg');">
                    <div
                        class="w-full h-full flex flex-col justify-end pl-3 text-white text-lg font-extralight font-['Roboto']">
                        <div class="mb-2">Tanger</div>
                    </div>
                </a>
            </div>
            <div class="mt-8 flex justify-around">
                @foreach ($flags as $countryCode => $country)
                    <a href="/events/{{$country['name']}}">
                        <img class="w-8 h-8 relative rounded-[14px]" src="{{ $country['image'] }}"
                             alt="{{ $country['name'] }}"/>
                    </a>
                @endforeach
                <button data-modal-target="crypto-modal-flags" data-modal-toggle="crypto-modal-flags"
                        class="w-[78.19px] h-[21px] text-cyan-700 text-[13px] font-normal font-['Roboto'] leading-[21px]">
                    more cities
                </button>
            </div>
        </div>

    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-10">
            <h1 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">What
                clients saying</h1>

            <div class="mx-auto mt-16 flex max-w-6xl items-start">
                <button
                    class="hidden rounded-full border p-2 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rtl:-scale-x-100 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <div>
                    <p class="flex items-center text-center text-gray-500 lg:mx-8">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Aperiam, quam. Odio voluptatem officiis eos illo! Pariatur, totam
                        alias. Beatae accusamus earum quos obcaecati minima molestias. Possimus minima dolores itaque!
                        Esse! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea voluptates fugiat corrupti
                        laudantium dolores reiciendis pariatur esse quod nihil quia cupiditate debitis quisquam nemo,
                        accusamus animi explicabo? Architecto, unde laboriosam?</p>

                    <div class="mt-8 flex flex-col items-center justify-center">
                        <img class="h-14 w-14 rounded-full object-cover"
                             src="https://images.unsplash.com/photo-1499470932971-a90681ce8530?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                             alt=""/>

                        <div class="mt-4 text-center">
                            <h1 class="font-semibold text-gray-800 dark:text-white">Mia Brown</h1>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Marketer</span>
                        </div>
                    </div>
                </div>

                <button
                    class="hidden rounded-full border p-2 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rtl:-scale-x-100 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container px-36 py-10">
            <div class="">
                <h1 class="text-2xl capitalize  font-bold leading-9 dark:text-white lg:text-2xl">
                    Explore Events
                    across the World
                </h1>
            </div>
{{--            <div--}}
{{--                class="absolute border-b border-neutral-200 sm:grid-cols-3">--}}
{{--                <div--}}
{{--                    class="w-[72.19px] self-stretch pl-[25.50px] pr-[25.17px] pt-[14.50px] pb-[17.50px] border-b-2 border-neutral-700 justify-center items-center inline-flex">--}}
{{--                    <a href="/"--}}
{{--                       class="w-[21.52px] h-5 text-neutral-700 text-lg font-medium font-['Roboto'] leading-tight">All--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div--}}
{{--                    class="w-[132.23px] self-stretch pl-[25.50px] pr-[24.80px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">--}}
{{--                    <a href="/filter/{{ \Carbon\Carbon::tomorrow()->format('Y-m-d') }}"--}}
{{--                       class="w-[81.93px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">--}}
{{--                        Tomorrow--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div--}}
{{--                    class="w-[134.58px] self-stretch pl-[25.50px] pr-[25.17px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">--}}
{{--                    <a href="/filter/this_week"--}}
{{--                       class="w-[83.91px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">--}}
{{--                        This Week--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div--}}
{{--                    class="w-[164.23px] self-stretch pl-[25.50px] pr-[25.12px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">--}}
{{--                    <a href="/filter/this_week-end"--}}
{{--                       class="w-[113.61px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">This--}}
{{--                        Weekend--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div--}}
{{--                    class="w-[137.25px] self-stretch pl-[25.50px] pr-[25.17px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">--}}
{{--                    <a href="/filter/next_week"--}}
{{--                       class="w-[86.58px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">Next--}}
{{--                        Week--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div--}}
{{--                    class="w-[166.91px] self-stretch pl-[25.50px] pr-[25.12px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">--}}
{{--                    <a href="/filter/next_week-end"--}}
{{--                       class="w-[116.29px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">Next--}}
{{--                        Weekend--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div--}}
{{--                    class="w-[142.30px] self-stretch pl-[25.50px] pr-[25.16px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">--}}
{{--                    <a href="/filter/this_month"--}}
{{--                       class="w-[91.64px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">--}}
{{--                        This Month--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 xl:grid-cols-3">
                @if (count($events) > 0)
                    @foreach($events as $event)
                        <a href="/description/{{$event->id}}"
                           class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                            <img src="{{$event->image}}"
                                 class=" h-4/5 object-cover w-full  " alt="">
                            <div
                                class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                                <span
                                    class="capitalize font-medium truncate">{{ substr($event->title, 0, 16) }}...</span>
                                <div class="flex space-x-2 items-center text-xs">
                                    <svg class="w-12 h-6" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                                         viewBox="0 0 64 32" version="1.1">
                                        <g fill="#F5C518">
                                            <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                                        </g>
                                        <text class="text-bold text-black font-bold text-xs" x="32" y="21"
                                              fill="#000000"
                                              font-family="Arial" font-size="10px" text-anchor="middle">Buy Now!
                                        </text>
                                    </svg>

                                    <span class="text-md font-bold">{{$event->price}} DH</span>
                                </div>
                            </div>
                            <div
                                class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between">
                                <div class="flex justify-between items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" width="25" height="25" viewBox="0 0 256 256"
                                         xml:space="preserve">
                                <defs>
                                </defs>
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                           transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                            <path
                                                d="M 45 1.802 c 16.583 0 30.075 13.491 30.075 30.075 c 0 7.102 -2.538 14.004 -7.145 19.434 L 45 78.317 L 22.07 51.311 c -4.608 -5.43 -7.145 -12.332 -7.145 -19.434 C 14.925 15.294 28.417 1.802 45 1.802 M 45 45.692 c 8.222 0 14.912 -6.689 14.912 -14.912 c 0 -8.222 -6.689 -14.912 -14.912 -14.912 S 30.088 22.557 30.088 30.78 C 30.088 39.002 36.778 45.692 45 45.692 M 45 0 C 27.395 0 13.123 14.272 13.123 31.877 c 0 7.86 2.858 15.043 7.573 20.6 L 45 81.101 l 24.304 -28.624 c 4.716 -5.558 7.573 -12.741 7.573 -20.6 C 76.877 14.272 62.605 0 45 0 L 45 0 z M 45 43.889 c -7.24 0 -13.11 -5.869 -13.11 -13.11 c 0 -7.24 5.869 -13.11 13.11 -13.11 s 13.11 5.869 13.11 13.11 C 58.11 38.02 52.24 43.889 45 43.889 L 45 43.889 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                            <path
                                                d="M 58.814 71.531 l -1.575 1.575 c 9.772 1.532 15.583 4.707 15.583 7.094 c 0 3.261 -10.838 7.997 -27.822 7.997 S 17.178 83.461 17.178 80.2 c 0 -2.387 5.811 -5.562 15.583 -7.094 l -1.575 -1.575 c -9.401 1.643 -15.81 4.907 -15.81 8.669 c 0 5.412 13.263 9.8 29.625 9.8 c 16.361 0 29.625 -4.388 29.625 -9.8 C 74.625 76.439 68.215 73.174 58.814 71.531 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                        </g>
                            </svg>
                                    @if($event->event_type == 'online')
                                        <span class="capitalize font-medium truncate">Online</span>
                                    @else
                                        <span class="capitalize font-medium truncate">{{$event->country}}</span>,
                                        <span class="capitalize font-medium truncate">{{$event->city}}</span>

                                    @endif
                                </div>
                                <div
                                    class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-end">
                                    <div class="capitalize text-md font-medium truncate"
                                         id="countdown{{$event->id}}"></div>
                                </div>
                                {{--timer--}}
                                <script>
                                    // Date de l'événement
                                    var eventDate{{$event->id}} = new Date("{{ $event->date }}");

                                    // Fonction pour mettre à jour le compte à rebours
                                    function updateCountdown{{$event->id}}() {
                                        var now = new Date();
                                        var distance = eventDate{{$event->id}} - now;

                                        // Calcul des mois, jours, heures, minutes et secondes restants
                                        var months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30));
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                        // Affichage du compte à rebours
                                        var countdownText = '';
                                        if (months > 0) {
                                            countdownText += months + " mois ";
                                            days -= months * 30; // Soustraire les mois pour éviter la répétition des jours
                                        }
                                        countdownText += days + " jours " + hours + "h " + minutes + "m " + seconds + "s ";
                                        document.getElementById("countdown{{$event->id}}").innerHTML = countdownText;

                                        // Mettre à jour le compte à rebours chaque seconde
                                        if (distance > 0) {
                                            setTimeout(updateCountdown{{$event->id}}, 1000);
                                        } else {
                                            document.getElementById("countdown{{$event->id}}").innerHTML = "L'événement est en cours !";
                                        }
                                    }

                                    // Appel initial à la fonction pour mettre à jour le compte à rebours
                                    updateCountdown{{$event->id}}();
                                </script>
                            </div>
                        </a>
                    @endforeach
                @else
                    <p>Résultat non trouvé.</p>
                @endif
            </div>
            <div class="pt-4">
                {{$events->links()}}
            </div>

        </div>
    </section>

    {{--Solde Out--}}
    <section class="bg-gray-100 dark:bg-gray-900">
        <div class="container px-36 py-10">
            <div class="">
                <h1 class=" text-2xl capitalize  font-bold leading-9 dark:text-white lg:text-2xl">
                    Past events
                </h1>
            </div>
            <div class=" grid grid-cols-1 gap-8 md:mt-4 md:grid-cols-2 xl:grid-cols-3">
                @foreach($pastEvents as $event)
                    <a href="/description/{{$event->id}}"
                        class="card_box relative flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                        <div class="out">
                            Solde Out!
                        </div>
                        <img src="{{$event->image}}" class="h-4/5 object-cover w-full" alt="">
                        <div
                            class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                            <span class="capitalize font-medium truncate">{{ substr($event->title, 0, 16) }}...</span>
                            <div class="flex space-x-2 items-center text-xs">
                                <span class="text-red-600 font-bold">Sold Out</span>
                                <span class="text-md font-bold">{{$event->price}} DH</span>
                            </div>
                        </div>
                        <div
                            class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between">
                            <div class="flex justify-between items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     version="1.1" width="25" height="25" viewBox="0 0 256 256" xml:space="preserve">
                                <defs>
                                </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                       transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path
                                            d="M 45 1.802 c 16.583 0 30.075 13.491 30.075 30.075 c 0 7.102 -2.538 14.004 -7.145 19.434 L 45 78.317 L 22.07 51.311 c -4.608 -5.43 -7.145 -12.332 -7.145 -19.434 C 14.925 15.294 28.417 1.802 45 1.802 M 45 45.692 c 8.222 0 14.912 -6.689 14.912 -14.912 c 0 -8.222 -6.689 -14.912 -14.912 -14.912 S 30.088 22.557 30.088 30.78 C 30.088 39.002 36.778 45.692 45 45.692 M 45 0 C 27.395 0 13.123 14.272 13.123 31.877 c 0 7.86 2.858 15.043 7.573 20.6 L 45 81.101 l 24.304 -28.624 c 4.716 -5.558 7.573 -12.741 7.573 -20.6 C 76.877 14.272 62.605 0 45 0 L 45 0 z M 45 43.889 c -7.24 0 -13.11 -5.869 -13.11 -13.11 c 0 -7.24 5.869 -13.11 13.11 -13.11 s 13.11 5.869 13.11 13.11 C 58.11 38.02 52.24 43.889 45 43.889 L 45 43.889 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                        <path
                                            d="M 58.814 71.531 l -1.575 1.575 c 9.772 1.532 15.583 4.707 15.583 7.094 c 0 3.261 -10.838 7.997 -27.822 7.997 S 17.178 83.461 17.178 80.2 c 0 -2.387 5.811 -5.562 15.583 -7.094 l -1.575 -1.575 c -9.401 1.643 -15.81 4.907 -15.81 8.669 c 0 5.412 13.263 9.8 29.625 9.8 c 16.361 0 29.625 -4.388 29.625 -9.8 C 74.625 76.439 68.215 73.174 58.814 71.531 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                    </g>
                            </svg>
                                @if($event->event_type == 'online')
                                    <span class="capitalize font-medium truncate">Online</span>
                                @else
                                    <span class="capitalize font-medium truncate">{{$event->country}}</span>,
                                    <span class="capitalize font-medium truncate">{{$event->city}}</span>

                                @endif
                            </div>
                            <div>
                                <span
                                    class="capitalize text-md font-medium truncate">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('j F Y') }}</span>
                                {{--                                <span--}}
                                {{--                                    class="capitalize text-md font-medium truncate">{{ \Carbon\Carbon::parse($event->time)->format('h:i A') }}</span>--}}
                                {{--                          --}}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex-col justify-between items-center mt-4 p-4">
                {{ $pastEvents->links() }}
            </div>
        </div>
    </section>

    @include('footer')
</main>
<script>
    window.addEventListener('scroll', function () {
        var navbar = document.querySelector('.container');
        if (window.scrollY > 0) {
            navbar.classList.add('bg-black');
            navbar.classList.remove('bg-opacity-15');
        } else {
            navbar.classList.remove('bg-black');
            navbar.classList.add('bg-black', 'bg-opacity-15');
        }
    });
</script>


{{--signip--}}
<div id="default-modal-register" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-2/5 max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-end items-end p-4 pt-4 md:p-5 rounded-t dark:border-gray-600">
                <button type="button"
                        class="text-end text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal-register">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="flex-auto">
                <div class="flex flex-wrap px-3 -mx-3 sm:px-6 xl:px-12">
                    <div class="mx-auto w-4 max-w-full px-1 flex-0">
                        <form action="{{ route('google-auth') }}" method="GET"
                              class="flex justify-center items-center inline-block w-full">
                            @csrf
                            <button
                                class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-gray-400 focus:bg-gray-50 active:bg-gray-100">
                                <div class="relative flex items-center space-x-8 justify-center">
                                    <img src="https://www.svgrepo.com/show/475656/google-color.svg"
                                         class="absolute left-0 w-5" alt="google logo">
                                    <span
                                        class="block w-max font-semibold tracking-wide text-gray-700 dark:text-white text-sm transition duration-300 group-hover:text-gray-600 sm:text-base">Continue
                                        with Google
                                    </span>
                                </div>
                            </button>
                        </form>
                    </div>
                    <div class="relative w-full max-w-full px-3 mt-2 text-center shrink-0">
                        <p class="z-20 inline px-4 mb-2 font-semibold leading-normal bg-white text-sm text-slate-400">
                            or</p>
                    </div>
                </div>
                <div class="flex-auto p-6 text-center">
                    <form role="form text-left" action="/sign-in" method="post">
                        @csrf
                        <div class="mb-4 w-80 mx-auto">
                            <input type="email" name="email"
                                   class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                   placeholder="Email" aria-label="Email" aria-describedby="email-addon"/>
                        </div>
                        <div class="mb-4 w-80 mx-auto">
                            <input type="password" name="password"
                                   class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                   placeholder="Password" aria-label="Password" aria-describedby="password-addon"/>
                        </div>
                        <div class="text-center w-80 mx-auto">
                            <p class="text-center text-sm font-light text-gray-500 dark:text-gray-400">
                                <a href="{{route('forgot-password')}}"
                                   class="font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot
                                    password?</a>
                            </p>
                            <button type="submit"
                                    class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                Sign in
                            </button>
                        </div>
                        <p class="mt-4 mb-0 leading-normal text-sm">Don't have an account? <a href="/sign-up"
                                                                                              class="font-bold text-slate-700">
                                Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{--categories--}}
<div id="crypto-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 max-h-full">
    <div class="relative p-8 w-4/6 max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    All categories
                </h3>
                <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crypto-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                {{--                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Select any categories and show your--}}
                {{--                    favorites events</p>--}}
                <div class="h-90 overflow-y-auto">
                    <div class="grid grid-cols-1 md:grid-cols-4 md:gap-12 xl:grid-cols-4 p-4 mx-auto">
                        @foreach($allCategories as $category)
                            <a href="/events/filter/{{$category->name}}" class="h-40 w-40 rounded-full">
                                <img class="h-40 w-40 rounded-full object-cover"
                                     src="{{$category->image}}"/>
                                <h2 class="mt-4 capitalize text-center text-black text-base font-semibold font-open-sans leading-tight">
                                    {{$category->name}}</h2>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--flags--}}
<div id="crypto-modal-flags" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 max-h-full">
    <div class="relative p-8 w-4/6 max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    All countries
                </h3>
                <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crypto-modal-flags">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class=" overflow-y-auto p-4 md:p-5">
                {{--                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Select any categories and show your--}}
                {{--                    favorites events</p>--}}
                <div class="h-90">
                    <div class="grid grid-cols-12 md:grid-cols-4 xl:grid-cols-12 p-4 mx-auto">
                        @foreach ($flagsData as $country)
                            <a href="/events/{{$country['name']}}">
                                <img class="w-8 h-8 relative rounded-[14px]" src="{{ $country['image'] }}"
                                     alt="{{ $country['name'] }}"/>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function filterEvents(date) {
        // Effectuer une requête AJAX vers votre endpoint de filtrage
        $.ajax({
            url: '/filter/' + date,
            type: 'GET',
            success: function (response) {
                // Mettre à jour la liste des événements avec la réponse
                $('#events-container').html(response);
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    }
</script>
