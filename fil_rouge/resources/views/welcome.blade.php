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
        <div class="h-3/5 inset-0 bg-cover bg-center">

            <nav x-data="{ isOpen: false }"
                 class="container h-16 bg-black bg-opacity-15 fixed top-0 z-10 p-6 lg:flex lg:items-center lg:justify-around">
                <div class="flex items-center justify-between">
                    <div>
                        <a class="text-2xl font-bold text-white hover:text-gray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl"
                           href="#">Tchikita</a>
                    </div>

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
                        <div class="flex justify-around items-center">
                            {{--                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
                            {{--                                 version="1.1" width="12" height="12" viewBox="0 0 256 256" xml:space="preserve">--}}

                            {{--                                <defs>--}}
                            {{--                                </defs>--}}
                            {{--                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"--}}
                            {{--                                   transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">--}}
                            {{--                                    <path--}}
                            {{--                                        d="M 45 90 c -4.418 0 -8 -3.582 -8 -8 V 8 c 0 -4.418 3.582 -8 8 -8 c 4.418 0 8 3.582 8 8 v 74 C 53 86.418 49.418 90 45 90 z"--}}
                            {{--                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"--}}
                            {{--                                        transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>--}}
                            {{--                                    <path--}}
                            {{--                                        d="M 82 53 H 8 c -4.418 0 -8 -3.582 -8 -8 c 0 -4.418 3.582 -8 8 -8 h 74 c 4.418 0 8 3.582 8 8 C 90 49.418 86.418 53 82 53 z"--}}
                            {{--                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"--}}
                            {{--                                        transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>--}}
                            {{--                                </g>--}}
                            {{--                            </svg>--}}

                            <button data-modal-target="default-modal-register"
                                    data-modal-toggle="default-modal-register"

                                    class="transform text-gray-300 transition-colors duration-300 hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 lg:mx-8"
                                    type="button">
                                Create Event
                            </button>
                        </div>
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="transform text-gray-300 transition-colors duration-300 hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 lg:mx-8"
                                type="button">
                            Sign in
                        </button>
                        {{--                        <button data-modal-target="default-modal" data-modal-toggle="default-modal"--}}
                        {{--                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"--}}
                        {{--                                type="button">--}}
                        {{--                            Toggle modal--}}
                        {{--                        </button>--}}

                        {{--                        <a class="transform text-gray-300 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"--}}
                        {{--                           href="#">Pricing</a>--}}
                        {{--                        <a class="transform text-gray-300 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"--}}
                        {{--                           href="#">Contact</a>--}}
                    </div>

                    <!-- searchbar -->
                    <div class='flex items-center justify-center '>
                        <div class="flex rounded-full bg-[#0d1829] px-2 w-full max-w-[600px]">
                            {{--                            <button class="self-center flex p-1 cursor-pointer bg-[#0d1829]"> <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}

                            {{--                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>--}}

                            {{--                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>--}}

                            {{--                                    <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.567 9.8895C12.2495 8.90124 12.114 7.5637 11.247 6.7325C10.3679 5.88806 9.02339 5.75928 7.99998 6.4215C7.57983 6.69308 7.25013 7.0837 7.05298 7.5435C6.85867 7.99881 6.80774 8.50252 6.90698 8.9875C7.00665 9.47472 7.25054 9.92071 7.60698 10.2675C7.97021 10.6186 8.42786 10.8563 8.92398 10.9515C9.42353 11.049 9.94062 11.0001 10.413 10.8105C10.8798 10.6237 11.2812 10.3033 11.567 9.8895Z" stroke="#ff5c5c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M12.433 17.8895C11.7504 16.9012 11.886 15.5637 12.753 14.7325C13.6321 13.8881 14.9766 13.7593 16 14.4215C16.4202 14.6931 16.7498 15.0837 16.947 15.5435C17.1413 15.9988 17.1922 16.5025 17.093 16.9875C16.9933 17.4747 16.7494 17.9207 16.393 18.2675C16.0298 18.6186 15.5721 18.8563 15.076 18.9515C14.5773 19.0481 14.0614 18.9988 13.59 18.8095C13.1222 18.6234 12.7197 18.3034 12.433 17.8895V17.8895Z" stroke="#ff5c5c" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M12 7.75049C11.5858 7.75049 11.25 8.08627 11.25 8.50049C11.25 8.9147 11.5858 9.25049 12 9.25049V7.75049ZM19 9.25049C19.4142 9.25049 19.75 8.9147 19.75 8.50049C19.75 8.08627 19.4142 7.75049 19 7.75049V9.25049ZM6.857 9.25049C7.27121 9.25049 7.607 8.9147 7.607 8.50049C7.607 8.08627 7.27121 7.75049 6.857 7.75049V9.25049ZM5 7.75049C4.58579 7.75049 4.25 8.08627 4.25 8.50049C4.25 8.9147 4.58579 9.25049 5 9.25049V7.75049ZM12 17.2505C12.4142 17.2505 12.75 16.9147 12.75 16.5005C12.75 16.0863 12.4142 15.7505 12 15.7505V17.2505ZM5 15.7505C4.58579 15.7505 4.25 16.0863 4.25 16.5005C4.25 16.9147 4.58579 17.2505 5 17.2505V15.7505ZM17.143 15.7505C16.7288 15.7505 16.393 16.0863 16.393 16.5005C16.393 16.9147 16.7288 17.2505 17.143 17.2505V15.7505ZM19 17.2505C19.4142 17.2505 19.75 16.9147 19.75 16.5005C19.75 16.0863 19.4142 15.7505 19 15.7505V17.2505ZM12 9.25049H19V7.75049H12V9.25049ZM6.857 7.75049H5V9.25049H6.857V7.75049ZM12 15.7505H5V17.2505H12V15.7505ZM17.143 17.2505H19V15.7505H17.143V17.2505Z" fill="#ff5c5c"/> </g>--}}

                            {{--                                </svg></button>--}}

                            <input
                                type="text"
                                class="w-full bg-[#0d1829] flex bg-transparent pl-2 text-[#cccccc] outline-0 border-none focus:rounded-full focus:border-"
                                none
                                placeholder="Search name movie or select options"
                            />
                            <button type="submit" class="relative bg-[#0d1829] rounded-full">
                                <svg width="25px" height="30px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                            stroke="#999" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"/>
                                    </g>

                                </svg>
                            </button>
                        </div>
                    </div>
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
                <div class="max-w-2xl text-center">
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
                                <button type="button" class="flex absolute inset-y-0 right-0 items-center pr-3">
                                    <svg
                                        class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M7 4a3 3 0 016 0v4a3 3 0 11-6 0V4zm4 10.93A7.001 7.001 0 0017 8a1 1 0 10-2 0A5 5 0 015 8a1 1 0 00-2 0 7.001 7.001 0 006 6.93V17H6a1 1 0 100 2h8a1 1 0 100-2h-3v-2.07z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
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
        <div class="h-[28rem] bg-gray-100 dark:bg-gray-800">
            <div class="container mx-auto px-36 py-10">
                <h1 class=" text-2xl capitalize  font-bold leading-9 dark:text-white lg:text-2xl">
                    Explore Events
                    across the World
                </h1>

                <div class="mx-auto mt-6 flex ">
                    <span class="inline-block h-1 w-40 rounded-full bg-blue-500"></span>
                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-blue-500"></span>
                    <span class="inline-block h-1 w-1 rounded-full bg-blue-500"></span>
                </div>

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

            <div class="mx-auto mt-6 flex justify-center">
                <span class="inline-block h-1 w-40 rounded-full bg-blue-500"></span>
                <span class="mx-1 inline-block h-1 w-3 rounded-full bg-blue-500"></span>
                <span class="inline-block h-1 w-1 rounded-full bg-blue-500"></span>
            </div>

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
                <h1 class=" text-2xl capitalize  font-bold leading-9 dark:text-white lg:text-2xl">
                    Explore Events
                    across the World
                </h1>
            </div>
            <div
                class="absolute border-b border-neutral-200 sm:grid-cols-3">
                <div
                    class="w-[72.19px] self-stretch pl-[25.50px] pr-[25.17px] pt-[14.50px] pb-[17.50px] border-b-2 border-neutral-700 justify-center items-center inline-flex">
                    <a href="/"
                       class="w-[21.52px] h-5 text-neutral-700 text-lg font-medium font-['Roboto'] leading-tight">All
                    </a>
                </div>
                <div
                    class="w-[132.23px] self-stretch pl-[25.50px] pr-[24.80px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <a href="/filter/{{ \Carbon\Carbon::tomorrow()->format('Y-m-d') }}"
                       class="w-[81.93px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">
                        Tomorrow
                    </a>
                </div>
                <div
                    class="w-[134.58px] self-stretch pl-[25.50px] pr-[25.17px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <a href="/filter/this_week"
                       class="w-[83.91px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">
                        This Week
                    </a>
                </div>
                <div
                    class="w-[164.23px] self-stretch pl-[25.50px] pr-[25.12px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <a href="/filter/this_week-end"
                       class="w-[113.61px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">This
                        Weekend
                    </a>
                </div>
                <div
                    class="w-[137.25px] self-stretch pl-[25.50px] pr-[25.17px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <a href="/filter/next_week"
                       class="w-[86.58px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">Next
                        Week
                    </a>
                </div>
                <div
                    class="w-[166.91px] self-stretch pl-[25.50px] pr-[25.12px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <a href="/filter/next_week-end"
                       class="w-[116.29px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">Next
                        Weekend
                    </a>
                </div>
                <div
                    class="w-[142.30px] self-stretch pl-[25.50px] pr-[25.16px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <a href="/filter/this_month"
                       class="w-[91.64px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">
                        This Month
                    </a>
                </div>
            </div>
            <div id="events-container" class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 xl:grid-cols-3">
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
                    <div
                        class="card_box relative flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                        <div class="out">
                            Solde Out!
                        </div>
                        <img src="{{$event->image}}" class="h-4/5 object-cover w-full" alt="">
                        <div
                            class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                            <span class="capitalize font-medium truncate">{{ substr($event->title, 0, 16) }}...</span>
                            <div class="flex space-x-2 items-center text-xs">
                                {{--                                @if($event->sold_out)--}}
                                <span class="text-red-600 font-bold">Sold Out</span>
                                {{--                                @else--}}
                                {{--                                <svg class="w-12 h-6" xmlns="http://www.w3.org/2000/svg" width="64" height="32"--}}
                                {{--                                     viewBox="0 0 64 32" version="1.1">--}}
                                {{--                                    <g fill="#F5C518">--}}
                                {{--                                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>--}}
                                {{--                                    </g>--}}
                                {{--                                    <text class="text-bold text-black font-bold text-xs" x="32" y="21"--}}
                                {{--                                          fill="#000000" font-family="Arial" font-size="10px" text-anchor="middle">--}}
                                {{--                                        Buy Now!--}}
                                {{--                                    </text>--}}
                                {{--                                </svg>--}}
                                <span class="text-md font-bold">{{$event->price}} DH</span>
                                {{--                                @endif--}}
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
                    </div>
                @endforeach
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

{{--signin--}}
<div id="default-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-2/6 max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex p-4 pt-4 md:p-5 rounded-t dark:border-gray-600">
                <h3 class="text-xl mx-auto text-center font-semibold text-gray-900 dark:text-white">
                    Quick Sign In
                </h3>
                <button type="button"
                        class="text-end text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class=" flex flex-col justify-center items-center p-4 md:p-5 space-y-4">
                <p class="text-center p-4 text-sm text-gray-900">Join events, get recommendations based on your
                    interest.
                    Find where your friends are going.</p>
                <div>
                    <button type="button"
                            class="w-56 text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                        <span class="[&>svg]:h-6 [&>svg]:w-6 me-2 -ms-1">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 100 100"
                                 viewBox="0 0 100 100" id="facebook"><g><path
                                        fill="#1877f2"
                                        d="M50,2.5c-58.892,1.725-64.898,84.363-7.46,95l0,0h0H50h7.46l0,0C114.911,86.853,108.879,4.219,50,2.5z"></path><path
                                        fill="#f1f1f1" d="M57.46,64.104h11.125l2.117-13.814H57.46v-8.965c0-3.779,1.85-7.463,7.781-7.463h6.021
                                        c0,0,0-11.761,0-11.761c-12.894-2.323-28.385-1.616-28.722,17.66V50.29H30.417v13.814H42.54c0,0,0,33.395,0,33.396H50h7.46l0,0h0
                                        V64.104z"></path></g></svg>
                        </span>
                        Continue with Facebook
                    </button>
                </div>
                <div>
                    <form action="{{ route('google-auth') }}" method="GET">
                        @csrf
                        <button type="submit"

                                class="w-56 text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                        <span class="[&>svg]:h-5 [&>svg]:w-5 me-2 -ms-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2443" height="2500"
                                 preserveAspectRatio="xMidYMid" viewBox="0 0 256 262"
                                 id="google"><path fill="#4285F4"
                                                   d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path><path
                                    fill="#34A853"
                                    d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path><path
                                    fill="#FBBC05"
                                    d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path><path
                                    fill="#EB4335"
                                    d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path></svg>                        </span>
                            Continue with Google
                        </button>
                    </form>
                </div>
                <div>
                    <button>
                        <a href="/sign-in"
                           class="w-56 text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                        <span class="[&>svg]:h-5 [&>svg]:w-5 me-2 -ms-1">
                          <svg class=" rounded-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 96" id="email"><g
                                  data-name="Layer 2"><path
                                      d="M0 11.283V8a8 8 0 0 1 8-8h112a8 8 0 0 1 8 8v3.283l-64 40zm66.12 48.11a4.004 4.004 0 0 1-4.24 0L0 20.717V88a8 8 0 0 0 8 8h112a8 8 0 0 0 8-8V20.717z"></path></g></svg>
                        </span>
                            Continue with Email
                        </a>
                    </button>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-center p-4 md:p-5 rounded-b">
                <p class="text-center text-sm text-gray-900">By Signing In, I agree to AllEvents.in's <u
                        class="text-blue-400">Privacy Policy</u> and
                    <u class="text-blue-400">Terms of Service</u>.
                </p>
            </div>
        </div>
    </div>
</div>


{{--signup--}}
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
                <div class="pb-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                    <h5>Register with</h5>
                </div>
                <div class="flex flex-wrap px-3 -mx-3 sm:px-6 xl:px-12">
                    <div class="text-center w-3/12 max-w-full px-1 ml-auto flex-0">
                        <a class="flex justify-center items-center inline-block w-full px-5 py-2.5 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-transparent border border-gray-200 border-solid rounded-lg shadow-none cursor-pointer hover:-translate-y-px leading-pro text-xs ease-in tracking-tight-rem bg-150 bg-x-25 hover:bg-transparent hover:opacity-75"
                           href="javascript:;">
                            <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink32">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(3.000000, 3.000000)" fill-rule="nonzero">
                                        <circle fill="#3C5A9A" cx="29.5091719" cy="29.4927506" r="29.4882047"></circle>
                                        <path
                                            d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z"
                                            fill="#FFFFFF"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="w-3/12 max-w-full px-1 flex-0">
                        <a class="flex justify-center items-center inline-block w-full px-5 py-2.5 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-transparent border border-gray-200 border-solid rounded-lg shadow-none cursor-pointer hover:-translate-y-px leading-pro text-xs ease-in tracking-tight-rem bg-150 bg-x-25 hover:bg-transparent hover:opacity-75"
                           href="javascript:;">
                            <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(7.000000, 0.564551)" fill="#000000" fill-rule="nonzero">
                                        <path
                                            d="M40.9233048,32.8428307 C41.0078713,42.0741676 48.9124247,45.146088 49,45.1851909 C48.9331634,45.4017274 47.7369821,49.5628653 44.835501,53.8610269 C42.3271952,57.5771105 39.7241148,61.2793611 35.6233362,61.356042 C31.5939073,61.431307 30.2982233,58.9340578 25.6914424,58.9340578 C21.0860585,58.9340578 19.6464932,61.27947 15.8321878,61.4314159 C11.8738936,61.5833617 8.85958554,57.4131833 6.33064852,53.7107148 C1.16284874,46.1373849 -2.78641926,32.3103122 2.51645059,22.9768066 C5.15080028,18.3417501 9.85858819,15.4066355 14.9684701,15.3313705 C18.8554146,15.2562145 22.5241194,17.9820905 24.9003639,17.9820905 C27.275104,17.9820905 31.733383,14.7039812 36.4203248,15.1854154 C38.3824403,15.2681959 43.8902255,15.9888223 47.4267616,21.2362369 C47.1417927,21.4153043 40.8549638,25.1251794 40.9233048,32.8428307 M33.3504628,10.1750144 C35.4519466,7.59650964 36.8663676,4.00699306 36.4804992,0.435448578 C33.4513624,0.558856931 29.7884601,2.48154382 27.6157341,5.05863265 C25.6685547,7.34076135 23.9632549,10.9934525 24.4233742,14.4943068 C27.7996959,14.7590956 31.2488715,12.7551531 33.3504628,10.1750144"
                                        ></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="w-3/12 max-w-full px-1 mr-auto flex-0">
                        <a class="flex justify-center items-center inline-block w-full px-5 py-2.5 mb-4 font-bold text-center text-gray-200 uppercase align-middle transition-all bg-transparent border border-gray-200 border-solid rounded-lg shadow-none cursor-pointer hover:-translate-y-px leading-pro text-xs ease-in tracking-tight-rem bg-150 bg-x-25 hover:bg-transparent hover:opacity-75"
                           href="javascript:;">
                            <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                                        <path
                                            d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267"
                                            fill="#4285F4"></path>
                                        <path
                                            d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667"
                                            fill="#34A853"></path>
                                        <path
                                            d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782"
                                            fill="#FBBC05"></path>
                                        <path
                                            d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769"
                                            fill="#EB4335"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="relative w-full max-w-full px-3 mt-2 text-center shrink-0">
                        <p class="z-20 inline px-4 mb-2 font-semibold leading-normal bg-white text-sm text-slate-400">
                            or</p>
                    </div>
                </div>
                <div class="flex-auto p-6 text-center">
                    <form role="form text-left">
                        <div class="mb-4 w-80 mx-auto">
                            <input type="text"
                                   class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                   placeholder="Name" aria-label="Name" aria-describedby="email-addon"/>
                        </div>
                        <div class="mb-4 w-80 mx-auto">
                            <input type="email"
                                   class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                   placeholder="Email" aria-label="Email" aria-describedby="email-addon"/>
                        </div>
                        <div class="mb-4 w-80 mx-auto">
                            <input type="password"
                                   class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                   placeholder="Password" aria-label="Password" aria-describedby="password-addon"/>
                        </div>
                        <div class="min-h-6  text-center mb-0.5 block">
                            {{--                            <input--}}
                            {{--                                class="text-center w-4.8 h-4.8 ease -ml-7 rounded-1.4 checked:bg-gradient-to-tl checked:from-blue-500 checked:to-violet-500 after:text-xxs after:font-awesome after:duration-250 after:ease-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100"--}}
                            {{--                                type="checkbox" value="" checked/>--}}
                            <label class="mb-2 ml-1 font-normal cursor-pointer text-sm text-slate-700"
                                   for="flexCheckDefault"> I agree the <a href="javascript:;"
                                                                          class="font-bold text-slate-700">Terms and
                                    Conditions</a> </label>
                        </div>
                        <div class="text-center w-80 mx-auto">
                            <button type="button"
                                    class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                Sign up
                            </button>
                        </div>
                        <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a href="sign-in.blade.php"
                                                                                                class="font-bold text-slate-700">Sign
                                in</a></p>
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
