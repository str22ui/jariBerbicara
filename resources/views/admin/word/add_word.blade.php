@extends('admin.navbar')

@section('titleAdmin', 'Tambah Kata')

@section('page')

<h1 class="h3 mb-2 text-gray-800">Tambah Data Kata Sederhana</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kata Sederhana</h6>
    </div>
    <div class="card-body">
        <form action="/word/create" method="POST" class="row g-3" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="word" class="form-label">Kata Sederhana</label>
                    <input type="text" class="form-control" id="word" name="word">
                </div>
                <div class="mb-3">
                    <label for="video_url" class="form-label">Video</label>
                    <input type="file" class="form-control" id="video_url" name="video_url">
                </div>
                <div class="mb-3">
                    <label for="description_video" class="form-label">Deskripsi Video</label>
                    <input type="text" class="form-control" id="description_video" name="description_video">
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="image_url" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="image_url" name="image_url">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi Video</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
