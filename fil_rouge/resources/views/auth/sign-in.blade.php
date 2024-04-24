<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

<!-- component -->
<body class="bg-white">
<!-- url('/img/hero-pattern.svg') -->
<div class="h-full flex min-h-screen bg-white">

    <div class="w-1/2 bg-cover bg-cover bg-center md:block hidden"
         style="background-image:  url('https://res.cloudinary.com/simpleview/image/upload/v1684446594/clients/evansville/events_980da43a-db5e-4c04-b163-a44bd4bcefa4.jpg')"></div>

    <div class="md:w-1/2 max-w-lg mx-auto my-auto px-4 py-5 shadow-none">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex-auto">
                <div class="pb-6 mb-0 pt-6 text-center font-semibold bg-white border-b-0 rounded-t-2xl">
                    <h5>Signin with</h5>
                </div>
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
                    <div class="relative flex flex-col w-full max-w-full px-3 mt-2 text-center shrink-0">
                        <p class="z-20 inline px-4 font-semibold leading-normal bg-white text-sm text-slate-400">
                            Or  Use Your Email
                        </p>
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
</body>
