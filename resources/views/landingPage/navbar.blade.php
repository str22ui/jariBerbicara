<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title> @yield('title')</title>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700;800&display=swap" rel="stylesheet">
  
  <style>
    *{
      font-family: "Poppins", sans-serif !important;
    }
    .social-icons {
      display: flex;
      gap: 1rem; 
    }
  </style>
</head>

<body>
    
    <nav class="bg-[#272F42] fixed w-full z-20 top-0 start-0 border-b border-[#DDCEBB] ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo8.jpg') }}" class="h-8 rounded-3xl" alt="Flowbite Logo">
                <span class="self-center text-white text-2xl font-semibold whitespace-nowrap">Jari Berbicara</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                @auth
                    <div class="relative inline-block text-left">
                        <button id="dropdownButton" class="flex items-center text-[#323030] bg-[#DDCEBB] hover:bg-[#99856B] hover:text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">
                            <span>Halo, {{ Auth::user()->username }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="12" class="mb-1 ml-2" fill="black">
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                            </svg>
                        </button>
                        
                        <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
                            <a href="/profile"><button type="submit" class="block px-4 py-2 text-sm text-gray-700 w-full text-left hover:bg-gray-100">Profile</button></a>
                            <a href="/testimonials"><button type="submit" class="block px-4 py-2 text-sm text-gray-700 w-full text-left hover:bg-gray-100">Testimonials</button></a>
                            <form action="/logout" class="block w-full text-left">
                                @csrf
                                <button type="submit" class="block px-4 py-2 text-sm text-gray-700 w-full text-left hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="/loginUser">
                        <button type="submit" class="text-[#323030] bg-[#DDCEBB] hover:bg-[#99856B] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Masuk</button>
                    </a>
                @endauth
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between sm:hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="/" class="{{ request()->is('/') ? 'bg-[#F9F6F1] text-[#272F42] w-20 text-center' : 'bg-transparent text-white' }} block py-2 px-4 rounded hover:bg-[#DDCEBB] md:p-0">Beranda</a>
                    </li>
                    <li>
                        <a href="/abjad" class="{{ request()->is('abjad') ? 'bg-[#F9F6F1]  text-[#272F42] w-20 text-center' : 'bg-transparent text-white' }} block py-2 px-4 rounded hover:bg-[#DDCEBB] md:p-0">Abjad</a>
                    </li>
                    <li>
                        <a href="/words" class="{{ request()->is('words') ? 'bg-[#F9F6F1]  text-[#272F42] w-44 text-center' : 'bg-transparent text-white' }} block py-2 px-4 rounded hover:bg-[#DDCEBB] md:p-0">Kata Sederhana</a>
                    </li>
                    <li>
                        <a href="/aboutUs" class="{{ request()->is('aboutUs') ? 'bg-[#F9F6F1]  text-[#272F42] w-44 text-center' : 'bg-transparent text-white' }} block py-2 px-4 rounded hover:bg-[#DDCEBB]  md:p-0">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  
    <div class="container-fluid mx-auto mt-16">
        @yield('page')
    </div>
    
    <footer class="mx-auto bg-[#F7F0E6] flex flex-col justify-center items-center py-6 lg:py-8">
        <div class="max-w-screen-xl px-4">
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <ul class="text-[#524F48] font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Beranda</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Abjad</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Kata Sederhana</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">About Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-[#524F48] uppercase">Informasi Lebih Lanjut</h2>
                    <ul class="text-[#524F48] font-medium">
                        <li class="mb-4">
                            <a href="mailto:jariberbicara@gmail.com" class="hover:underline">Email: jariberbicara@gmail.com</a>
                        </li>
                        <li>
                            <a href="tel:+6285111112121" class="hover:underline">Phone: +6285111112121</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-[#524F48] uppercase">Tetap Terhubung</h2>
                    <ul class="text-[#524F48] font-medium">
                        <li class="mb-4">
                            <a href="https://instagram.com" class="hover:underline">Instagram</a>
                        </li>
                        <li>
                            <a href="https://facebook.com" class="hover:underline">Facebook</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        dropdownButton.addEventListener('click', function() {
            dropdownMenu.classList.toggle('hidden');
        });
    });
  </script>
</body>
</html>
