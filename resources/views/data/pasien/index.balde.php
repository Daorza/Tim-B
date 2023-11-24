@extends('sidebar')

@section('content')
<title>Data Pasien</title>
<div class="bg justify-content-center flex align-items-center text-center w-100" style="margin-left: 250px;">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="d-flex justify-content-between">
            <h6 class="mb-4">Tabel Pasien</h6>
            <a href="{{ route('pasien.create') }}">
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
                        <th scope="col">Nama pasien</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center align-items-center">
                <?php $i = 1 ?>
                @foreach($pasiens as $pasien)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $pasien->nama_pasien }}</td>
                        <td>{{ $pasien->jenis_kelamin }}</td>
                        <td>{{ $pasien->tempat_lahir }}</td>
                        <td>{{ $pasien->tanggal_lahir }}</td>
                        <td>{{ $pasien->telepon }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>
                            <a href="{{ route('pasien.edit', $pasien->id_pasien) }}"><button type="button" class="btn btn-outline-warning m-1">Update</button></a>
                            <form action="{{ route('pasien.destroy', $pasien->id_pasien) }}" method="POST">
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

