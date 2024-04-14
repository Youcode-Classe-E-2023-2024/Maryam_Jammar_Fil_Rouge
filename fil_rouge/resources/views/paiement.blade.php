<script src="https://cdn.tailwindcss.com"></script>
<header>
    <nav x-data="{ isOpen: false }"
         class="container h-16 bg-black fixed top-0 z-10 p-6 lg:flex lg:items-center lg:justify-around">
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
</header>
<main class="py-16 grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
    <div class="px-4 pt-12">
        <p class="text-xl font-medium">Order Summary</p>
        <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
        <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
            {{--            @foreach($event as $item)--}}
            <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                <img class="m-2 h-24 w-28 rounded-md border object-cover object-center" src="{{$event->image}}"
                     alt=""/>
                <div class="flex w-full flex-col px-4 py-4">
                    <span class="font-semibold">{{$event->title}}</span>
                    <span class="flex item-center float-right text-gray-400 py-2">
                            <svg class="mr-1 w-4 h-4 text-gray-400 dark:text-white" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                      d="M12 2a8 8 0 0 1 6.6 12.6l-.1.1-.6.7-5.1 6.2a1 1 0 0 1-1.6 0L6 15.3l-.3-.4-.2-.2v-.2A8 8 0 0 1 11.8 2Zm3 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        @if($event->event_type == 'online')
                            Online
                        @else
                            {{$event->country}}, {{$event->city}}
                        @endif
                    </span>
                    <p class="text-lg font-bold">{{$event->price}} DH</p>
                </div>
            </div>
            {{--            @endforeach--}}
        </div>

        <p class="mt-8 text-lg font-medium">Shipping Methods</p>
        <form class="mt-5 grid gap-6">
            <div class="relative">
                <input class="peer hidden" id="radio_1" type="radio" name="radio" checked/>
                <span
                    class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                <label
                    class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                    for="radio_1">
                    <img class="w-14 object-contain"
                         src="https://logos-world.net/wp-content/uploads/2020/04/FedEx-Logo.png" alt=""/>
                    <div class="ml-5">
                        <span class="mt-2 font-semibold">Fedex Delivery</span>
                        <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
                    </div>
                </label>
            </div>
            <div class="relative">
                <input class="peer hidden" id="radio_2" type="radio" name="radio" checked/>
                <span
                    class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                <label
                    class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                    for="radio_2">
                    <img class="w-14 object-contain"
                         src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/DHL_Logo.svg/2560px-DHL_Logo.svg.png"
                         alt=""/>
                    <div class="ml-5">
                        <span class="mt-2 font-semibold">Fedex Delivery</span>
                        <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
                    </div>
                </label>
            </div>
        </form>
    </div>
    <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
        <p class="text-xl font-medium">Payment Details</p>
        <p class="text-gray-400">Complete your order by providing your payment details.</p>
        <div class="">
            <label for="email" class="mt-4 mb-2 block text-sm font-medium">Email</label>
            <div class="relative">
                <input type="text" id="email" name="email"
                       class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                       placeholder="cymifodac@mailinator.com"/>
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                    </svg>
                </div>
            </div>
            <label for="card-holder" class="mt-4 mb-2 block text-sm font-medium">Card Holder</label>
            <div class="relative">
                <input type="text" id="card-holder" name="card-holder"
                       class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm uppercase shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                       placeholder="Katrina FAtrikaas"/>
                <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"/>
                    </svg>
                </div>
            </div>
            <label for="card-no" class="mt-4 mb-2 block text-sm font-medium">Card Details</label>
            <div class="flex">
                <div class="relative w-7/12 flex-shrink-0">
                    <input type="number" id="card-no" name="card-no"
                           class="w-full rounded-md border border-gray-200 px-2 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                           placeholder="1144-0014-1001-3271"/>
                    <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
                            <path
                                d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
                        </svg>
                    </div>
                </div>
                <input type="text" name="credit-expiry"
                       class="w-full rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                       placeholder="11/03"/>
                <input type="number" name="credit-cvc"
                       class="w-1/6 flex-shrink-0 rounded-md border border-gray-200 px-2 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                       placeholder="122"/>
            </div>
            <label for="billing-address" class="mt-4 mb-2 block text-sm font-medium">Billing Address</label>
            <div class="flex flex-col sm:flex-row">
                <div class="relative flex-shrink-0 sm:w-7/12">
                    <input type="text" id="billing-address" name="billing-address"
                           class="w-full rounded-md border border-gray-200 px-4 py-3 pl-11 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                           placeholder="Enim sequi veritatis"/>
                    <div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
                        <img class="h-4 w-4 object-contain"
                             src="https://flagpack.xyz/_nuxt/4c829b6c0131de7162790d2f897a90fd.svg" alt=""/>
                    </div>
                </div>
                <select type="text" name="billing-state"
                        class="w-full rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none focus:z-10 focus:border-blue-500 focus:ring-blue-500">
                    <option value="State">State</option>
                </select>
                <input type="number" name="billing-zip"
                       class="flex-shrink-0 rounded-md border border-gray-200 px-4 py-3 text-sm shadow-sm outline-none sm:w-1/6 focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                       placeholder="33"/>
            </div>

            <!-- Total -->
            {{--            <div class="mt-6 border-t border-b py-2">--}}
            {{--                <div class="flex items-center justify-between">--}}
            {{--                    <p class="text-sm font-medium text-gray-900">Subtotal</p>--}}
            {{--                    <p class="font-semibold text-gray-900">$399.00</p>--}}
            {{--                </div>--}}
            {{--                <div class="flex items-center justify-between">--}}
            {{--                    <p class="text-sm font-medium text-gray-900">Shipping</p>--}}
            {{--                    <p class="font-semibold text-gray-900">$8.00</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="mt-6 flex items-center justify-between">
                <p class="text-sm font-medium text-gray-900">Total</p>
                <p class="text-2xl font-semibold text-gray-900">{{$event->price}} DH</p>
            </div>
        </div>
        <form action="/buy/{{$event->id}}" method="post">
            @csrf
            <button class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">
                Place Order
            </button>
        </form>
    </div>
</main>
@if(Session::has('success'))
    <div id="alert-message" class="hidden bg-green-500 text-white px-4 py-3 absolute mx-auto end-0 rounded shadow-lg">
        {{ Session::get('success') }}
    </div>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const alertMessage = document.getElementById('alert-message');
        alertMessage.classList.remove('hidden');

        setTimeout(function () {
            alertMessage.classList.add('hidden');
        }, 4000);
    });
</script>
