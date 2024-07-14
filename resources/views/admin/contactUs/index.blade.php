@extends('admin.navbar')

@section('titleAdmin', 'Abjad')

@section('page')

    <h1 class="h3 mb-2 text-gray-800">Data Kontak Kami</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <a href="/addAlphabet"><button type="submit" class="btn btn-primary">+ Tambah </button></a> --}}
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Pesan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Pesan</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($contactUs as $index => $contact)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->message }}</td>
                                    
                                    <td>
                                        <form method="POST" action="/testimonials/{{ $contact->id }}">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Detail</button>
                                        </form>
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
