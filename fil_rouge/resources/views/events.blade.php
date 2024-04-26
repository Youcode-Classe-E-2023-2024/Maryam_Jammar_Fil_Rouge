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
        <div class="pt-12 inset-0 bg-cover bg-center">

            @include('nav')
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
        <div class="container px-36 py-10">
            <div>
                <h1 class=" text-2xl capitalize  font-bold leading-9 dark:text-white lg:text-2xl">
                    Explore Events
                    across the World
                </h1>
            </div>

            <div id="events-container" class="py-2 grid grid-cols-1 gap-8 md:mt-8 md:grid-cols-2 xl:grid-cols-3">
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
                                <div>
                                <span
                                    class="capitalize text-md font-medium truncate">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('j F Y') }} </span>
                                </div>

                            </div>
                        </a>
                    @endforeach
                @else
                    <p>Résultat non trouvé.</p>
                @endif
            </div>
            <div class="">
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
                    </a>
                @endforeach
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

{{--                <div class="mx-auto mt-6 flex ">--}}
{{--                    <span class="inline-block h-1 w-40 rounded-full bg-blue-500"></span>--}}
{{--                    <span class="mx-1 inline-block h-1 w-3 rounded-full bg-blue-500"></span>--}}
{{--                    <span class="inline-block h-1 w-1 rounded-full bg-blue-500"></span>--}}
{{--                </div>--}}

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

    @include('footer')
</main>

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
