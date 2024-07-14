@extends('admin.navbar')

@section('titleAdmin', 'Testimoni')

@section('page')
<style>
    .bg-tampilkan {
        background-color: #C8EEFF;
        color: #323030; /* Ensure text is readable on blue background */
    }

    .bg-sembunyikan {
        background-color: #FFF38A;
        color: black; /* Ensure text is readable on yellow background */
    }
</style>

<h1 class="h3 mb-2 text-gray-800">Testimoni</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center">
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
                            <td class="">
                                <form action="{{ route('testimonials.updateStatus', $testimoni->id) }}" method="POST">
                                    @csrf
                                    <div class="input-group">
                                        <select name="status" onchange="this.form.submit()" class="form-select {{ $testimoni->status == 'tampilkan' ? 'bg-tampilkan' : 'bg-sembunyikan' }}">
                                            <option value="tampilkan" {{ $testimoni->status == 'tampilkan' ? 'selected' : '' }}>Tampilkan</option>
                                            <option value="sembunyikan" {{ $testimoni->status == 'sembunyikan' ? 'selected' : '' }}>Sembunyikan</option>
                                        </select>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
