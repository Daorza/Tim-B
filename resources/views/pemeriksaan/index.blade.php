@extends('sidebar')

@section('content')
<title>Data Pemeriksaan</title>
<div class="bg justify-content-center flex align-items-center text-center w-100" style="margin-left: 250px;">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="d-flex justify-content-between">
            <h6 class="mb-4">Tabel Pemeriksaan</h6>
            <a href="{{ route('pemeriksaan.create') }}">
                <button type="button" name="tambah" class="btn btn-outline-info h-100">
                    Tambah
                </button>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama pemeriksaan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center align-items-center">
                <?php $i = 1 ?>
                @foreach($pemeriksaans as $pemeriksaan)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $pemeriksaan->pasien->nama_pasien }}</td>
                        <td>{{ $pemeriksaan->dokter->nama_dokter }}</td>
                        <td>{{ $pemeriksaan->gejala }}</td>
                        <td>{{ $pemeriksaan->diagnosis }}</td>
                        <td>{{ $pemeriksaan->obat }}</td>
                        <td>{{ $pemeriksaan->keterangan }}</td>
                        <td>
                            <a href="{{ route('pemeriksaan.edit', $pemeriksaan->id_pemeriksaan) }}"><button type="button" class="btn btn-outline-warning m-1">Update</button></a>
                            <form action="{{ route('pemeriksaan.destroy', $pemeriksaan->id_pemeriksaan) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-outline-danger m-1">Hapus</button>
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

