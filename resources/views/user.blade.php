@extends('layouts.template')

@section('content')
    <table class="table table-bordereds">
        <tr class="text-center">
            <th>ID</th>
            <th>Level ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
        </tr>
        @foreach ($data as $pengguna)
            <tr>
                <td>{{ $pengguna->user_id }}</td>
                <td>{{ $pengguna->username }}</td>
                <td>{{ $pengguna->nama }}</td>
                <td>{{ $pengguna->level_id }}</td>
                <td>{{ $pengguna->level->level_kode }}</td>
                <td>{{ $pengguna->level->level_nama }}</td>
            </tr>
        @endforeach
    </table>
@endsection
