<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

@include('admin.layout')

<body class="text-gray-800 font-inter">
@include('admin.side')

<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
    @include('admin.nav')

    <main class="profile-page overflow-y-hidden">
        <section class="relative block h-3/4 my-auto overflow-y-hidden">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://www.eventbrite.ie/blog/wp-content/uploads/2022/09/dance-event.jpg');
          ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-36" style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative pt-24 bg-blueGray-200 ">
            <div class="container mx-auto px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <div class="relative mt-3">
                                    <img alt="..." src="{{ auth()->user()->picture }}"
                                         class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                <div class="py-6 px-3 mt-32 sm:mt-0">
                                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                            class="bg-orange-500 active:bg-orange-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150"
                                        type="button">
                                        Edit Profile
                                    </button>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                    <div class="mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">{{ $totalEvents }}</span>
                                        <span class="text-sm text-blueGray-400">Events</span>
                                    </div>
                                    <div class="mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">{{ $totalConfirmationRequests }}</span>
                                        <span class="text-sm text-blueGray-400">Request</span>
                                    </div>
                                    <div class="lg:mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">{{ $totalUsers }}</span>
                                        <span class="text-sm text-blueGray-400">Users</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="text-center mt-6 pb-8">
                            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                {{ auth()->user()->name }}
                            </h3>
                            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold">
                                <i class="fas fa-envelope mr-2 text-lg text-blueGray-400"></i>
                                {{ auth()->user()->email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
</main>

</body>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Manage your profile
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="/edit_profile/{{ auth()->user()->id }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div>
                        <h1 class="font-semibold text-center dark:text-white">Select a Profile Image</h1>
                        <input class="login-input" name="picture" value="{{ auth()->user()->picture }}" type="file"
                               accept="image/*" id="imageInput"
                               style="display: none">
                        <!-- Circular image container -->
                        <label for="imageInput"
                               class="relative mt-2 mr-48 mb-5 top-2 left-20 cursor-pointer ml-10 flex justify-center">
                            <div class="rounded-full overflow-hidden">
                                <img id="previewImage" style="width: 90px; height: 90px"
                                     src="-{{ auth()->user()->picture }}"
                                     alt="User Picture">
                            </div>
                        </label>
                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                        <input value="{{ auth()->user()->name }}" type="text" name="name" id="name" placeholder="Mery JM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input value="{{ auth()->user()->email }}" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                    </div>
                    <button type="submit" class="w-full text-white bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Edit Your Profile</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
