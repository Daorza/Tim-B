@extends('sidebar')

@section('content')
<title>Data Obat</title>
<div class="bg justify-content-center flex align-items-center text-center w-100" style="margin-left: 250px;">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="d-flex justify-content-between">
            <h6 class="mb-4">Tabel Obat</h6>
    <a href="{{ route('obat.create') }}" class="btn btn-primary">Tambah Obat</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Obat</th>
                <th>Nama Obat</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($obats as $obat)
            <tr>
                <td>{{ $obat->id_obat }}</td>
                <td>{{ $obat->nama_obat }}</td>
                <td>{{ $obat->harga }}</td>
                <td>{{ $obat->stok }}</td>
                <td>
                    <a href="{{ route('obat.index', $obat->id_obat) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('obat.edit', $obat->id_obat) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('obat.destroy', $obat->id_obat) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
