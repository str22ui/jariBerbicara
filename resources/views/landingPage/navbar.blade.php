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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

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
    
    

    <footer class="bg-[#F7F0E6] mx-auto text-center justify-center">
        <div class="mx-auto text-center justify-center w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between ">
            
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 mx-auto text-center justify-center">
                <div class="text-left">
                    
                    <ul class="text-[#323030] font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Beranda</a>
                        </li >
                        <li class="mb-4"> 
                            <a href="https://tailwindcss.com/" class="hover:underline">Abjad</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Kata Sederhana</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
                <div class="text-left">
                    <h2 class="mb-6 text-sm font-semibold text-[#323030]">Informasi Lebih Lanjut</h2>
                    <ul class="text-[#323030] font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-[#323030] uppercase ">Ikuti Kami</h2>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <!-- LinkedIn -->
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M100.28 448H7.4V148.9h92.88zm-46.14-350C24.54 98 0 73.45 0 42.14 0 19 19 0 42.14 0s42.14 19 42.14 42.14c-.01 31.31-24.55 55.86-42.14 55.86zM447.9 448h-92.68V302.4c0-34.7-12.4-58.4-43.25-58.4-23.6 0-37.6 15.87-43.8 31.13-2.26 5.5-2.8 13.2-2.8 20.9V448h-92.68V148.9h92.68v40.8c12.3-18.6 34.3-45.2 83.5-45.2 61 0 106.8 39.6 106.8 124.7V448z"/>
                            </svg>
                            <span class="sr-only">LinkedIn page</span>
                        </a>
                    
                        <!-- Instagram -->
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M224.1 141c-63.6 0-114.8 51.2-114.8 114.8s51.2 114.8 114.8 114.8 114.8-51.2 114.8-114.8-51.2-114.8-114.8-114.8zm0 188.8c-40.8 0-74-33.2-74-74s33.2-74 74-74 74 33.2 74 74-33.2 74-74 74zm146.4-194.3c0 14.9-12 27-27 27s-27-12-27-27 12-27 27-27 27 12 27 27zm76.1 27.2c-1.7-35.7-9.9-67.3-36.2-93.5s-57.8-34.5-93.5-36.2C280.5 32.5 197.5 32.5 121 35.4c-35.7 1.7-67.3 9.9-93.5 36.2S-7 129.8-8.7 165.5C-11.6 241.9-11.6 324.9-8.7 401.3c1.7 35.7 9.9 67.3 36.2 93.5s57.8 34.5 93.5 36.2c76.4 2.9 159.4 2.9 235.8 0 35.7-1.7 67.3-9.9 93.5-36.2s34.5-57.8 36.2-93.5c2.9-76.4 2.9-159.4 0-235.8zM398.8 388.3c-7.8 19.7-22.9 35.2-42.6 42.6-29.5 11.7-99.4 9-132.2 9s-102.7 2.6-132.2-9c-19.7-7.8-35.2-22.9-42.6-42.6-11.7-29.5-9-99.4-9-132.2s-2.6-102.7 9-132.2c7.8-19.7 22.9-35.2 42.6-42.6 29.5-11.7 99.4-9 132.2-9s102.7-2.6 132.2 9c19.7 7.8 35.2 22.9 42.6 42.6 11.7 29.5 9 99.4 9 132.2s2.6 102.7-9 132.2z"/>
                            </svg>
                            <span class="sr-only">Instagram page</span>
                        </a>
                    
                        <!-- Facebook -->
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S231.2 0 195.36 0c-73.22 0-121.15 44.38-121.15 124.72v70.62H22.89V288h51.31v224h100.17V288z"/>
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                    
                        <!-- Twitter -->
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                <path d="M512 97.25c-19.04 8.42-39.41 14.1-60.95 16.62 21.92-13.13 38.75-33.94 46.65-58.79-20.53 12.22-43.22 21.1-67.4 25.88-19.42-20.72-47.13-33.66-77.79-33.66-58.87 0-106.7 47.83-106.7 106.7 0 8.36 1 16.58 2.81 24.46-88.68-4.45-167.26-46.93-219.79-111.52-9.18 15.76-14.5 34.1-14.5 53.65 0 37.04 18.82 69.66 47.43 88.8-17.44-.56-33.86-5.34-48.2-13.22v1.3c0 51.74 36.84 94.87 85.71 104.62-8.97 2.46-18.38 3.78-28.1 3.78-6.88 0-13.6-.64-20.14-1.84 13.64 42.58 53.29 73.57 100.23 74.41-36.75 28.79-83.01 45.99-133.31 45.99-8.66 0-17.21-.49-25.66-1.5 47.6 30.48 104.14 48.29 164.82 48.29 197.77 0 305.88-163.79 305.88-305.88 0-4.67-.1-9.29-.31-13.88 20.98-15.14 39.2-34.01 53.68-55.57z"/>
                            </svg>
                            <span class="sr-only">Twitter account</span>
                        </a>
                    
                        <!-- TikTok -->
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                <path d="M448 209.9v-52.6a125.3 125.3 0 0 1-75.6-24.3c-17.1-13.2-30.3-30.8-37.7-49.9a125.5 125.5 0 0 1-6.9-38.5H255.9v219c-1.3.1-2.5.2-3.8.2-12.6 0-25-2.3-36.8-6.7-11.2-4.2-21.2-10.4-30-18.2-8.7-7.8-15.6-16.9-20.4-27-4.9-10.2-7.4-21.2-7.4-32.3 0-8.3 1.4-16.7 4.1-24.6 2.7-7.8 6.7-15 11.7-21.5a86.7 86.7 0 0 1 18.3-17.8c7.1-4.8 14.9-8.5 23.1-11a86.2 86.2 0 0 1 26.4-3.8c6.3 0 12.6.6 18.7 1.9V56.1a139 139 0 0 0-18.7-1.5c-13.6 0-27.1 1.8-40 5.4-12.4 3.4-24.2 8.6-35 15.2-10.7 6.6-20.3 14.5-28.6 23.5a147.3 147.3 0 0 0-19.7 28.7c-5.7 10.7-10 22-12.7 33.6a147.9 147.9 0 0 0-4.2 34.9c0 18.3 3.6 36.6 10.5 53.5 6.7 16.5 16.4 31.7 28.5 44.3 12 12.6 26.4 22.7 42.2 29.6 16.8 7.4 34.7 11.2 53.1 11.2 1.3 0 2.5 0 3.8-.1v133c17.3-2.3 34-7 49.7-13.9v-92.8c11.1 2.3 22.3 3.5 33.6 3.5 17.2 0 34.3-2.1 50.9-6.3 13.2-3.3 25.9-8.1 38-14.2V209.9H448z"/>
                            </svg>
                            <span class="sr-only">TikTok account</span>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between text-center mx-auto">
            <span class="text-sm text-center mx-auto sm:text-center text-[#323030]">© 2024 <a href="https://flowbite.com/" class="hover:underline">Jari Berbicara</a>. All Rights Reserved.
            </span>
            
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
