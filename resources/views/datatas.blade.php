@extends('template')

@section('headerPage', 'Data Tas')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/tas/tambah" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i> Tambah Tas Baru
        </a>

        <!-- Search Form -->
        <form action="/tas" method="GET" class="d-flex align-items-center">
            <input type="text" name="cari" class="form-control me-2" placeholder="Cari Merk Tas" value="{{ request('cari') }}">
            <input type="number" name="pagination" class="form-control me-2" placeholder="Pagination" value="{{ request('pagination', 10) }}" style="max-width: 100px;">
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Kode Tas</th>
                <th>Merk Tas</th>
                <th>Stock</th>
                <th>Tersedia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tas as $t)
            <tr>
                <td>{{ $t->kodetas }}</td>
                <td>{{ $t->merektas }}</td>
                <td>{{ $t->stocktas }}</td>
                <td>
                    @if ($t->tersedia === 'Y')
                        <i class="fa-solid fa-check text-success"></i>
                    @else
                        <i class="fa-solid fa-minus text-danger"></i>
                    @endif
                </td>
                <td class="text-center">
                    <a href="/tas/edit/{{ $t->kodetas }}" class="btn btn-warning btn-icon">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="/tas/hapus/{{ $t->kodetas }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-icon">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br/>
    Halaman : {{ $tas->currentPage() }} <br/>
    Jumlah Data : {{ $tas->total() }} <br/>
    Data Per Halaman : {{ $tas->perPage() }} <br/>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center px-2">
        {{ $tas->appends(['cari' => request('cari'), 'pagination' => request('pagination')])->links() }}
    </div>
@endsection
