<script src="https://cdn.tailwindcss.com"></script>

<!-- component -->
<body class="bg-white">
<!-- url('/img/hero-pattern.svg') -->
<div class="h-full flex min-h-screen bg-white">

    <div class="w-1/2 bg-cover bg-cover bg-center md:block hidden"
         style="background-image:  url('https://res.cloudinary.com/simpleview/image/upload/v1684446594/clients/evansville/events_980da43a-db5e-4c04-b163-a44bd4bcefa4.jpg')"></div>
    <!-- <div class="bg-no-repeat bg-right bg-cover max-w-max max-h-8 h-12 overflow-hidden">
        <img src="log_in.webp" alt="hey">
    </div> -->


    <div class="md:w-1/2 max-w-lg mx-auto my-auto px-4 py-5 shadow-none">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex-auto">
                <div class="pt-4 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                    <h5>Register with</h5>
                </div>
                <div class="flex-auto p-6 text-center">
                    <form role="form text-left" action="/sign-up" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <h1 class="font-semibold text-gray-600 text-sm text-center dark:text-white">Select a Profile
                                Image</h1>
                            <input class="login-input" name="picture" value="{{ old('picture') }}" type="file"
                                   accept="image/*" id="imageInput"
                                   style="display: none">
                            <!-- Circular image container -->
                            <label for="imageInput"
                                   class="relative mt-2 mr-48 mb-5 top-2 left-20 cursor-pointer ml-10 flex justify-center">
                                <div class="rounded-full overflow-hidden">
                                    <img id="previewImage" style="width: 90px; height: 90px"
                                         src="https://img.freepik.com/premium-vector/avatar-cute-preschool-boy-isolated-vector-illustration-cartoon-style_174639-55058.jpg?w=740"
                                         alt="User Picture">
                                </div>
                            </label>
                        </div>
                        <div class="mb-4 w-60 mx-auto">
                            <input type="text" name="name"
                                   class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                   placeholder="Username" aria-label="Name" aria-describedby="email-addon"/>
                        </div>
                        <div class="mb-4 w-60 mx-auto">
                            <input type="email" name="email"
                                   class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                   placeholder="Email" aria-label="Email" aria-describedby="email-addon"/>
                        </div>
                        <div class="mb-4 w-60 mx-auto">
                            <input type="password" name="password"
                                   class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                   placeholder="Password" aria-label="Password" aria-describedby="password-addon"/>
                        </div>
                        <div class="mb-4 w-60 mx-auto">
                            <input type="password" name="password_confirmation"
                                   class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                   placeholder="Password confirmation" aria-label="Password"
                                   aria-describedby="password-addon"/>
                        </div>
                        <div class=" pt-2">
                            <div class="flex items-center justify-center space-x-6 px-24">
                                <div class="flex items-center">
                                    <input type="radio" name="role" value="2" id="radioButton1"
                                           class="h-5 w-5"/>
                                    <label for="radioButton1" class="pl-3 text-base font-medium">
                                        Organizer
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="role" value="3" id="radioButton2"
                                           class="h-5 w-5"/>
                                    <label for="radioButton2" class="pl-3 text-base font-medium">
                                        Client
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center w-60 mx-auto">
                            <button type="submit"
                                    class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                Sign up
                            </button>
                        </div>
                        <p class="mt-4 mb-0 leading-normal text-sm">Already have an account? <a href="/sign-in"
                                                                                                class="font-bold text-slate-700">Sign
                                in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<script>
    document.getElementById('imageInput').addEventListener('change', function (e) {
        const file = e.target.files[0]; // Get the file
        const reader = new FileReader(); // Create a file reader
        reader.onload = function (e) {
            const previewImage = document.getElementById('previewImage');
            previewImage.src = e.target.result; // Set the src of the image to the file content
        };
        reader.readAsDataURL(file); // Read the file as a Data URL
    });
</script>
</body>
