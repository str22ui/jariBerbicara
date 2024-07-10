@extends('admin.navbar')

@section('titleAdmin', 'Tambah Abjad')

@section('page')

<h1 class="h3 mb-2 text-gray-800">Tambah Data Abjad</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Abjad</h6>
    </div>
    <div class="card-body">
        <form action="/alphabet/create" method="POST" class="row g-3" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="abjad" class="form-label">Huruf</label>
                    <input type="text" class="form-control" id="abjad" name="abjad">
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="image_url" name="image_url">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="video_url" class="form-label">Video</label>
                    <input type="file" class="form-control" id="video_url" name="video_url">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
