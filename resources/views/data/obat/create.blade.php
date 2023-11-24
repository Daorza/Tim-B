@extends('sidebar')

@section('content')
<title>Data Obat | Create</title>
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Tambah Obat</h6>

        <form action="{{ route('obat.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_obat">Nama Obat:</label>
                <input type="text" name="nama_obat" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" name="harga" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok:</label>
                <textarea name="stok" required></textarea>
            </div>

            <button type="submit">Simpan</button>
        </form>
    </div>
</div>
@endsection
