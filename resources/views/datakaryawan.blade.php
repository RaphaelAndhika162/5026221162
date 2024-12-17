@extends('template')
@section('content')
<div class="container">
    <h1>Data Karyawan</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan as $data)
            <tr>
                <td>{{ $data->kodepegawai }}</td>
                <td>{{ strtoupper($data->namalengkap) }}</td>
                <td>{{ $data->divisi }}</td>
                <td>{{ strtolower($data->departemen) }}</td>
                <td>
                    <form action="{{ route('karyawan.destroy', $data->kodepegawai) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Data</a>
</div>
@endsection
