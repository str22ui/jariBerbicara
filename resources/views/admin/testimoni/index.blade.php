@extends('admin.navbar')

@section('titleAdmin', 'Abjad')

@section('page')

    <h1 class="h3 mb-2 text-gray-800">Testimoni</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <a href="/addAlphabet"><button type="submit" class="btn btn-primary">+ Tambah </button></a>
        </div> --}}
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kota</th>
                                <th>Testimoni</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kota</th>
                                <th>Testimoni</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($testimonials as $index => $testimoni)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $testimoni->name }}</td>
                                    <td>{{ $testimoni->city }}</td>
                                    <td>{{ $testimoni->testimonials }}</td>
                                    
                                    <td>
                                        <a href="/alphabet/edit/{{ $testimoni->id }}" class="btn btn-primary">Edit</a>
                                        {{-- <form action="/alphabet/delete/{{ $testimoni->id }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
