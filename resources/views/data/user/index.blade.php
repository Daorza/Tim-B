@extends('sidebar')

@section('content')
<title>Data User</title>
<div class="bg justify-content-center flex align-items-center text-center w-100" style="margin-left: 250px;">

    <div class="bg-secondary rounded h-full p-4">
        <div class="d-flex justify-content-between">
            <h6 class="mb-4">Table Admin</h6>
            <a href="{{ route('user.create') }}" class="btn btn-outline-info h-100">
                Tambah
            </a>
        </div>
        <table class="table table-hover border-1">
            <thead class="text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Username</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aktif</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center align-items-center">
                <?php $i = 1 ?>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $user->pegawai->nama_pegawai }}</td>
                    <td>{{ $user->user_name }}</td>
                    <td>{{ $user->level }}</td>
                    <td>{{ $user->aktif }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id_user) }}"><button type="button" class="btn btn-outline-warning m-1">Update</button></a>
                        <form action="{{ route('user.destroy', $user->id_user) }}" method="POST">
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
@endsection
