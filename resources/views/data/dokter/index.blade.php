@extends('sidebar')

@section('content')
<title>Data Dokter</title>
<div class="bg justify-content-center flex align-items-center text-center w-100" style="margin-left: 250px;">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="d-flex justify-content-between">
            <h6 class="mb-4">Tabel Pegawai</h6>
            <a href="{{ route('dokter.create') }}">
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
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center align-items-center">
                <?php $i = 1 ?>
                @foreach($dokters as $dokter)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $dokter->nama_dokter }}</td>
                        <td>{{ $dokter->jenis_kelamin }}</td>
                        <td>{{ $dokter->telepon }}</td>
                        <td>{{ $dokter->alamat }}</td>
                        <td>
                            <a href="{{ route('dokter.edit', $dokter->id_dokter) }}"><button type="button" class="btn btn-outline-warning m-1">Update</button></a>
                            <form action="{{ route('dokter.destroy', $dokter->id_dokter) }}" method="POST">
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

