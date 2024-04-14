<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>

<!-- component -->
<script src="//unpkg.com/alpinejs" defer></script>
{{--<style>--}}
{{--    .btn {--}}
{{--        font-size: 1rem;--}}
{{--        padding: 0.9rem 3.5rem;--}}
{{--        border: none;--}}
{{--        outline: none;--}}
{{--        border-radius: 0.4rem;--}}
{{--        cursor: pointer;--}}
{{--        text-transform: uppercase;--}}
{{--        background-color: #32CD32;--}}
{{--        color: rgb(234, 234, 234);--}}
{{--        font-weight: 700;--}}
{{--        transition: 0.6s;--}}
{{--        box-shadow: 0px 0px 60px #1f4c65;--}}
{{--        -webkit-box-reflect: below 10px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.4));--}}
{{--    }--}}

{{--    .btn:active {--}}
{{--        scale: 0.92;--}}
{{--    }--}}

{{--    .btn:hover {--}}
{{--        background: rgb(2, 29, 78);--}}
{{--        background: linear-gradient(270deg, #006400 0%, #008000 60%);--}}
{{--        color: rgb(4, 4, 38);--}}
{{--    }--}}
{{--</style>--}}

<style>
    .card {
        width: 200px;
        height: 64px;
        background: #32CD32;
        border-radius: 20px;;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white;
        transition: 0.2s ease-in-out;
    }

    .img {
        /*height: 30%;*/
        position: absolute;
        transition: 0.2s ease-in-out;
        z-index: 1;
    }

    .textBox {
        opacity: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: 0.2s ease-in-out;
        z-index: 2;
    }

    .textBox > .text {
        font-weight: bold;
    }

    .textBox > .head {
        font-size: 20px;
    }

    .textBox > .price {
        font-size: 17px;
    }

    .textBox > span {
        font-size: 20px;
        color: lightgrey;
    }

    .card:hover > .textBox {
        opacity: 1;
    }

    .card:hover > .img {
        height: 65%;
        filter: blur(7px);
        animation: anim 3s infinite;
    }

    @keyframes anim {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .card:hover {
        transform: scale(1.04) rotate(-1deg);
    }


</style>

{{--update button--}}
<style>
    .card2 {
        position: relative;
        width: 150px;
        height: 55px;
        background: #FFFACD;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: bold;
        border-radius: 15px;
        cursor: pointer;
    }

    .card2::before,
    .card2::after {
        position: absolute;
        content: "";
        width: 60%;
        height: 20%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: bold;
        background-color: #FFE4B5;
        transition: all 0.5s;
    }

    .card2::before {
        top: 0;
        right: 0;
        border-radius: 0 15px 0 100%;
    }

    .card2::after {
        bottom: 0;
        left: 0;
        border-radius: 0 100% 0 15px;
    }

    .card2:hover::before,
    .card2:hover:after {
        width: 100%;
        height: 100%;
        border-radius: 15px;
        transition: all 0.5s;
    }

    .card2:hover:after {
        content: "Update Your Event";
        color: white;
    }
</style>

{{--delete button--}}
<style>
    .card3 {
        position: relative;
        width: 150px;
        height: 55px;
        background: #DCDCDC;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: bold;
        border-radius: 15px;
        cursor: pointer;
    }

    .card3::before,
    .card3::after {
        position: absolute;
        content: "";
        width: 60%;
        height: 20%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: bold;
        background-color: #D3D3D3;
        transition: all 0.5s;
    }

    .card3::before {
        top: 0;
        right: 0;
        border-radius: 0 15px 0 100%;
    }

    .card3::after {
        bottom: 0;
        left: 0;
        border-radius: 0 100% 0 15px;
    }

    .card3:hover::before,
    .card3:hover:after {
        width: 100%;
        height: 100%;
        border-radius: 15px;
        transition: all 0.5s;
    }

    .card3:hover:after {
        content: "Delete Your Event";
        color: white;
    }
</style>

<main>
    <section class="py-16 container mx-auto px-6 md:px-0 bg-white dark:bg-gray-900">
        <div class=""
        >
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

            <!-- content -->
            <!-- Container for demo purpose -->
            <div class="container my-24 mx-auto md:px-6">
                <!-- Section: Design Block -->
                <section class="mb-32">
                    <!-- Jumbotron -->
                    <!-- Container for demo purpose -->
                    <div class="container my-24 mx-auto md:px-6">
                        <!-- Section: Design Block -->
                        <section class="mb-32 flex  flex-col ">
                            <div class="flex flex-wrap">
                                <div class="mb-12 w-full shrink-0 grow-0 basis-auto lg:mb-0 lg:w-5/12">
                                    <div class="flex lg:py-12">
                                        <img src="{{$event->image}}"
                                             class="z-0 w-full rounded-lg shadow-lg dark:shadow-black/20 lg:ml-[50px]"
                                             alt="image"/>
                                    </div>
                                </div>

                                <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                                    <div
                                        class="flex h-full items-center rounded-lg bg-[#F8F8FF] shadow-2xl p-6 text-center text-white lg:pl-12 lg:text-left">
                                        <div class="text-black lg:pl-12">
                                            <h2 class="mb-8 text-3xl font-bold">{{$event->title}}</h2>
                                            <p class="mb-8 pb-2 lg:pb-0">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Maxime, sint, repellat vel quo quisquam accusamus in qui at
                                                ipsa enim quibusdam illo laboriosam omnis. Labore itaque illum
                                                distinctio eum neque!
                                            </p>

                                            <div
                                                class="mx-auto mb-8 flex flex-col md:flex-row md:justify-around xl:justify-start">
                                                <p class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0 xl:mr-20">
                                                    <svg class="mr-2" id='Location_24' width='24' height='24'
                                                         viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'
                                                         xmlns:xlink='http://www.w3.org/1999/xlink'>
                                                        <rect width='24' height='24' stroke='none' fill='#000000'
                                                              opacity='0'/>


                                                        <g transform="matrix(0.74 0 0 0.74 12 12)">
                                                            <path
                                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                transform=" translate(-16.5, -13.5)"
                                                                d="M 24 0 C 20.686 0 18 2.686 18 6 C 18 10.792 23 12 23 14 C 23 14.549 23.448 15 24 15 C 24.552 15 25 14.549 25 14 C 25 12 30 10.792 30 6 C 30 2.686 27.314 0 24 0 z M 15 3 C 8.383 3 3 8.383 3 15 C 3 21.617 8.383 27 15 27 C 21.617 27 27 21.617 27 15 C 27 14.784 26.97975 14.574328 26.96875 14.361328 C 26.82175 15.569328 25.959406 16.547047 24.816406 16.873047 C 24.743406 17.256047 24.654063 17.634 24.539062 18 L 20.818359 18 C 20.932359 17.045 21 16.046 21 15 C 21 14.72 20.984609 14.451734 20.974609 14.177734 C 20.777609 13.942734 20.331281 13.556719 19.988281 13.261719 C 19.628281 12.951719 19.225359 12.599078 18.818359 12.205078 C 18.931359 13.087078 19 14.019 19 15 C 19 16.055 18.927828 17.061 18.798828 18 L 11.201172 18 C 11.073172 17.061 11 16.055 11 15 C 11 13.945 11.072172 12.939 11.201172 12 L 18.613281 12 C 18.060281 11.44 17.521313 10.778 17.070312 10 L 11.585938 10 C 12.344938 6.961 13.722 5 15 5 C 15.341 5 15.687297 5.1481563 16.029297 5.4101562 C 16.088297 4.6041562 16.267828 3.8333281 16.548828 3.1113281 C 16.040828 3.0463281 15.526 3 15 3 z M 24 4 C 25.105 4 26 4.895 26 6 C 26 7.105 25.105 8 24 8 C 22.895 8 22 7.105 22 6 C 22 4.895 22.895 4 24 4 z M 11.0625 5.8105469 C 10.3985 6.9385469 9.8677188 8.362 9.5117188 10 L 6.3535156 10 C 7.4305156 8.146 9.0785 6.6645469 11.0625 5.8105469 z M 5.4609375 12 L 9.1816406 12 C 9.0676406 12.955 9 13.954 9 15 C 9 16.046 9.0676406 17.045 9.1816406 18 L 5.4609375 18 C 5.1629375 17.052 5 16.045 5 15 C 5 13.955 5.1629375 12.948 5.4609375 12 z M 6.3535156 20 L 9.5117188 20 C 9.8677187 21.638 10.396547 23.061453 11.060547 24.189453 C 9.0775469 23.335453 7.4305156 21.854 6.3535156 20 z M 11.585938 20 L 18.414062 20 C 17.655062 23.039 16.278 25 15 25 C 13.722 25 12.344938 23.039 11.585938 20 z M 20.486328 20 L 23.646484 20 C 22.570484 21.854 20.9225 23.335453 18.9375 24.189453 C 19.6015 23.061453 20.130328 21.638 20.486328 20 z"
                                                                stroke-linecap="round"/>
                                                        </g>
                                                    </svg>
                                                    @if($event->event_type == 'online')
                                                        Online
                                                    @else
                                                        {{$event->country}}, {{$event->city}}
                                                    @endif
                                                </p>

                                                <p class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0 xl:mr-20">
                                                    <svg class="mr-2" id='Calendar_3_24' width='24' height='24'
                                                         viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'
                                                         xmlns:xlink='http://www.w3.org/1999/xlink'>
                                                        <rect width='24' height='24' stroke='none' fill='#000000'
                                                              opacity='0'/>


                                                        <g transform="matrix(0.83 0 0 0.83 12 12)">
                                                            <g style="">
                                                                <g transform="matrix(1 0 0 1 -5 -0.5)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-7, -11.5)"
                                                                        d="M 7.5 10.5 L 6.5 10.5 C 5.947715250169207 10.5 5.5 10.947715250169207 5.5 11.5 C 5.5 12.052284749830793 5.947715250169207 12.5 6.5 12.5 L 7.5 12.5 C 8.052284749830793 12.5 8.5 12.052284749830793 8.5 11.5 C 8.5 10.947715250169207 8.052284749830793 10.5 7.5 10.5 Z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 0 -0.5)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-12, -11.5)"
                                                                        d="M 12.5 10.5 L 11.5 10.5 C 10.947715250169207 10.5 10.5 10.947715250169207 10.5 11.5 C 10.5 12.052284749830793 10.947715250169207 12.5 11.5 12.5 L 12.5 12.5 C 13.052284749830793 12.5 13.5 12.052284749830793 13.5 11.5 C 13.5 10.947715250169207 13.052284749830793 10.5 12.5 10.5 Z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 5 -0.5)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-17, -11.5)"
                                                                        d="M 17.5 10.5 L 16.5 10.5 C 15.947715250169207 10.5 15.5 10.947715250169207 15.5 11.5 C 15.5 12.052284749830793 15.947715250169207 12.5 16.5 12.5 L 17.5 12.5 C 18.052284749830793 12.5 18.5 12.052284749830793 18.5 11.5 C 18.5 10.947715250169207 18.052284749830793 10.5 17.5 10.5 Z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 -5 3.5)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-7, -15.5)"
                                                                        d="M 7.5 14.5 L 6.5 14.5 C 5.947715250169207 14.5 5.5 14.947715250169207 5.5 15.5 C 5.5 16.052284749830793 5.947715250169207 16.5 6.5 16.5 L 7.5 16.5 C 8.052284749830793 16.5 8.5 16.052284749830793 8.5 15.5 C 8.5 14.947715250169207 8.052284749830793 14.5 7.5 14.5 Z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 0 3.5)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-12, -15.5)"
                                                                        d="M 12.5 14.5 L 11.5 14.5 C 10.947715250169207 14.5 10.5 14.947715250169207 10.5 15.5 C 10.5 16.052284749830793 10.947715250169207 16.5 11.5 16.5 L 12.5 16.5 C 13.052284749830793 16.5 13.5 16.052284749830793 13.5 15.5 C 13.5 14.947715250169207 13.052284749830793 14.5 12.5 14.5 Z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 5 3.5)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-17, -15.5)"
                                                                        d="M 17.5 14.5 L 16.5 14.5 C 15.947715250169207 14.5 15.5 14.947715250169207 15.5 15.5 C 15.5 16.052284749830793 15.947715250169207 16.5 16.5 16.5 L 17.5 16.5 C 18.052284749830793 16.5 18.5 16.052284749830793 18.5 15.5 C 18.5 14.947715250169207 18.052284749830793 14.5 17.5 14.5 Z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 -5 7.5)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-7, -19.5)"
                                                                        d="M 7.5 18.5 L 6.5 18.5 C 5.947715250169207 18.5 5.5 18.947715250169207 5.5 19.5 C 5.5 20.052284749830793 5.947715250169207 20.5 6.5 20.5 L 7.5 20.5 C 8.052284749830793 20.5 8.5 20.052284749830793 8.5 19.5 C 8.5 18.947715250169207 8.052284749830793 18.5 7.5 18.5 Z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 0 7.5)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-12, -19.5)"
                                                                        d="M 12.5 18.5 L 11.5 18.5 C 10.947715250169207 18.5 10.5 18.947715250169207 10.5 19.5 C 10.5 20.052284749830793 10.947715250169207 20.5 11.5 20.5 L 12.5 20.5 C 13.052284749830793 20.5 13.5 20.052284749830793 13.5 19.5 C 13.5 18.947715250169207 13.052284749830793 18.5 12.5 18.5 Z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 5 7.5)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-17, -19.5)"
                                                                        d="M 17.5 18.5 L 16.5 18.5 C 15.947715250169207 18.5 15.5 18.947715250169207 15.5 19.5 C 15.5 20.052284749830793 15.947715250169207 20.5 16.5 20.5 L 17.5 20.5 C 18.052284749830793 20.5 18.5 20.052284749830793 18.5 19.5 C 18.5 18.947715250169207 18.052284749830793 18.5 17.5 18.5 Z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 0 0)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-12, -12)"
                                                                        d="M 21.5 3 L 18.75 3 C 18.611928812542303 3 18.5 2.8880711874576983 18.5 2.75 L 18.5 1 C 18.5 0.44771525016920655 18.052284749830793 0 17.5 0 C 16.947715250169207 0 16.5 0.44771525016920644 16.5 0.9999999999999999 L 16.5 5.75 C 16.5 6.164213562373095 16.164213562373096 6.5 15.75 6.5 C 15.335786437626904 6.5 15 6.164213562373095 15 5.75 L 15 3.5 C 15 3.2238576250846034 14.776142374915397 3 14.5 3 L 8.25 3 C 8.1119288125423 3 8 2.8880711874576983 8 2.75 L 8 1 C 8 0.44771525016920655 7.552284749830793 0 7 0 C 6.447715250169207 0 6 0.44771525016920644 6 0.9999999999999999 L 6 5.75 C 6 6.164213562373095 5.664213562373095 6.5 5.25 6.5 C 4.835786437626905 6.5 4.5 6.164213562373095 4.5 5.75 L 4.5 3.5 C 4.5 3.2238576250846034 4.276142374915397 3 4 3 L 2.5 3 C 1.395430500338413 3 0.5 3.895430500338413 0.5 5 L 0.5 22 C 0.5 23.104569499661586 1.395430500338413 24 2.5 24 L 21.5 24 C 22.604569499661586 24 23.5 23.104569499661586 23.5 22 L 23.5 5 C 23.5 3.895430500338413 22.604569499661586 3 21.5 3 Z M 21.5 21.5 C 21.5 21.7761423749154 21.2761423749154 22 21 22 L 3 22 C 2.7238576250846034 22 2.5 21.7761423749154 2.5 21.5 L 2.5 9.5 C 2.5 9.223857625084603 2.7238576250846034 9 3 9 L 21 9 C 21.2761423749154 9 21.5 9.223857625084603 21.5 9.5 Z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    {{ \Carbon\Carbon::parse($event->date)->translatedFormat('j F Y') }}
                                                </p>

                                                <p class="mx-auto mb-2 flex items-center md:mx-0 md:mb-2 lg:mb-0 xl:mr-20">
                                                    <svg class="mr-2" id='Clock_Circle_1_24' width='24' height='24'
                                                         viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'
                                                         xmlns:xlink='http://www.w3.org/1999/xlink'>
                                                        <rect width='24' height='24' stroke='none' fill='#000000'
                                                              opacity='0'/>


                                                        <g transform="matrix(0.83 0 0 0.83 12 12)">
                                                            <g style="">
                                                                <g transform="matrix(1 0 0 1 0 0)">
                                                                    <circle
                                                                        style="stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                                                        cx="0" cy="0" r="11"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 2 -1)">
                                                                    <path
                                                                        style="stroke: rgb(0,0,0); stroke-width: 2; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-14, -11)"
                                                                        d="M 12 5 L 12 12 L 16 17"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    {{ \Carbon\Carbon::parse($event->time)->format('h:i A') }}
                                                </p>

                                                <p class="mx-auto mb-2 flex items-center md:mx-0 lg:mb-0 ">
                                                    <svg class="mr-2" id='People_24' width='24' height='24'
                                                         viewBox='0 0 24 24'
                                                         xmlns='http://www.w3.org/2000/svg'
                                                         xmlns:xlink='http://www.w3.org/1999/xlink'>
                                                        <rect width='24' height='24' stroke='none' fill='#000000'
                                                              opacity='0'/>
                                                        <g transform="matrix(0.83 0 0 0.83 12 12)">
                                                            <g style="">
                                                                <g transform="matrix(1 0 0 1 -0.04 0)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 0.3;"
                                                                        transform=" translate(-11.96, -12)"
                                                                        d="M 4.629 15.052 C 5.055999999999999 15.052 5.5009999999999994 15.145 5.93 15.29 L 5.93 18.86 L 0.918 18.86 L 0.918 17.041999999999998 C 1.198 16.273 3.045 15.052 4.629 15.052 z M 23 17.182 L 23 19 L 17.988 19 L 17.988 15.43 C 18.416999999999998 15.285 18.862 15.192 19.288999999999998 15.192 C 20.873 15.192 22.72 16.413 23 17.182 z M 17.702 18.619 L 6.298 18.619 L 6.298 16.595 C 6.729 15.74 9.566 14.381 12 14.381 C 14.434 14.381 17.271 15.74 17.701999999999998 16.595 L 17.701999999999998 18.619 z M 12 5 C 10.619288125423017 5 9.5 6.119288125423017 9.5 7.5 C 9.5 8.880711874576983 10.619288125423017 10 12 10 C 13.380711874576983 10 14.5 8.880711874576983 14.5 7.5 C 14.5 6.119288125423017 13.380711874576983 5 12 5 z M 19.5 8 C 18.67157287525381 8 18 8.67157287525381 18 9.5 C 18 10.32842712474619 18.67157287525381 11 19.5 11 C 20.32842712474619 11 21 10.32842712474619 21 9.5 C 21 8.67157287525381 20.32842712474619 8 19.5 8 z M 4.5 8 C 3.6715728752538097 8 3 8.67157287525381 3 9.5 C 3 10.32842712474619 3.6715728752538097 11 4.5 11 C 5.32842712474619 11 6 10.32842712474619 6 9.5 C 6 8.67157287525381 5.32842712474619 8 4.5 8 z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 1.5 0)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-13.5, -12)"
                                                                        d="M 19.5 7 C 18.119 7 17 8.119 17 9.5 C 17 10.881 18.119 12 19.5 12 C 20.881 12 22 10.881 22 9.5 C 22 8.119 20.881 7 19.5 7 z M 19.5 10.277 C 19.071 10.277 18.723 9.928999999999998 18.723 9.5 C 18.723 9.071 19.070999999999998 8.723 19.5 8.723 C 19.929000000000002 8.723 20.277 9.071000000000002 20.277 9.5 C 20.277 9.929 19.929 10.277 19.5 10.277 z M 12 4 C 10.067 4 8.5 5.567 8.5 7.5 C 8.5 9.433 10.067 11 12 11 C 13.933 11 15.5 9.433 15.5 7.5 C 15.5 5.567 13.933 4 12 4 z M 12 9 C 11.173 9 10.5 8.327 10.5 7.5 C 10.5 6.673 11.173 6 12 6 C 12.827 6 13.5 6.673 13.5 7.5 C 13.5 8.327 12.827 9 12 9 z M 12 13 C 9.664 13 5 14.172 5 16.5 L 5 20 L 19 20 L 19 16.5 C 19 14.172 14.336 13 12 13 z M 17 18 L 7 18 L 7 16.567 C 7.378 15.962 9.866 15 12 15 C 14.134 15 16.622 15.962 17 16.567 L 17 18 z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                                <g transform="matrix(1 0 0 1 0 1.5)">
                                                                    <path
                                                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                                        transform=" translate(-12, -13.5)"
                                                                        d="M 19.5 14 C 18.343 14 17.185 14.378 16.331 14.951 C 17.209 15.350000000000001 17.844 15.834 17.97 16.325 C 18.39 16.143 18.913 16 19.5 16 C 20.802 16 21.816 16.689 22 17.009 L 22 18 L 19.5 18 L 18 18 L 18 20 L 19.5 20 L 24 20 L 24 16.932 C 24 15.398 21.737 14 19.5 14 z M 2 9.5 C 2 10.881 3.119 12 4.5 12 C 5.881 12 7 10.881 7 9.5 C 7 8.119 5.881 7 4.5 7 C 3.1189999999999998 7 2 8.119 2 9.5 z M 3.723 9.5 C 3.723 9.071 4.071 8.723 4.5 8.723 C 4.929 8.723 5.277 9.071 5.277 9.5 C 5.277 9.929 4.929 10.277 4.5 10.277 C 4.071 10.277 3.723 9.929 3.723 9.5 z M 4.5 14 C 5.657 14 6.8149999999999995 14.378 7.6690000000000005 14.951 C 6.791 15.350000000000001 6.156000000000001 15.834 6.03 16.325 C 5.61 16.143 5.087 16 4.5 16 C 3.198 16 2.184 16.689 2 17.009 L 2 18 L 4.5 18 L 6 18 L 6 20 L 4.5 20 L 0 20 L 0 16.932 C 0 15.398 2.263 14 4.5 14 z"
                                                                        stroke-linecap="round"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    {{$event->nbr_place}} Places
                                                </p>
                                            </div>

                                            {{--                                            <button class="btn mt-8">--}}
                                            {{--                                                Buy Now !--}}
                                            {{--                                            </button>--}}
                                            <div class="flex justify-between">
{{--                                                <form action="/paiement/{{$event->id}}" method="post">--}}
{{--                                                    @csrf--}}
                                                    <a href="/paiement/{{$event->id}}" class="card">
                                                        <p class="img font-bold">Buy Now !</p>
                                                        <div class="textBox">
                                                            {{--                                                    <p class="text head">Ethereum</p>--}}
                                                            <span class="text-lg">Get the ticket</span>
                                                            <p class="text price">245 DH</p>
                                                        </div>
                                                    </a>
{{--                                                </form>--}}
                                                <div class="flex space-x-6">
                                                    <a data-modal-target="progress-modal-{{$event->id}}"
                                                       data-modal-toggle="progress-modal-{{$event->id}}" class="card2">Update</a>
                                                    <form action="/deleteEvent/{{$event->id}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="card3">Delete</button>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-12">
                                <h3 class="font-bold text-2xl">
                                    More Details
                                </h3>
                                <p class="text-justify">{{$event->description}}
                                </p>
                            </div>
                        </section>
                        <!-- Section: Design Block -->
                    </div>
                    <!-- Container for demo purpose -->                    <!-- Jumbotron -->
                </section>
                <!-- Section: Design Block -->
            </div>
            <!-- Container for demo purpose -->
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

{{--update-event--}}
<div id="progress-modal-{{$event->id}}" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-3/4">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="progress-modal-{{$event->id}}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5">
                Update Your Event
                <div class="mx-auto w-full max-w-[880px] p-6 ">
                    <form action="/updateEvent/{{$event->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{--                            <input type="hidden" name="status">--}}
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Title
                                    </label>
                                    <input type="text" name="title" placeholder="Event title"
                                           value="{{$event['title']}}"
                                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                           required/>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="nbr_place" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Total de places
                                    </label>
                                    <input type="number" name="nbr_place" id="time" placeholder="Nombre de places"
                                           value="{{$event['nbr_place']}}"
                                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                           required/>
                                </div>
                            </div>
                        </div>

                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/3">
                                <div class="mb-5">
                                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Date
                                    </label>
                                    <input type="date" name="date" id="date" value="{{$event['date']}}"
                                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                           required/>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/3">
                                <div class="mb-5">
                                    <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Time
                                    </label>
                                    <input type="time" name="time" id="time" value="{{$event['time']}}"
                                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                           required/>
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/3">
                                <div class="mb-5">
                                    <label for="price" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Price
                                    </label>
                                    <input type="number" name="price" id="date" placeholder="245.00"
                                           value="{{$event['price']}}"
                                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                           readonly required/>
                                </div>
                            </div>
                        </div>

                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <label for="category" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Category
                                </label>
                                <select name="category"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                    <option value="" selected>Choose a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                                @if($category->id == $event->category) selected @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <label for="event_type" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Where will your event take place?
                                </label>
                                <select name="event_type" id="event_type"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                        required>
                                    <option value="" {{ $event->event_type == '' ? 'selected' : '' }}>Choose an option
                                    </option>
                                    <option value="venue" {{ $event->event_type == 'venue' ? 'selected' : '' }}>Venue
                                    </option>
                                    <option value="online" {{ $event->event_type == 'online' ? 'selected' : '' }}>
                                        Online
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full py-6 px-3 sm:w-1/2">
                                <div class="mb-5 location-field">
                                    <label for="country" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Location
                                    </label>
                                    <select name="country"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    >
                                        <option value="" selected>Choose a Country</option>
                                        @foreach($data as $item)
                                            <option
                                                value="{{ $item }}" {{ $event->country == $item ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="city py-6 w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="city" class="mb-3 block text-base font-medium text-[#07074D]">
                                        City
                                    </label>
                                    <input type="text" name="city" placeholder="City" value="{{$event['city']}}"
                                           class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                                Description
                            </label>
                            <textarea type="text" name="description" placeholder="Event description"
                                      class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                      required/>
                            {{$event['description']}}
                            </textarea>
                        </div>

                        <!-- component -->
                        <div
                            class="bg-gray-100 h-36 p-8 text-center rounded-lg border-dashed border-2 border-gray-300 hover:border-blue-500 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-md"
                            id="dropzone">
                            <label for="fileInput" class="cursor-pointer flex flex-col items-center space-y-2">
                                <svg class="w-16 h-10 text-gray-400" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <span class="text-gray-600">Drag and drop your files here</span>
                                <span class="text-gray-500 text-sm">(or click to select)</span>
                            </label>
                            <input type="file" id="fileInput" class="hidden" name="image" multiple>
                        </div>
                        <div class="mt-6 text-center" id="fileList"></div>
                        <script>
                            const dropzone = document.getElementById('dropzone');
                            const fileInput = document.getElementById('fileInput');
                            const fileList = document.getElementById('fileList');

                            dropzone.addEventListener('dragover', (e) => {
                                e.preventDefault();
                                dropzone.classList.add('border-blue-500', 'border-2');
                            });

                            dropzone.addEventListener('dragleave', () => {
                                dropzone.classList.remove('border-blue-500', 'border-2');
                            });

                            dropzone.addEventListener('drop', (e) => {
                                e.preventDefault();
                                dropzone.classList.remove('border-blue-500', 'border-2');

                                const files = e.dataTransfer.files;
                                handleFiles(files);
                            });

                            fileInput.addEventListener('change', (e) => {
                                const files = e.target.files;
                                handleFiles(files);
                            });

                            function handleFiles(files) {
                                fileList.innerHTML = '';

                                for (const file of files) {
                                    const listItem = document.createElement('div');
                                    listItem.textContent = `${file.name} (${formatBytes(file.size)})`;
                                    fileList.appendChild(listItem);
                                }
                            }

                            function formatBytes(bytes) {
                                if (bytes === 0) return '0 Bytes';

                                const k = 1024;
                                const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                                const i = Math.floor(Math.log(bytes) / Math.log(k));

                                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
                            }

                        </script>

                </div>

                <!-- Modal footer -->
                <div class="flex items-center mt-6 space-x-4 rtl:space-x-reverse">
                    <button type="submit"
                            class="text-white bg-black hover:bg-bg-black focus:ring-4 focus:outline-none focus:ring-bg-black font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-black dark:hover:bg-black dark:focus:ring-black">
                        Update your Event
                    </button>
                    <button data-modal-hide="progress-modal-{{$event->id}}" type="button"
                            class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Cancel
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // Sélectionnez l'élément de sélection du type d'événement
    var eventTypeSelect = document.querySelector('select[name="event_type"]');

    // Sélectionnez l'élément de champ de localisation
    var locationField = document.querySelector('.location-field');
    var city = document.querySelector('.city');

    // Fonction pour afficher ou masquer le champ de localisation en fonction du type d'événement sélectionné
    function toggleLocationField() {
        if (eventTypeSelect.value === 'venue') {
            locationField.style.display = 'block';
            city.style.display = 'block';
        } else {
            locationField.style.display = 'none';
            city.style.display = 'none';
        }
    }

    // Écoutez les changements sur le sélecteur du type d'événement
    eventTypeSelect.addEventListener('change', toggleLocationField);

    // Au chargement initial, vérifiez l'état du sélecteur du type d'événement
    toggleLocationField();
</script>
