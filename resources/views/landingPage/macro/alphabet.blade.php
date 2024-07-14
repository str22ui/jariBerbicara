@extends('landingPage.navbar')
@section('title', 'Abjad')

@section('page')
<div class="relative py-24 text-[#323030]">
    <div class="text-center">
        <h2 class="text-2xl font-bold">Mari kita belajar abjad bahasa isyarat</h2>
        <div class="mt-4 mb-8">
            <p>Tentukan referensi kamu!</p>
        </div>
        <div>
            <div class="inline-flex" role="group" id="toggle-switch">
                <input type="radio" class="hidden" id="foto" name="reference" value="foto" checked>
                <label for="foto" class="toggle-option" id="label-foto">Foto</label>

                <input type="radio" class="hidden" id="video" name="reference" value="video">
                <label for="video" class="toggle-option" id="label-video">Video</label>
            </div>
        </div>
    </div>


    <div id="foto-container" class="max-w-6xl mx-auto   mt-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($abjadCards as $item)
            <div class="border rounded-lg overflow-hidden shadow-md">
                <a href="#">
                    @if ($item->image_url)
                    <img class="w-full h-80 object-cover" src="{{ asset('storage/' . $item->image_url) }}" alt="" />
                    @else
                    <img class="w-full h-80 object-cover" src="https://source.unsplash.com/1417x745/?house" alt="...">
                    @endif
                </a>
                <div class="p-5 text-center bg-[#F9F6F1]">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $item->abjad }}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div id="video-container" class="max-w-6xl mx-auto bg-white border border-gray-200 rounded-lg shadow hidden mt-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($abjadCards as $item)
            <div class="border rounded-lg overflow-hidden shadow-md">
                <a href="#">
                    @if ($item->video_url)
                    <video class="w-full h-80 object-cover" controls>
                        <source src="{{ asset('storage/' . $item->video_url) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    @else
                    <img class="w-full h-80 object-cover" src="https://source.unsplash.com/1417x745/?house" alt="...">
                    @endif
                </a>
                <div class="p-5 text-center bg-[#F9F6F1]">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $item->abjad }}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    @if(!$isLoggedIn)
    <div class="text-center my-10">
        <div class="mx-auto flex justify-center w-24">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/>
            </svg>
        </div>
        <div class="mt-8 mb-3">
            <h2>Mau lihat lebih lengkap? Masuk terlebih dahulu yuk!</h2>
        </div>
        <div class="w-full">
            <a href="/loginUser">
            <button type="submit" class="w-1/5  text-[#323030] bg-[#DDCEBB] hover:bg-[#99856B] hover:text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-4 py-2 text-center">Masuk</button></a>
        </div>
    </div>
    @endif

    @if($isLoggedIn)
    <div class=" text-center md:mt-14">
        <h2 class="text-lg font-medium">Yeay! kamu berhasil selesaikan pembelajaran</h2>
    </div>
    @endif
</div>

<style>
    .hidden {
        display: none;
    }

    .toggle-option {
        padding: 10px 20px;
        border: 1px solid #ccc;
        color: #000;
        cursor: pointer;
        user-select: none;
        transition: background-color 0.3s, color 0.3s;
        background-color: #fff; /* Warna latar belakang default */
    }

    .toggle-option.active {
        background-color: #DDCEBB; /* Warna biru untuk tombol aktif */
        color: #323030; /* Warna teks saat tombol aktif */
    }

    #label-foto {
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
    }

    #label-video {
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fotoButton = document.getElementById('label-foto');
        const videoButton = document.getElementById('label-video');
        const fotoContainer = document.getElementById('foto-container');
        const videoContainer = document.getElementById('video-container');

        fotoButton.addEventListener('click', function() {
            fotoContainer.classList.remove('hidden');
            videoContainer.classList.add('hidden');
            setActiveButton(fotoButton, videoButton);
        });

        videoButton.addEventListener('click', function() {
            videoContainer.classList.remove('hidden');
            fotoContainer.classList.add('hidden');
            setActiveButton(videoButton, fotoButton);
        });

        function setActiveButton(activeButton, inactiveButton) {
            activeButton.classList.add('active');
            inactiveButton.classList.remove('active');
        }

        // Set default active button
        setActiveButton(fotoButton, videoButton);
    });
</script>

@endsection
