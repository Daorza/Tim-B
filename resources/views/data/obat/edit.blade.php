@extends('sidebar')

@section('content')
<title>Data Obat | Edit</title>
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Edit Obat</h6>
        <form action="{{ route('obat.update', $obat->id_obat) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama_obat">Nama Obat</label>
                <input type="text" name="nama_obat" class="form-control" value="{{ $obat->nama_obat }}">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control" value="{{ $obat->harga }}">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" class="form-control" value="{{ $obat->stok }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
