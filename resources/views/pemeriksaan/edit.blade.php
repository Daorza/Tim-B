@extends('sidebar')

@section('content')
<title>Data Pemeriksaan | Edit</title>
<div class="justify-content-center flex align-items-center w-100" style="margin-left: 250px;">
<div class="bg-secondary h-100 p-4 border-start border-danger">
        <h6 class="mb-5 ">Form Edit Pemeriksaan</h6>
        <form action="{{ route('pemeriksaan.update', $pemeriksaan->id_pemeriksaan) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="id_pasien_pemeriksaan">Nama Pasien:</label>
                <select name="id_pasien_pemeriksaan" class="form-control">
                    @foreach($pasiens as $pasien)
                        <option value="{{ $pasien->id_pasien }}" {{ $pasien->id_pasien == $pemeriksaan->id_pasien_pemeriksaan ? 'selected' : '' }}>{{ $pasien->nama_pasien }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_dokter_pemeriksaan">Nama Dokter:</label>
                <select name="id_dokter_pemeriksaan" class="form-control">
                    @foreach($dokters as $dokter)
                        <option value="{{ $dokter->id_dokter }}" {{ $dokter->id_dokter == $pemeriksaan->id_dokter_pemeriksaan ? 'selected' : '' }}>{{ $dokter->nama_dokter }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="gejala">Gejala:</label>
                <input type="text" name="gejala" class="form-control" value=" {{ $pemeriksaan->gejala }}">
            </div>
            <div class="form-group">
                <label for="diagnosis">Diagnosis:</label>
                <input type="text" name="diagnosis" class="form-control" value=" {{ $pemeriksaan->diagnosis }}">
            </div>
            <div class="form-group">
                <label for="obat">Obat:</label>
                <input type="text" name="obat" class="form-control" value=" {{ $pemeriksaan->obat }}">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <input type="text" name="keterangan" class="form-control" value=" {{ $pemeriksaan->keterangan }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
