@include('organizer.layout')

<body class="font-montserrat text-sm bg-white dark:bg-zinc-900 ">
<div
    class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
    <!-- Left Sidebar -->
    @include('organizer.left_side')
    <!-- /Left Sidebar -->

    <main class=" flex-1 pt-4  px-5 sm:px-10 ">

        <header class=" font-bold text-lg flex items-center  gap-x-3 md:hidden mb-12 ">
                <span class="mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-700 dark:text-white" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/>
                      </svg>
                </span>
            <svg class="h-8 w-8 fill-red-600 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z"></path>
            </svg>
            <div class="tracking-wide dark:text-white flex-1">MMovie<span class="text-red-600">.</span></div>

            <div class="relative items-center content-center flex ml-2">
                    <span class="text-gray-400 absolute left-4 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                <input type="text"
                       class="text-xs ring-1 bg-transparent ring-gray-200 dark:ring-zinc-600 focus:ring-red-300 pl-10 pr-5 text-gray-600 dark:text-white  py-3 rounded-full w-full outline-none focus:ring-1"
                       placeholder="Search ...">
            </div>
        </header>

        <section class="">
            <div class="flex items-center justify-between">
                <span class="font-semibold text-gray-700 text-base dark:text-white">My events</span>
            </div>

            <div class="mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 ">
                @foreach($events as $event)
                    <a href="/description/{{$event->id}}" class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                        <img src="{{$event->image}}"
                             class=" h-4/5 object-cover w-full  " alt="">
                        <div
                            class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                            <span class="capitalize  font-medium truncate">{{ substr($event->title, 0, 8) }}..</span>
                            <div class="flex space-x-2 items-center text-xs">
                                <svg class="w-12 h-6" xmlns="http://www.w3.org/2000/svg" width="64" height="32"
                                     viewBox="0 0 64 32" version="1.1">
                                    <g fill="#F5C518">
                                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                                    </g>
                                    <text class="text-bold text-black font-bold text-xs" x="32" y="21" fill="#000000"
                                          font-family="Arial" font-size="10px" text-anchor="middle">Buy Now!
                                    </text>
                                </svg>

                                <span class="font-bold">{{$event->price}} DH</span>
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
                                <span class="capitalize font-sm truncate">Status: {{ $event->status}}</span>
                                {{--                                <span class="capitalize font-medium truncate">{{ \Carbon\Carbon::parse($event->date)->translatedFormat('j F Y') }}</span>--}}
                                {{--                                <span class="capitalize font-medium truncate">{{ \Carbon\Carbon::parse($event->time)->format('h:i A') }}</span>--}}
                            </div>

                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex-col justify-between items-center mt-4 p-4">
                {{ $events->links() }}
            </div>
        </section>

    </main>

    <!-- Right Sidebar -->
{{--    @include('organizer.right_side')--}}
    <!-- /Right Sidebar -->
</div>
</body>


