<!-- component -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Mi aplicación</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 p-36">
<!-- component -->
<main id="content" role="main" class="w-full max-w-md mx-auto p-6">
    <div class="mt-7 bg-white  rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot password?</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Remember your password?
                    <a class="text-yellow-800 decoration-2 hover:underline font-medium" href="/login">
                        Login here
                    </a>
                </p>
            </div>

            <div class="mt-5">
                <form method="post" action="/forgot-request">
                    @csrf
                    <div class="grid gap-y-4">
                        <div>
                            <label for="email" class="block text-sm font-bold ml-1 mb-2 dark:text-white">Email
                                address</label>
                            <div class="relative">
                                <input type="email" id="email" name="email" placeholder="Taper votre Adresse Email"
                                       class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-yellow-500 focus:ring-yellow-500 shadow-sm"
                                       required aria-describedby="email-error">
                            </div>
                            <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid email
                                address so we can get back to you</p>
                        </div>
                        <button type="submit"
                                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-yellow-700 text-white hover:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                            Reset password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="sweetalert2.all.min.js"></script>
@if (session('status') == 'success')
    <script>
        Swal.fire({
            icon: "success",
            title: "Your reset link has been sent successfully",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif

</body>
</html>


