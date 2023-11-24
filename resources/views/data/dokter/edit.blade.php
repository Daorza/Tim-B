@extends('sidebar')

@section('content')
<title>Data Dokter | Edit</title>
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Edit Dokter</h6>
        <form action="{{ route('dokter.update', $dokter->id_dokter) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nama_dokter">Nama Dokter</label>
            <input type="text" name="nama_dokter" class="form-control" value="{{ $dokter->nama_dokter }}">
        </div>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="L" {{ $dokter->jenis_kelamin === 'L' ? 'selected' : '' }}>L</option>
                <option value="P" {{ $dokter->jenis_kelamin === 'P' ? 'selected' : '' }}>P</option>
            </select>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $dokter->telepon }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $dokter->alamat }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
</div>
@endsection

