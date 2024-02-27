@extends('layouts.main')

@section('container')
    <form class="my-5" action="{{ route('users.store') }}" method="POST">
        @csrf
        <h3>Tambah user baru</h3>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    <table class="table table-striped">
        <h3>List User</h3>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="space-x-px d-flex gap-4">
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                        <button class="btn btn-info">
                            <a href="/users/update/{{ $user->id }}" class="text-decoration-none text-white">Update</a>
                        </button>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
