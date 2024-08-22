@extends('layouts.template')

@section('content')
    <h1>Data Level Pengguna</h1>
    <table class="table table-bordered m-1">
        <tr class="text-center">
            <th>Id</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->level_id }}</td>
                <td>{{ $d->level_kode }}</td>
                <td>{{ $d->level_nama }}</td>
            </tr>
        @endforeach
    </table>
@endsection
