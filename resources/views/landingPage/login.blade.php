<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body class="h-screen flex items-center justify-center">
    <div class="flex w-full bg-white shadow-md">
        <div class="w-3/5 bg-gray-300">
            <img src="{{ asset('images/login.jpg') }}" alt="Image" class="w-full h-full object-cover">
        </div>
        <div class="w-2/5 p-8 md:mt-56">
            <h2 class="text-4xl font-medium mb-4 text-center">Masuk</h2>
            <p class="mb-8 text-center text-xl">Masuk ke akun anda</p>
            @if(session('loginError'))
                <div class="text-red-500 text-center mb-4">
                    {{ session('loginError') }}
                </div>
            @endif
            <form action="/loginUser" method="POST">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="email" class="peer-focus:font-medium absolute text-lg text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Email</label>
                </div>
                <div class="relative z-0 w-full group">
                    <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="password" class="peer-focus:font-medium absolute text-lg text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600">Password</label>
                </div>
                {{-- <p class="text-sm mb-5 text-[#727272]">Lupa Kata Sandi? <a href="/forgot-password" class="text-indigo-600 hover:text-indigo-500">Klik disini!</a></p> --}}
                <button type="submit" class="w-full font-medium text-[#323030] bg-[#DDCEBB] hover:bg-[#99856B] hover:text-white py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Masuk</button>
            </form>
            <p class="mt-4 text-sm text-center">Belum punya akun? <a href="/register" class="text-indigo-600 hover:text-indigo-500">Registrasi terlebih dahulu yuk!</a></p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
