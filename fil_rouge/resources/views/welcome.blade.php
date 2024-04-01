<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>

<!-- component -->
<script src="//unpkg.com/alpinejs" defer></script>

<main>
    <section class="bg-white dark:bg-gray-900">
        <div class="h-3/5 bg-cover bg-center"
             style="background-image: url('https://www.gl-events.co.za/sites/default/files/styles/hero_background_image/public/2019-06/gl-events-south-africa-2.jpg?itok=HEz04JDb')">
            <nav x-data="{ isOpen: false }"
                 class="container h-16 bg-black bg-opacity-25 fixed top-0 z-10 p-6 lg:flex lg:items-center lg:justify-around">
                <div class="flex items-center justify-between">
                    <div>
                        <a class="text-2xl font-bold text-white hover:text-gray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl"
                           href="#">Brand</a>
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
                        <button data-modal-target="default-modal-register" data-modal-toggle="default-modal-register"
                                class="transform text-gray-300 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
                                type="button">
                            Create Event
                        </button>
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="transform text-gray-300 transition-colors duration-300 hover:text-blue-500 dark:text-gray-200 dark:hover:text-blue-400 lg:mx-8"
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
                                class="w-full bg-[#0d1829] flex bg-transparent pl-2 text-[#cccccc] outline-0 border-none"
                                placeholder="Search name movie or select options"
                            />
                            <button type="submit" class="relative p-2 bg-[#0d1829] rounded-full">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
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

            <!-- component -->
            <div class="flex h-full w-full items-center justify-center container mx-auto px-8">
                <div class="max-w-2xl text-center">
                    <h1 class="text-3xl sm:text-5xl capitalize tracking-widest text-white lg:text-7xl flex justify-between">
                        <p class="text-blue-600">Comming</p> Soon
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
                        <form class="flex items-center w-full">
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
                                <input type="text" id="voice-search"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder="Search Mockups, Logos, Design Templates..." required>
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
                                    class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                <div class="h-40 w-40 rounded-full">
                    <img class="h-40 w-40 rounded-full object-cover"
                         src="https://static.seekingalpha.com/cdn/s3/uploads/getty_images/504008174/image_504008174.jpg?io=getty-c-crop-4-3"/>
                    <h2 class="mt-4 capitalize text-center text-black text-base font-semibold font-open-sans leading-tight">
                        Business</h2>
                </div>
                <div class="h-40 w-40 rounded-full">
                    <img class="h-40 w-40 rounded-full object-cover"
                         src="https://variety.com/wp-content/uploads/2022/07/Music-Streaming-Wars.jpg?w=1024"/>
                    <h2 class="mt-4 capitalize text-center text-black text-base font-semibold font-open-sans leading-tight">
                        Music</h2>
                </div>
                <div class="h-40 w-40 rounded-full">
                    <img class="h-40 w-40 rounded-full object-cover"
                         src="https://cdn2.allevents.in/transup/87/45d830226d44b7a6f4806e3e11ca90/Literary-Arts.webp"/>
                    <h2 class="mt-4 capitalize text-center text-black text-base font-semibold font-open-sans leading-tight">
                        Literary Arts</h2>
                </div>
                <div class="h-40 w-40 rounded-full">
                    <img class="h-40 w-40 rounded-full object-cover"
                         src="https://cdn2.allevents.in/transup/f7/16c775257d49ba88baacd4c832d94a/Workshops.webp"/>
                    <h2 class="mt-4 capitalize text-center text-black text-base font-semibold font-open-sans leading-tight">
                        Workshops</h2>
                </div>
                <div class="h-40 w-40 rounded-full">
                    <img class="h-40 w-40 rounded-full object-cover"
                         src="https://cdn2.allevents.in/transup/61/e9bec592c540879eefb33117507bf0/Sports.webp"/>
                    <h2 class="mt-4 capitalize text-center text-black text-base font-semibold font-open-sans leading-tight">
                        Sports</h2>
                </div>
                <div>
                    <div class="relative h-40 w-40 rounded-full">
                        <img class="h-40 w-40 rounded-full"
                             src="https://cdn2.allevents.in/transup/58/28516da6a2483f963cd0007b4d0567/Theatre.webp"
                             alt="All Categories">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-sky-400 to-fuchsia-500 opacity-40 rounded-full"></div>
                        <div
                            class="absolute inset-0 flex justify-center items-center text-white text-[32px] font-semibold font-open-sans leading-tight">
                            11+
                        </div>
                    </div>
                    <div
                        class="mt-4 capitalize text-center text-black text-base font-semibold font-open-sans leading-tight">
                        All
                        Categories
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="h-[32rem] bg-gray-100 dark:bg-gray-800">
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
                <div
                    class="w-64 h-[215px] relative rounded-[5px] flex-col justify-start items-start flex bg-center bg-cover"
                    style="background-image: url('https://www.studying-in-uk.org/wp-content/uploads/2019/05/study-in-london-1068x641.jpg');">
                    <div
                        class="w-full h-full flex flex-col justify-end pl-3 text-white text-lg font-extralight font-['Roboto']">
                        <div class="mb-2">London</div>
                    </div>
                </div>
                <div
                    class="w-64 h-[215px] relative rounded-[5px] flex-col justify-start items-start flex bg-center bg-cover"
                    style="background-image: url('https://www.studying-in-uk.org/wp-content/uploads/2019/05/study-in-london-1068x641.jpg');">
                    <div
                        class="w-full h-full flex flex-col justify-end pl-3 text-white text-lg font-extralight font-['Roboto']">
                        <div class="mb-2">London</div>
                    </div>
                </div>
                <div
                    class="w-64 h-[215px] relative rounded-[5px] flex-col justify-start items-start flex bg-center bg-cover"
                    style="background-image: url('https://www.studying-in-uk.org/wp-content/uploads/2019/05/study-in-london-1068x641.jpg');">
                    <div
                        class="w-full h-full flex flex-col justify-end pl-3 text-white text-lg font-extralight font-['Roboto']">
                        <div class="mb-2">London</div>
                    </div>
                </div>
                <div
                    class="w-64 h-[215px] relative rounded-[5px] flex-col justify-start items-start flex bg-center bg-cover"
                    style="background-image: url('https://www.studying-in-uk.org/wp-content/uploads/2019/05/study-in-london-1068x641.jpg');">
                    <div
                        class="w-full h-full flex flex-col justify-end pl-3 text-white text-lg font-extralight font-['Roboto']">
                        <div class="mb-2">London</div>
                    </div>
                </div>
            </div>
            <div class="mt-8 flex justify-around">
                <img class="w-8 h-8 relative rounded-[14px]"
                     src="https://upload.wikimedia.org/wikipedia/en/0/03/Flag_of_Italy.svg"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/US.png"/>
                <img class="w-8 h-8 relative rounded-[14px]"
                     src="https://cdn2.allevents.in/transup/7c/1b048249aa476d8446f7ca8cff69fa/UK.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/IN.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/CH.png"/>
                <img class="w-8 h-8 relative rounded-[14px]"
                     src="https://cdn2.allevents.in/transup/7c/1b048249aa476d8446f7ca8cff69fa/UK.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/ES.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/IT.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/NZ.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/CH.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/NZ.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/NO.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/CH.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/PL.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/IN.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/CH.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/BE.png"/>
                <img class="w-8 h-8 relative rounded-[14px]" src="https://cdn5.allevents.in/images/flags/32/CH.png"/>
                {{--                <img class="w-8 h-8 relative rounded-[14px]" src="https://via.placeholder.com/32x32" />--}}
                {{--                <img class="w-8 h-8 relative rounded-[14px]" src="https://via.placeholder.com/32x32" />--}}
                {{--                <img class="w-8 h-8 relative rounded-[14px]" src="https://via.placeholder.com/32x32" />--}}
                {{--                <img class="w-8 h-8 relative rounded-[14px]" src="https://via.placeholder.com/32x32" />--}}

                <div class="w-[78.19px] h-[21px] text-cyan-700 text-[13px] font-normal font-['Roboto'] leading-[21px]">
                    more cities
                </div>
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

                {{--                <p class="mx-auto mt-4 max-w-lg text-gray-500">Salami mustard spice tea fridge authentic Chinese food--}}
                {{--                    dish salt tasty liquor. Sweet savory foodtruck pie.</p>--}}
            </div>
            <div
                class="absolute border-b border-neutral-200 sm:grid-cols-3">
                <div
                    class="w-[72.19px] self-stretch pl-[25.50px] pr-[25.17px] pt-[14.50px] pb-[17.50px] border-b-2 border-neutral-700 justify-center items-center inline-flex">
                    <div class="w-[21.52px] h-5 text-neutral-700 text-lg font-medium font-['Roboto'] leading-tight">All
                    </div>
                </div>
                <div
                    class="w-[132.23px] self-stretch pl-[25.50px] pr-[24.80px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <div class="w-[81.93px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">
                        Tomorrow
                    </div>
                </div>
                <div
                    class="w-[134.58px] self-stretch pl-[25.50px] pr-[25.17px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <div class="w-[83.91px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">This
                        Week
                    </div>
                </div>
                <div
                    class="w-[164.23px] self-stretch pl-[25.50px] pr-[25.12px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <div class="w-[113.61px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">This
                        Weekend
                    </div>
                </div>
                <div
                    class="w-[137.25px] self-stretch pl-[25.50px] pr-[25.17px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <div class="w-[86.58px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">Next
                        Week
                    </div>
                </div>
                <div
                    class="w-[166.91px] self-stretch pl-[25.50px] pr-[25.12px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <div class="w-[116.29px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">Next
                        Weekend
                    </div>
                </div>
                <div
                    class="w-[142.30px] self-stretch pl-[25.50px] pr-[25.16px] pt-[14.50px] pb-[17.50px] justify-center items-center inline-flex">
                    <div class="w-[91.64px] h-5 text-zinc-500 text-lg font-medium font-['Roboto'] leading-tight">This
                        Month
                    </div>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 xl:grid-cols-3">
                <div
                    class="w-[354.53px] bg-white rounded-md shadow">
                    <div
                        class="w-full h-[177px] relative bg-neutral-100 border-b border-neutral-200 flex-col justify-start items-start flex">
                        <img class="w-full h-44 relative" src="https://via.placeholder.com/355x176"/>
                    </div>
                    <div class="self-stretch h-[150px] p-5 flex-col justify-center items-start gap-10 inline-flex">
                        <div
                            class="self-stretch grow shrink basis-0 flex-col justify-center items-start gap-2.5 inline-flex">
                            <div
                                class="self-stretch grow shrink basis-0 pr-[20.59px] justify-start items-center inline-flex">
                                <div
                                    class="w-[293.94px] h-5 text-zinc-700 text-base font-semibold font-['Roboto'] leading-tight">
                                    Third Eye Blind and Yellowcard (Concert)
                                </div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 pr-[151.93px] justify-start items-center inline-flex">
                                <div
                                    class="w-[162.60px] h-5 text-zinc-500 text-[13px] font-normal font-['Roboto'] leading-tight">
                                    Shoreline Amphitheatre - CA
                                </div>
                            </div>
                        </div>
                        <div class="self-stretch h-5 justify-start items-center inline-flex">
                            <div class="w-[310px] flex justify-between">
                                <div
                                    class="w-[104.84px] self-stretch pr-[1.34px] justify-center items-center inline-flex">
                                    <div
                                        class="w-[103.50px] h-5 text-gray-600 text-[13px] font-semibold font-['Roboto'] uppercase leading-tight">
                                        Multiple Dates
                                    </div>
                                </div>
                                <div class="">
                                    220 DH
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-[354.53px] bg-white rounded-md shadow">
                    <div
                        class="w-full h-[177px] relative bg-neutral-100 border-b border-neutral-200 flex-col justify-start items-start flex">
                        <img class="w-full h-44 relative" src="https://via.placeholder.com/355x176"/>
                    </div>
                    <div class="self-stretch h-[150px] p-5 flex-col justify-center items-start gap-10 inline-flex">
                        <div
                            class="self-stretch grow shrink basis-0 flex-col justify-center items-start gap-2.5 inline-flex">
                            <div
                                class="self-stretch grow shrink basis-0 pr-[20.59px] justify-start items-center inline-flex">
                                <div
                                    class="w-[293.94px] h-5 text-zinc-700 text-base font-semibold font-['Roboto'] leading-tight">
                                    Third Eye Blind and Yellowcard (Concert)
                                </div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 pr-[151.93px] justify-start items-center inline-flex">
                                <div
                                    class="w-[162.60px] h-5 text-zinc-500 text-[13px] font-normal font-['Roboto'] leading-tight">
                                    Shoreline Amphitheatre - CA
                                </div>
                            </div>
                        </div>
                        <div class="self-stretch h-5 justify-start items-center inline-flex">
                            <div class="w-[310px] flex justify-between">
                                <div
                                    class="w-[104.84px] self-stretch pr-[1.34px] justify-center items-center inline-flex">
                                    <div
                                        class="w-[103.50px] h-5 text-gray-600 text-[13px] font-semibold font-['Roboto'] uppercase leading-tight">
                                        Multiple Dates
                                    </div>
                                </div>
                                <div class="">
                                    220 DH
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-[354.53px] bg-white rounded-md shadow">
                    <div
                        class="w-full h-[177px] relative bg-neutral-100 border-b border-neutral-200 flex-col justify-start items-start flex">
                        <img class="w-full h-44 relative" src="https://via.placeholder.com/355x176"/>
                    </div>
                    <div class="self-stretch h-[150px] p-5 flex-col justify-center items-start gap-10 inline-flex">
                        <div
                            class="self-stretch grow shrink basis-0 flex-col justify-center items-start gap-2.5 inline-flex">
                            <div
                                class="self-stretch grow shrink basis-0 pr-[20.59px] justify-start items-center inline-flex">
                                <div
                                    class="w-[293.94px] h-5 text-zinc-700 text-base font-semibold font-['Roboto'] leading-tight">
                                    Third Eye Blind and Yellowcard (Concert)
                                </div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 pr-[151.93px] justify-start items-center inline-flex">
                                <div
                                    class="w-[162.60px] h-5 text-zinc-500 text-[13px] font-normal font-['Roboto'] leading-tight">
                                    Shoreline Amphitheatre - CA
                                </div>
                            </div>
                        </div>
                        <div class="self-stretch h-5 justify-start items-center inline-flex">
                            <div class="w-[310px] flex justify-between">
                                <div
                                    class="w-[104.84px] self-stretch pr-[1.34px] justify-center items-center inline-flex">
                                    <div
                                        class="w-[103.50px] h-5 text-gray-600 text-[13px] font-semibold font-['Roboto'] uppercase leading-tight">
                                        Multiple Dates
                                    </div>
                                </div>
                                <div class="">
                                    220 DH
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-[354.53px] bg-white rounded-md shadow">
                    <div
                        class="w-full h-[177px] relative bg-neutral-100 border-b border-neutral-200 flex-col justify-start items-start flex">
                        <img class="w-full h-44 relative" src="https://via.placeholder.com/355x176"/>
                    </div>
                    <div class="self-stretch h-[150px] p-5 flex-col justify-center items-start gap-10 inline-flex">
                        <div
                            class="self-stretch grow shrink basis-0 flex-col justify-center items-start gap-2.5 inline-flex">
                            <div
                                class="self-stretch grow shrink basis-0 pr-[20.59px] justify-start items-center inline-flex">
                                <div
                                    class="w-[293.94px] h-5 text-zinc-700 text-base font-semibold font-['Roboto'] leading-tight">
                                    Third Eye Blind and Yellowcard (Concert)
                                </div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 pr-[151.93px] justify-start items-center inline-flex">
                                <div
                                    class="w-[162.60px] h-5 text-zinc-500 text-[13px] font-normal font-['Roboto'] leading-tight">
                                    Shoreline Amphitheatre - CA
                                </div>
                            </div>
                        </div>
                        <div class="self-stretch h-5 justify-start items-center inline-flex">
                            <div class="w-[310px] flex justify-between">
                                <div
                                    class="w-[104.84px] self-stretch pr-[1.34px] justify-center items-center inline-flex">
                                    <div
                                        class="w-[103.50px] h-5 text-gray-600 text-[13px] font-semibold font-['Roboto'] uppercase leading-tight">
                                        Multiple Dates
                                    </div>
                                </div>
                                <div class="">
                                    220 DH
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-[354.53px] bg-white rounded-md shadow">
                    <div
                        class="w-full h-[177px] relative bg-neutral-100 border-b border-neutral-200 flex-col justify-start items-start flex">
                        <img class="w-full h-44 relative" src="https://via.placeholder.com/355x176"/>
                    </div>
                    <div class="self-stretch h-[150px] p-5 flex-col justify-center items-start gap-10 inline-flex">
                        <div
                            class="self-stretch grow shrink basis-0 flex-col justify-center items-start gap-2.5 inline-flex">
                            <div
                                class="self-stretch grow shrink basis-0 pr-[20.59px] justify-start items-center inline-flex">
                                <div
                                    class="w-[293.94px] h-5 text-zinc-700 text-base font-semibold font-['Roboto'] leading-tight">
                                    Third Eye Blind and Yellowcard (Concert)
                                </div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 pr-[151.93px] justify-start items-center inline-flex">
                                <div
                                    class="w-[162.60px] h-5 text-zinc-500 text-[13px] font-normal font-['Roboto'] leading-tight">
                                    Shoreline Amphitheatre - CA
                                </div>
                            </div>
                        </div>
                        <div class="self-stretch h-5 justify-start items-center inline-flex">
                            <div class="w-[310px] flex justify-between">
                                <div
                                    class="w-[104.84px] self-stretch pr-[1.34px] justify-center items-center inline-flex">
                                    <div
                                        class="w-[103.50px] h-5 text-gray-600 text-[13px] font-semibold font-['Roboto'] uppercase leading-tight">
                                        Multiple Dates
                                    </div>
                                </div>
                                <div class="">
                                    220 DH
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-[354.53px] bg-white rounded-md shadow">
                    <div
                        class="w-full h-[177px] relative bg-neutral-100 border-b border-neutral-200 flex-col justify-start items-start flex">
                        <img class="w-full h-44 relative" src="https://via.placeholder.com/355x176"/>
                    </div>
                    <div class="self-stretch h-[150px] p-5 flex-col justify-center items-start gap-10 inline-flex">
                        <div
                            class="self-stretch grow shrink basis-0 flex-col justify-center items-start gap-2.5 inline-flex">
                            <div
                                class="self-stretch grow shrink basis-0 pr-[20.59px] justify-start items-center inline-flex">
                                <div
                                    class="w-[293.94px] h-5 text-zinc-700 text-base font-semibold font-['Roboto'] leading-tight">
                                    Third Eye Blind and Yellowcard (Concert)
                                </div>
                            </div>
                            <div
                                class="self-stretch grow shrink basis-0 pr-[151.93px] justify-start items-center inline-flex">
                                <div
                                    class="w-[162.60px] h-5 text-zinc-500 text-[13px] font-normal font-['Roboto'] leading-tight">
                                    Shoreline Amphitheatre - CA
                                </div>
                            </div>
                        </div>
                        <div class="self-stretch h-5 justify-start items-center inline-flex">
                            <div class="w-[310px] flex justify-between">
                                <div
                                    class="w-[104.84px] self-stretch pr-[1.34px] justify-center items-center inline-flex">
                                    <div
                                        class="w-[103.50px] h-5 text-gray-600 text-[13px] font-semibold font-['Roboto'] uppercase leading-tight">
                                        Multiple Dates
                                    </div>
                                </div>
                                <div class="">
                                    220 DH
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-8">
            <h1 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">Pricing
                Plan</h1>

            <p class="mx-auto mt-4 max-w-2xl text-center text-gray-500 dark:text-gray-300 xl:mt-6">Lorem ipsum, dolor
                sit amet consectetur adipisicing elit. Alias quas magni libero consequuntur voluptatum velit amet id
                repudiandae ea, deleniti laborum in neque eveniet.</p>

            <div class="mt-6 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:mt-12 xl:gap-12">
                <div class="w-full space-y-8 rounded-lg border border-gray-100 p-8 text-center dark:border-gray-700">
                    <p class="font-medium uppercase text-gray-500 dark:text-gray-300">Free</p>

                    <h2 class="text-5xl font-bold uppercase text-gray-800 dark:text-gray-100">$0</h2>

                    <p class="font-medium text-gray-500 dark:text-gray-300">Life time</p>

                    <button
                        class="mt-10 w-full transform rounded-md bg-blue-600 px-4 py-2 capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Start Now
                    </button>
                </div>

                <div class="w-full space-y-8 rounded-lg bg-blue-600 p-8 text-center">
                    <img src="" alt="">
                    <p class="font-medium uppercase text-gray-200">Premium</p>

                    <h2 class="text-5xl font-bold uppercase text-white dark:text-gray-100">$40</h2>

                    <p class="font-medium text-gray-200">Per month</p>

                    <button
                        class="mt-10 w-full transform rounded-md bg-white px-4 py-2 capitalize tracking-wide text-blue-500 transition-colors duration-300 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-200 focus:ring-opacity-80">
                        Start Now
                    </button>
                </div>

                <div class="w-full space-y-8 rounded-lg border border-gray-100 p-8 text-center dark:border-gray-700">
                    <p class="font-medium uppercase text-gray-500 dark:text-gray-300">Enterprise</p>

                    <h2 class="text-5xl font-bold uppercase text-gray-800 dark:text-gray-100">$100</h2>

                    <p class="font-medium text-gray-500 dark:text-gray-300">Life time</p>

                    <button
                        class="mt-10 w-full transform rounded-md bg-blue-600 px-4 py-2 capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Start Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="container mx-auto max-w-4xl px-6 py-10">
            <h1 class="text-center text-4xl font-semibold text-gray-800 dark:text-white">Frequently asked questions</h1>

            <div class="mt-12 space-y-8">
                <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
                    <button class="flex w-full items-center justify-between p-8">
                        <h1 class="font-semibold text-gray-700 dark:text-white">How i can play for my appoinment ?</h1>

                        <span class="rounded-full bg-gray-200 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6"/>
                </svg>
            </span>
                    </button>

                    <hr class="border-gray-200 dark:border-gray-700"/>

                    <p class="p-8 text-sm text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Voluptas eaque nobis, fugit odit omnis fugiat deleniti animi ab maxime cum
                        laboriosam recusandae facere dolorum veniam quia pariatur obcaecati illo ducimus?</p>
                </div>

                <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
                    <button class="flex w-full items-center justify-between p-8">
                        <h1 class="font-semibold text-gray-700 dark:text-white">Is the cost of the appoinment covered by
                            private health insurance?</h1>

                        <span class="rounded-full bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </span>
                    </button>
                </div>

                <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
                    <button class="flex w-full items-center justify-between p-8">
                        <h1 class="font-semibold text-gray-700 dark:text-white">Do i need a referral?</h1>

                        <span class="rounded-full bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </span>
                    </button>
                </div>

                <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
                    <button class="flex w-full items-center justify-between p-8">
                        <h1 class="font-semibold text-gray-700 dark:text-white">What are your opening house?</h1>

                        <span class="rounded-full bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </span>
                    </button>
                </div>

                <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
                    <button class="flex w-full items-center justify-between p-8">
                        <h1 class="font-semibold text-gray-700 dark:text-white">What can i expect at my first
                            consultation?</h1>

                        <span class="rounded-full bg-blue-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
            </span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section
        class="min-h-screen bg-gradient-to-r from-blue-600 via-blue-800 to-blue-900 dark:from-gray-700 dark:via-gray-800 dark:to-gray-900">
        <div class="container mx-auto flex min-h-screen flex-col px-6 py-12">
            <div class="flex-1 lg:-mx-6 lg:flex lg:items-center">
                <div class="text-white lg:mx-6 lg:w-1/2">
                    <h1 class="text-3xl font-semibold capitalize lg:text-5xl">Get a quote</h1>

                    <p class="mt-6 max-w-xl">Ask us everything and we would love to hear from you</p>

                    <div class="mt-6 space-y-8 md:mt-8">
                        <p class="-mx-2 flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-6 w-6 text-white" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>

                            <span class="mx-2 w-72 truncate text-white"> Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi 96522 </span>
                        </p>

                        <p class="-mx-2 flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-6 w-6 text-white" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>

                            <span class="mx-2 w-72 truncate text-white">(257) 563-7401</span>
                        </p>

                        <p class="-mx-2 flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-6 w-6 text-white" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>

                            <span class="mx-2 w-72 truncate text-white">acb@example.com</span>
                        </p>
                    </div>

                    <div class="mt-6 md:mt-8">
                        <h3 class="text-gray-300">Follow us</h3>

                        <div class="-mx-1.5 mt-4 flex">
                            <a class="mx-1.5 transform text-white transition-colors duration-300 hover:text-blue-500"
                               href="#">
                                <svg class="h-10 w-10 fill-current" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.6668 6.67334C18.0002 7.00001 17.3468 7.13268 16.6668 7.33334C15.9195 6.49001 14.8115 6.44334 13.7468 6.84201C12.6822 7.24068 11.9848 8.21534 12.0002 9.33334V10C9.83683 10.0553 7.91016 9.07001 6.66683 7.33334C6.66683 7.33334 3.87883 12.2887 9.3335 14.6667C8.0855 15.498 6.84083 16.0587 5.3335 16C7.53883 17.202 9.94216 17.6153 12.0228 17.0113C14.4095 16.318 16.3708 14.5293 17.1235 11.85C17.348 11.0351 17.4595 10.1932 17.4548 9.34801C17.4535 9.18201 18.4615 7.50001 18.6668 6.67268V6.67334Z"/>
                                </svg>
                            </a>

                            <a class="mx-1.5 transform text-white transition-colors duration-300 hover:text-blue-500"
                               href="#">
                                <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.2 8.80005C16.4731 8.80005 17.694 9.30576 18.5941 10.2059C19.4943 11.1061 20 12.327 20 13.6V19.2H16.8V13.6C16.8 13.1757 16.6315 12.7687 16.3314 12.4687C16.0313 12.1686 15.6244 12 15.2 12C14.7757 12 14.3687 12.1686 14.0687 12.4687C13.7686 12.7687 13.6 13.1757 13.6 13.6V19.2H10.4V13.6C10.4 12.327 10.9057 11.1061 11.8059 10.2059C12.7061 9.30576 13.927 8.80005 15.2 8.80005Z"
                                        fill="currentColor"/>
                                    <path d="M7.2 9.6001H4V19.2001H7.2V9.6001Z" fill="currentColor"/>
                                    <path
                                        d="M5.6 7.2C6.48366 7.2 7.2 6.48366 7.2 5.6C7.2 4.71634 6.48366 4 5.6 4C4.71634 4 4 4.71634 4 5.6C4 6.48366 4.71634 7.2 5.6 7.2Z"
                                        fill="currentColor"/>
                                </svg>
                            </a>

                            <a class="mx-1.5 transform text-white transition-colors duration-300 hover:text-blue-500"
                               href="#">
                                <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z"
                                        fill="currentColor"/>
                                </svg>
                            </a>

                            <a class="mx-1.5 transform text-white transition-colors duration-300 hover:text-blue-500"
                               href="#">
                                <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.9294 7.72275C9.65868 7.72275 7.82715 9.55428 7.82715 11.825C7.82715 14.0956 9.65868 15.9271 11.9294 15.9271C14.2 15.9271 16.0316 14.0956 16.0316 11.825C16.0316 9.55428 14.2 7.72275 11.9294 7.72275ZM11.9294 14.4919C10.462 14.4919 9.26239 13.2959 9.26239 11.825C9.26239 10.354 10.4584 9.15799 11.9294 9.15799C13.4003 9.15799 14.5963 10.354 14.5963 11.825C14.5963 13.2959 13.3967 14.4919 11.9294 14.4919ZM17.1562 7.55495C17.1562 8.08692 16.7277 8.51178 16.1994 8.51178C15.6674 8.51178 15.2425 8.08335 15.2425 7.55495C15.2425 7.02656 15.671 6.59813 16.1994 6.59813C16.7277 6.59813 17.1562 7.02656 17.1562 7.55495ZM19.8731 8.52606C19.8124 7.24434 19.5197 6.10901 18.5807 5.17361C17.6453 4.23821 16.51 3.94545 15.2282 3.88118C13.9073 3.80621 9.94787 3.80621 8.62689 3.88118C7.34874 3.94188 6.21341 4.23464 5.27444 5.17004C4.33547 6.10544 4.04628 7.24077 3.98201 8.52249C3.90704 9.84347 3.90704 13.8029 3.98201 15.1238C4.04271 16.4056 4.33547 17.5409 5.27444 18.4763C6.21341 19.4117 7.34517 19.7045 8.62689 19.7687C9.94787 19.8437 13.9073 19.8437 15.2282 19.7687C16.51 19.708 17.6453 19.4153 18.5807 18.4763C19.5161 17.5409 19.8089 16.4056 19.8731 15.1238C19.9481 13.8029 19.9481 9.84704 19.8731 8.52606ZM18.1665 16.5412C17.8881 17.241 17.349 17.7801 16.6456 18.0621C15.5924 18.4799 13.0932 18.3835 11.9294 18.3835C10.7655 18.3835 8.26272 18.4763 7.21307 18.0621C6.51331 17.7837 5.9742 17.2446 5.69215 16.5412C5.27444 15.488 5.37083 12.9888 5.37083 11.825C5.37083 10.6611 5.27801 8.15832 5.69215 7.10867C5.97063 6.40891 6.50974 5.8698 7.21307 5.58775C8.26629 5.17004 10.7655 5.26643 11.9294 5.26643C13.0932 5.26643 15.596 5.17361 16.6456 5.58775C17.3454 5.86623 17.8845 6.40534 18.1665 7.10867C18.5843 8.16189 18.4879 10.6611 18.4879 11.825C18.4879 12.9888 18.5843 15.4916 18.1665 16.5412Z"
                                        fill="currentColor"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-8 lg:mx-6 lg:w-1/2">
                    <div
                        class="mx-auto w-full overflow-hidden rounded-xl bg-white px-8 py-10 shadow-2xl dark:bg-gray-900 lg:max-w-xl">
                        <h1 class="text-2xl font-medium text-gray-700 dark:text-gray-200">Contact form</h1>

                        <form class="mt-6">
                            <div class="flex-1">
                                <label class="mb-2 block text-sm text-gray-600 dark:text-gray-200">Full Name</label>
                                <input type="text" placeholder="John Doe"
                                       class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-5 py-3 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"/>
                            </div>

                            <div class="mt-6 flex-1">
                                <label class="mb-2 block text-sm text-gray-600 dark:text-gray-200">Email address</label>
                                <input type="email" placeholder="johndoe@example.com"
                                       class="mt-2 block w-full rounded-md border border-gray-200 bg-white px-5 py-3 text-gray-700 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"/>
                            </div>

                            <div class="mt-6 w-full">
                                <label class="mb-2 block text-sm text-gray-600 dark:text-gray-200">Message</label>
                                <textarea
                                    class="mt-2 block h-32 w-full rounded-md border border-gray-200 bg-white px-5 py-3 text-gray-700 placeholder-gray-400 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300 md:h-48"
                                    placeholder="Message"></textarea>
                            </div>

                            <button
                                class="mt-6 w-full transform rounded-md bg-blue-600 px-6 py-3 text-sm font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                                get in touch
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6 py-12">
            <div class="md:-mx-3 md:flex md:items-center md:justify-between">
                <h1 class="text-3xl font-semibold tracking-tight text-gray-800 dark:text-white md:mx-3 xl:text-4xl">
                    Subscribe our newsletter to get update.</h1>

                <div class="mt-6 shrink-0 md:mx-3 md:mt-0 md:w-auto">
                    <a href="#"
                       class="inline-flex w-full items-center justify-center rounded-lg bg-gray-800 px-4 py-2 text-sm text-white duration-300 hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                        <span class="mx-2">Sign Up Now</span>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="mx-2 h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10"/>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

                    <div class="mt-5 flex flex-col items-start space-y-2">
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Home</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Who
                            We Are</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Our
                            Philosophy</a>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Industries</p>

                    <div class="mt-5 flex flex-col items-start space-y-2">
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Retail
                            & E-Commerce</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Information
                            Technology</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Finance
                            & Insurance</a>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Services</p>

                    <div class="mt-5 flex flex-col items-start space-y-2">
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Translation</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Proofreading
                            & Editing</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Content
                            Creation</a>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Contact Us</p>

                    <div class="mt-5 flex flex-col items-start space-y-2">
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">+880
                            768 473 4978</a>
                        <a href="#"
                           class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">info@merakiui.com</a>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10"/>

            <div class="flex flex-col items-center justify-between sm:flex-row">
                <a href="#"
                   class="text-2xl font-bold text-gray-800 transition-colors duration-300 hover:text-gray-700 dark:text-white dark:hover:text-gray-300">Brand</a>

                <p class="mt-4 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">© Copyright 2021. All Rights
                    Reserved.</p>
            </div>
        </div>
    </footer>
</main>
<script>
    window.addEventListener('scroll', function () {
        var navbar = document.querySelector('.container');
        if (window.scrollY > 0) {
            navbar.classList.add('bg-black');
            navbar.classList.remove('bg-opacity-25');
        } else {
            navbar.classList.remove('bg-black');
            navbar.classList.add('bg-black', 'bg-opacity-25');
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
                    <button type="button"
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
