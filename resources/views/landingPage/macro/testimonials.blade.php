@extends('landingPage.navbar')
@section('title', 'Testimonials')

@section('page')
<div class="relative py-20 mx-auto">
    <div class="mx-auto text-center my-10">
        <h2 class="text-3xl font-bold">Testimonials</h2>
    </div>
    <div class="mx-auto">
        <div class="flex flex-col items-center mx-auto bg-white border border-gray-200 rounded-lg shadow md:flex-row md:h-96 md:max-w-4xl hover:bg-gray-100">
            <form id="testimonialForm" action="{{ route('storeTestimonial') }}" method="POST" class="w-full ml-4 mx-auto p-4 md:p-6">

                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ Auth::user()->username }}" required />
                    <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="city" id="city" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{ Auth::user()->city }}" required />
                    <label for="city" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kota</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <textarea name="testimonials" id="testimonials" cols="30" rows="4" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></textarea>
                    <label for="testimonials" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Testimonials</label>
                </div>
                <div class="w-full">
                    <button id="submitTestimonial" type="submit" class="text-[#323030] bg-[#DDCEBB] hover:bg-[#99856B] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full md:w-full sm:w-auto px-5 py-2.5 text-center">Kirim</button>

                </div>
            </form>
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-64 md:rounded-none md:rounded-s-lg md:mx-4" src="{{ asset('images/login.jpg') }}" alt="">
        </div>
    </div>
</div>
<div id="confirmModal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="bg-white w-96 p-6 rounded-lg shadow-lg text-center relative z-10"> <!-- Adjust z-index here -->
        <p class="mb-4">Apakah Anda yakin ingin mengirim testimonial ini?</p>
        <div class="flex justify-center">
            <button id="confirmSubmit" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded mr-2">Ya</button>
            <button id="cancelSubmit" class="text-gray-600 bg-gray-300 hover:bg-gray-400 px-4 py-2 rounded">Batal</button>
        </div>
    </div>
</div>

<div id="successModal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="bg-white w-96 p-6 rounded-lg shadow-lg text-center relative z-10"> <!-- Adjust z-index here -->
        <p class="mb-4">Testimonial berhasil dikirim!</p>
        <button id="dismissSuccess" class="text-white bg-green-500 hover:bg-green-600 px-4 py-2 rounded">Tutup</button>
    </div>
</div>

@endsection
