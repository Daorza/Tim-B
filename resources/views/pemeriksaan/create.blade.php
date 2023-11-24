@extends('sidebar')

@section('content')
<title>Data Pemeriksaan | Create</title>
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Tambah Pemeriksaan</h6>
        <form action="{{ route('pemeriksaan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_pasien_pemeriksaan">Nama Pasien:</label>
                <select name="id_pasien_pemeriksaan" class="form-control">
                    @foreach($pasiens as $pasien)
                        <option value="{{ $pasien->id_pasien }}">{{ $pasien->nama_pasien }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_dokter_pemeriksaan">Nama Dokter:</label>
                <select name="id_dokter_pemeriksaan" class="form-control">
                    @foreach($dokters as $dokter)
                        <option value="{{ $dokter->id_dokter }}">{{ $dokter->nama_dokter }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="gejala">Gejala:</label>
                <input type="text" name="gejala" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="diagnosis">Diagnosis:</label>
                <input type="text" name="diagnosis" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="obat">Obat:</label>
                <input type="text" name="obat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <input type="text-area" name="keterangan" class="form-control" required>
            </div>

            <button type="submit">Simpan</button>
        </form>
    </div>
</div>
@endsection
