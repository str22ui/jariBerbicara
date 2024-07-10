@extends('landingPage.navbar')
@section('title', 'Home')

@section('page')
<div class="relative">
    <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('{{ asset('images/jumbotron.jpg') }}'); filter: brightness(0.35);"></div>
    <div class="relative z-10 flex items-center justify-center h-screen">
        <div class="max-w-4xl mx-auto  text-white">
            <div class="flex justify-between">
                <div class="w-3/4">
                    <h1 class="text-3xl mb-4 font-bold">Jari Berbicara: Membuka Dunia dengan Bahasa Isyarat</h1>
                    <h2 class="text-xl mb-8">Pelajari huruf abjad dan kata-kata sederhana menggunakan bahasa isyarat melalui video dan foto interaktif.</h2>
                </div>
                <div class="1/4">
                    <a href="/abjad">
                    <button type="button" class="w-full text-[#323030] bg-[#DDCEBB] hover:bg-[#99856B] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-3">Mulai belajar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative py-24 text-[#323030]">
    <div class="text-center">
        <h2 class="text-2xl font-bold ">Mengapa Harus Belajar Bahasa Isyarat</h2>
        <div class="mt-4 mb-8">

            <p>Temukan keindahan dalam memahami budaya dan ekspresi dengan <br>belajar bahasa isyarat bersama kami</p>
        </div>
    </div>
    <div>
        
        <div class="flex justify-center items-center flex-wrap gap-12">
            <div class="w-64 h-72 max-w-sm bg-[#DDCEBB] border border-gray-200 rounded-lg shadow  mx-2 mb-4 flex flex-col justify-between">
                <div class="flex justify-end px-4 pt-4"></div>
                <div class="flex flex-col items-center pb-6 flex-grow">
                    <img class="mb-4 w-28" src="{{ asset('images/Mengapa1.png') }}" alt="Bonnie image"/>
                    <h5 class="mb-1 text-xl font-medium text-[#323030]">Inklusivitas</h5>
                    <span class="text-sm text-[#323030] text-center px-3">Membuka peluang bagi semua orang untuk merasa diterima</span>
                </div>
            </div>
            <div class="w-64 h-72 max-w-sm bg-[#DDCEBB] border border-gray-200 rounded-lg shadow mx-2 mb-4 flex flex-col justify-between">
                <div class="flex justify-end px-4 pt-4"></div>
                <div class="flex flex-col items-center pb-6 flex-grow">
                    <img class="mb-4 w-28" src="{{ asset('images/Mengapa2.png') }}" alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-[#323030]">Komunikasi</h5>
                    <span class="text-sm text-[#323030] text-center px-3">Proses saling bertukar informasi, gagasan, dan emosi.</span>
                </div>
            </div>
            
        
            
            <div class="w-64 h-72 max-w-sm bg-[#DDCEBB] border border-gray-200 rounded-lg shadow mx-2 mb-4 flex flex-col justify-between">
                <div class="flex justify-end px-4 pt-4"></div>
                <div class="flex flex-col items-center pb-6 flex-grow">
                    <img class="mb-4 w-24"src="{{ asset('images/Mengapa3.png') }}" alt="Bonnie image"/>
                    <h5 class="mb-1 text-xl font-medium text-[#323030]">Keterampilan</h5>
                    <span class="text-sm text-[#323030] text-center px-3">Kemampuan yang diperoleh melalui latihan dan pengalaman praktis.</span>
                </div>
            </div>
        </div>
                
            </div>

</div>

<div class="relative py-24 text-[#323030] md:mx-20">
    <div class="text-center">
        <h2 class="text-2xl font-bold">Fitur Utama Website</h2>
        <div class="md:mt-4 md:mb-14">
            <p>Lorem Ipsum is simply dummy text of the printing and <br>typesetting industry.</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Alphabet Section Card -->
        <div>
            <a href="#" class="flex flex-col md:flex-row items-center bg-[#F9F6F1] border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <img class="object-cover w-full md:w-48 h-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{ asset('images/alphabet.jpg') }}" alt="Alphabet Section">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Alphabet Section</h5>
                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>
        </div>

        <!-- Words Section Card -->
        <div>
            <a href="#" class="flex flex-col md:flex-row items-center bg-[#F9F6F1] border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <img class="object-cover w-full md:w-48 h-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{ asset('images/words.jpg') }}" alt="Words Section">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Words Section</h5>
                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>
        </div>

        <!-- Testimonials Card -->
        <div>
            <a href="#" class="flex flex-col md:flex-row items-center bg-[#F9F6F1] border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <img class="object-cover w-full md:w-48 h-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{ asset('images/testimonials.jpg') }}" alt="Testimonials">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Testimonials</h5>
                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>
        </div>

        <!-- Contact Us Card -->
        <div>
            <a href="#" class="flex flex-col md:flex-row items-center bg-[#F9F6F1] border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                <img class="object-cover w-full md:w-48 h-48 rounded-t-lg md:rounded-none md:rounded-l-lg" src="{{ asset('images/contactUs.jpg') }}" alt="Contact Us">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Contact Us</h5>
                    <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>
        </div>
    </div>
</div>

{{-- ================================== Testimonials ========================================= --}}
<div class="relative py-20 text-white px-20 bg-[#272F42]">
    <div class="md:mb-12 text-center">
        <h2 class="text-2xl font-bold">Testimonials</h2>
    </div>

    <div class="swiper-container md:h-56 ">
        <div class="swiper-wrapper">
            @foreach ($testimonials as $item)
            <div class="swiper-slide max-w-2xl  p-6 flex bg-[#DDCEBB] border border-gray-200 rounded-lg shadow ">
                <article>
                    <div class="flex items-center mb-4 text-[#323030]">
                        @if ($item->image)
                            <img class="w-10 h-10 me-4 rounded-full" src="{{ asset('storage/' . $item->image) }}" alt="">
                        @else
                            <img class="w-10 h-10 me-4 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="">
                        @endif
                        <div class="font-bold text-[#323030]">
                            <p>{{ $item->username }} <time datetime="2014-08-16 19:00" class="block font-medium text-sm">{{ $item->city }}</time></p>
                        </div>
                    </div>
                    <p class="mb-2 text-[#323030]">{{ $item->testimonials }}</p>
                </article>
            </div>
            @endforeach
        </div>
        
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>



{{-- ================================== Call to action ========================================= --}}

<div class="relative py-24 text-[#323030] text-center px-20 ">
    <div>
        <div>
            <h2>Mulailah belajar bahasa isyarat sekarang dan buka dunia baru dalam Komunikasi!</h2>
        </div>
    </div>
    <div class="mt-12">
        <a href="/abjad">
        <button type="submit" class=" w-1/4 h-14 text-[#323030] bg-[#DDCEBB] hover:bg-[#99856B] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xl  px-4 py-2 text-center">Mulai Belajar</button></a>
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            spaceBetween: 10,
            breakpoints: {
                // when window width is >= 640px
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            }
        });
    });
</script>


@endsection
