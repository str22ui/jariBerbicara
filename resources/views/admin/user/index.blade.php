@extends('admin.navbar')

@section('titleAdmin', 'Pengguna')

@section('page')

    <h1 class="h3 mb-2 text-gray-800">Data Pengguna</h1>

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
                                <th>Email</th>
                                <th>City</th>
                                <th>Image</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Image</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($users as $index => $user)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>
                                        @if ($user->image)
                                            <img class="rounded-t-lg" src="{{ asset('storage/' . $user->image) }}" alt="" style="width: 100px;" />
                                        @else
                                            <img src="https://source.unsplash.com/1417x745/?house" class="d-block w-100 rounded-4" alt="..." style="width: 100px;">
                                        @endif
                                    </td>
                                    
                                    <td>
                                        {{-- <form method="POST" action="/alphabet/{{ $abjadCard->id }}">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form> --}}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        {{-- <form action="/alphabet/delete/{{ $abjadCard->id }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
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
