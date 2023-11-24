@extends('sidebar')

@section('content')
<title>Data Pegawai</title>
<div class="bg justify-content-center flex align-items-center text-center w-100" style="margin-left: 250px;">
    <div class="bg-secondary rounded h-100 p-4">
        <div class="d-flex justify-content-between">
            <h6 class="mb-4">Tabel Pegawai</h6>
            <a href="{{ route('pegawai.create') }}">
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
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">No Telephone</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center align-items-center">
                <?php $i = 1 ?>
                @foreach($pegawais as $pegawai)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $pegawai->nama_pegawai }}</td>
                        <td>{{ $pegawai->jabatan }}</td>
                        <td>{{ $pegawai->jenis_kelamin }}</td>
                        <td>{{ $pegawai->tempat_lahir }}</td>
                        <td>{{ $pegawai->tanggal_lahir }}</td>
                        <td>{{ $pegawai->telepon }}</td>
                        <td>{{ $pegawai->alamat }}</td>
                        <td>
                            <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}"><button type="button" class="btn btn-outline-warning m-1">Update</button></a>
                            <form action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST">
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

