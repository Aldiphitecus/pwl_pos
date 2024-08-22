@extends('layouts.template')

@section('content')
    <table class="table table-bordered">
        <tr class="text-center">
            <th>ID</th>
            <th>Kategori Kode</th>
            <th>Kategori Nama</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->kategori_id }}</td>
                <td>{{ $d->kategori_kode }}</td>
                <td>{{ $d->kategori_nama }}</td>
            </tr>
        @endforeach
    </table>
@endsection
