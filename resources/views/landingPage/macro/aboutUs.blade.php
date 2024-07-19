@extends('landingPage.navbar')
@section('title', 'Tentang Kami')

@section('page')
<div class="py-20 md:py-24 text-[#323030] text-center">
    <div class="text-center">   
        <h2 class="text-2xl font-bold mb-10">Tentang Kami</h2>
    </div>
    <div class="items-center text-center bg-[#F7F0E6] py-5  mx-auto md:py-20 pmb-20 ">
        <div class="flex flex-col items-center  md:flex-row md:max-w-4xl md:h-80  mx-auto">
            <div class="flex flex-col justify-between p-4 leading-normal text-start">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center md:text-start">Tujuan Kami</h5>
                <p class="mb-3 font-normal text-gray-700 w-full md:w-3/4">Jari Berbicara adalah platform edukatif yang didedikasikan untuk mengajarkan bahasa isyarat kepada semua orang, dari anak-anak hingga dewasa</p>
            </div>
            <img class="object-cover w-3/4  rounded-t-lg h-full md:h-full md:w-full md:rounded-none md:rounded-s-lg" src="{{ asset('images/login4.jpg') }}" alt="">   
        </div>
    </div>
    <div class="flex flex-col md:flex-row py-20 relative">
        <div class="flex-1  text-start z-10 p-8 md:py-16 md:pl-24">
            <div href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Visi</h5>
            </div>
            <p class="mb-3 font-normal text-gray-500 w-3/4">Mewujudkan dunia yang inklusif di mana semua orang dapat berkomunikasi dengan bahasa isyarat</p>
        </div>
        <div class="flex-1 bg-transparent text-end z-10 p-8 md:py-16 md:pr-24">
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">Misi</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 ml-auto w-3/4">Menyediakan materi pembelajaran bahasa isyarat yang mudah diakses, interaktif, dan menyenangkan untuk semua orang</p>
        </div>
        <div class="absolute inset-0 w-full md:w-1/2 bg-[#F7E0D0] z-0"></div>
    </div>
    
    
    <div class="py-12">
        <div class="py-12">
            <h2 class="text-2xl font-bold text-center">Apa yang kita lakukan?</h2>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 mx-auto text-center">
            <div class="w-full max-w-64 h-96 py-5 bg-[#F9F6F1] border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col pb-10 px-5">
                    <img class="w-16 h-16 mb-3 rounded-full shadow-lg" src="{{ asset('images/alphabetAbout.jpg')}}" alt="Bonnie image"/>
                    <div class="text-start">
                        <h5 class="mb-1 text-xl py-2 font-medium text-gray-900">Pembelajaran Huruf Abjad</h5>
                        <span class="text-sm text-gray-500">Kami memiliki bagian khusus yang mencakup semua huruf abjad, masing-masing dilengkapi dengan video dan foto yang menunjukkan cara melakukan isyarat untuk setiap huruf.</span>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-64 h-96 py-5 bg-[#F9F6F1] border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col pb-10 px-5">
                    <img class="w-16 h-16 mb-3 rounded-full shadow-lg" src="{{ asset('images/wordAbout.jpg')}}" alt="Bonnie image"/>
                    <div class="text-start">
                        <h5 class="mb-1 text-xl py-2 font-medium text-gray-900">Pembelajaran Kata-Kata Sederhana</h5>
                        <span class="text-sm text-gray-500">Selain huruf abjad, kami juga menyediakan kartu kata-kata sederhana yang sering digunakan dalam komunikasi sehari-hari. Setiap kata dilengkapi dengan video dan foto yang memperlihatkan cara melakukan isyaratnya.</span>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-64 h-96 py-5 bg-[#F9F6F1] border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col pb-10 px-5">
                    <img class="w-16 h-16 mb-3 rounded-full shadow-lg" src="{{ asset('images/accesbilityAbout.jpg')}}" alt="Bonnie image"/>
                    <div class="text-start">
                        <h5 class="mb-1 text-xl py-2 font-medium text-gray-900">Aksesibilitas untuk Semua</h5>
                        <span class="text-sm text-gray-500">Kami berusaha untuk membuat situs kami seaksesibel mungkin bagi semua orang, termasuk mereka yang memiliki kebutuhan khusus.</span>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-64 h-96 py-5 bg-[#F9F6F1] border border-gray-200 rounded-lg shadow">
                <div class="flex flex-col pb-10 px-5">
                    <img class="w-16 h-16 mb-3 rounded-full shadow-lg" src="{{ asset('images/testimonialsAbout.jpg')}}" alt="Bonnie image"/>
                    <div class="text-start">
                        <h5 class="mb-1 text-xl py-2 font-medium text-gray-900">Testimoni dari Pengguna</h5>
                        <span class="text-sm text-gray-500">Kami memberikan platform bagi pengguna kami untuk berbagi pengalaman mereka. Testimoni dari pengguna lain dapat memberikan motivasi dan inspirasi bagi Anda untuk terus belajar dan berkembang.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-[#272F42] my-10 pb-10 flex flex-col md:flex-row">
        <div class="w-full md:w-3/5">
            <div class="pt-12 text-start mx-6 md:mx-28">
                <h2 class="text-2xl font-bold text-white">Kontak Kami</h2>
            </div>
            <div>
                <div class="w-full md:w-2/3 px-6 md:px-0 pt-4 pb-8 text-start  md:mx-28 text-white">
                    Kami di Jari Berbicara selalu senang mendengar dari Anda! Jika Anda memiliki pertanyaan, saran, atau ingin berbagi pengalaman Anda, jangan ragu untuk menghubungi kami.
                </div>
            </div>
            <div class="text-start mx-6 md:mx-28">
                <form action="/contactUs/create" method="POST" class="max-w-md">
                    @csrf
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-300 peer" placeholder=" " required />
                        <label for="name" class="peer-focus:font-medium absolute text-sm text-[#E6E6E6] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-white  bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-300 peer" placeholder=" " required />
                        <label for="email" class="peer-focus:font-medium absolute text-sm text-[#E6E6E6] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <textarea name="message" id="message" cols="30" rows="5" class="block py-2.5 px-0 w-full text-sm text-white  bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-300 peer" placeholder=" " required></textarea>
                        <label for="message" class="peer-focus:font-medium absolute text-sm text-[#E6E6E6] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-300 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pesan</label>
                    </div>
                    <button type="submit" class="w-full text-[#323030] bg-[#DDCEBB] hover:bg-[#99856B] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center">Kirim</button>
                </form>
            </div>
        </div>
        <div class="w-full md:w-2/5 flex justify-end mt-10 ">
            <div class="block max-w-md p-6 bg-[#F7F0E6] border border-gray-200 rounded-lg shadow hover:bg-gray-100 ml-auto md:pt-24">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-start">Info</h5>
                <div class="flex gap-3 py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="14">
                        <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/>
                    </svg>
                    <p class="font-normal text-gray-700">info@jariberbicara.com</p>
                </div>
                <div class="flex gap-3 py-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="14">
                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                    </svg>
                    <p class="font-normal text-gray-700">+62 861 1271 2121</p>
                </div>
                <div class="md:flex md:gap-3 md:py-5 flex ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="14">
                        <path d="M64 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16h80V400c0-26.5 21.5-48 48-48s48 21.5 48 48v64h80c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64zM0 64C0 28.7 28.7 0 64 0H320c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm88 40c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H104c-8.8 0-16-7.2-16-16V104zM232 88h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H232c-8.8 0-16-7.2-16-16zM88 232c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H104c-8.8 0-16-7.2-16-16V232zm144-16h48c8.8 0 16 7.2 16 16v48c0 8.8-7.2 16-16 16H232c-8.8 0-16-7.2-16-16V232c0-8.8 7.2-16 16-16z"/>
                    </svg>
                    <p class="font-normal text-gray-700 mt-5 md:mt-0">Jl. Tegar Beriman No. 19, Depok, Jawa Barat</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
