<script src="https://cdn.tailwindcss.com"></script>


<style>
    .swiper-wrapper {
        height: max-content !important;

        width: max-content;
    }

    .swiper-button-next,
    .swiper-button-prev {
        top: 25%;
        z-index: 1000;
    }

    .swiper-button-next {
        right: -0px !important;
    }

    .swiper-button-prev {
        left: 0px !important;
    }

    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after {
        content: "" !important;
    }

    .mySwiper {
        max-width: 320px !important;
        margin: 0 auto !important;
    }

    .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after {
        content: "" !important;
    }

    .mySwiper .swiper-slide.swiper-slide-thumb-active>.swiper-slide\:w-16 {
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .mySwiper .swiper-slide.swiper-slide-thumb-active>.swiper-slide\:border-indigo-600 {
        --tw-border-opacity: 1;
        border-color: rgb(79 70 229 / var(--tw-border-opacity));
    }

    .teamswiper .swiper-wrapper {
        height: max-content !important;
        padding-bottom: 64px !important;
    }

    .teamswiper .swiper-horizontal>.swiper-scrollbar,
    .teamswiper .swiper-scrollbar.swiper-scrollbar-horizontal {
        max-width: 140px !important;
        height: 3px !important;
        bottom: 25px !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
    }

    .teamswiper .swiper-pagination-fraction {
        bottom: 0 !important;
        padding-top: 16px !important;
    }

    .teamswiper .swiper-slide.swiper-slide-active>.slide\:border-indigo-600 {
        --tw-border-opacity: 1;
        border-color: rgb(79 70 229 / var(--tw-border-opacity));
    }

    .teamswiper .swiper-pagination-total {
        color: rgb(156 163 175) !important;
    }

    .teamswiper .swiper-scrollbar-drag {
        background: rgb(79 70 229);
    }

    .teamswiper .swiper-pagination-fraction {
        bottom: 0 !important;
    }

    .teamswiper .swiper-button-prev:after,
    .teamswiper .swiper-rtl .swiper-button-next:after {
        content: '' !important;
    }

    .teamswiper .swiper-button-prev {
        top: 93% !important;
        left: 35% !important;
        z-index: 100 !important;
    }

    .teamswiper .swiper-button-next {
        top: 93% !important;
        right: 35% !important;
        z-index: 100 !important;
    }

    .teamswiper .swiper-button-next:after,
    .teamswiper .swiper-rtl .swiper-button-prev:after {
        content: '' !important;
    }

    .teamswiper .swiper-button-next svg,
    .teamswiper .swiper-button-prev svg {
        width: 24px !important;
        height: 24px !important;
    }
</style>

<body class="font-inter">
<nav x-data="{ isOpen: false }"
     class="container h-16 bg-black fixed top-0 z-10 p-6 lg:flex lg:items-center lg:justify-around">
    <div class="flex items-center justify-between">
        <div>
            <a class="text-2xl font-bold text-white hover:text-gray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl"
               href="/">Tchikita</a>
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

<section class="py-14 lg:py-16 relative">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
            <div class="img-box">
                <img src="https://management-africa.co.ke/wp-content/uploads/2024/03/team-development-1200x800-1.png" alt="About Us tailwind page"
                     class="max-lg:mx-auto">
            </div>
            <div class="lg:pl-[100px] flex items-center">
                <div class="data w-full">
                    <h2
                        class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center relative">
                        About
                        Us </h2>
                    <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                        Driven by a passion for seamless user experiences, we've meticulously curated pagedone
                        to empower creators, designers, and developers alike. Our mission is to provide a
                        comprehensive toolkit,
                        enabling you to build intuitive, beautiful interfaces that resonate with users on every
                        interaction.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-8 lg:py-8 relative">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
        <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-9 ">

            <div class="lg:pr-24 flex items-center">
                <div class="data w-full">
                    <img src="https://www.artofevents.nl/wp-content/uploads/2018/02/Logo_nieuwrpayoff_h_2016.png" alt="About Us tailwind page"
                         class="block lg:hidden mb-9 mx-auto">
                    <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-black mb-9 max-lg:text-center">We
                        are Creative Since 2005</h2>
                    <p class="font-normal text-xl leading-8 text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                        Pagedone isn’t just a collection of components and guidelines; it's a philosophy. We go
                        beyond aesthetics, prioritizing accessibility, scalability, and usability. Every element,
                        from the tiniest
                        detail to the grandest layout, is meticulously crafted to enhance functionality and elevate
                        user
                        satisfaction.
                    </p>
                </div>
            </div>
            <div class="img-box ">
                <img src="https://www.artofevents.nl/wp-content/uploads/2018/02/Logo_nieuwrpayoff_h_2016.png" alt="About Us tailwind page"
                     class="hidden lg:block ">
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="font-manrope text-4xl text-center text-gray-900 font-bold mb-14">Our results in numbers</h2>
        <div class="flex flex-col gap-5 xl:gap-8 lg:flex-row lg:justify-between">
            <div
                class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                <div class="flex gap-5">
                    <div class="font-manrope text-2xl font-bold text-indigo-600">
                        240%
                    </div>
                    <div class="flex-1">
                        <h4 class="text-xl text-gray-900 font-semibold mb-2">Company growth</h4>
                        <p class="text-xs text-gray-500 leading-5">Company's remarkable growth journey as we
                            continually innovate and drive towards new heights of success.</p>
                    </div>
                </div>
            </div>
            <div
                class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                <div class="flex gap-5">
                    <div class="font-manrope text-2xl font-bold text-indigo-600">
                        175+
                    </div>
                    <div class="flex-1">
                        <h4 class="text-xl text-gray-900 font-semibold mb-2">Company growth</h4>
                        <p class="text-xs text-gray-500 leading-5">Our very talented team members are the powerhouse
                            of pagedone and pillars of our success. </p>
                    </div>
                </div>
            </div>
            <div
                class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                <div class="flex gap-5">
                    <div class="font-manrope text-2xl font-bold text-indigo-600">
                        625+
                    </div>
                    <div class="flex-1">
                        <h4 class="text-xl text-gray-900 font-semibold mb-2">Projects Completed</h4>
                        <p class="text-xs text-gray-500 leading-5">We have accomplished more than 625 projects
                            worldwide and we are still counting many more.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" py-14 lg:py-16 bg-gray-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
        <div class="mb-16 rounded-full">
            <h2 class="text-4xl font-manrope font-bold text-gray-900 text-center">What our happy user says!</h2>
        </div>

        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
            <div class="swiper-wrapper  mx-auto">
                <div class="swiper-slide">
                    <div class="relative mb-20">
                        <!--Slider Wrapper-->
                        <div class="max-w-max mx-auto lg:max-w-4xl">
                            <p class="text-lg text-gray-500 leading-8 mb-8 text-center">
                                I have been using pagedone for several months now, and I must say that it has made my life a lot
                                easier. The
                                platform's intuitive interface and ease of use have allowed me to manage my finances more effectively
                                and
                                make informed investment decisions. I particularly like the product's auto-tracking feature, which has
                                saved
                                me a lot of time and effort.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative mb-20">
                        <!--Slider Wrapper-->
                        <div class="max-w-max mx-auto lg:max-w-4xl">
                            <p class="text-lg text-gray-500 leading-8 mb-8 text-center">
                                I have been using pagedone for several months now, and I must say that it has made my life a lot
                                easier. The
                                platform's intuitive interface and ease of use have allowed me to manage my finances more effectively
                                and
                                make informed investment decisions. I particularly like the product's auto-tracking feature, which has
                                saved
                                me a lot of time and effort.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="relative mb-20">
                        <!--Slider Wrapper-->
                        <div class="max-w-max mx-auto lg:max-w-4xl">
                            <p class="text-lg text-gray-500 leading-8 mb-8 text-center">
                                I have been using pagedone for several months now, and I must say that it has made my life a lot
                                easier. The
                                platform's intuitive interface and ease of use have allowed me to manage my finances more effectively
                                and
                                make informed investment decisions. I particularly like the product's auto-tracking feature, which has
                                saved
                                me a lot of time and effort.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>

@include('footer')
<script src="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/js/pagedone.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: -10,
        slidesPerView: 3,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 32,
        thumbs: {
            swiper: swiper,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    var swiper = new Swiper(".teamswiper", {
        slidesPerView: 1,
        spaceBetween: 32,
        centeredSlides: false,
        slidesPerGroupSkip: 1,
        grabCursor: true,
        loop: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            769: {
                slidesPerView: 2,
                slidesPerGroup: 1,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
    });
</script>

</body>

