@extends('layouts.template')
@section('content')
    <table class="table table-bordered">
        <tr class="text-center">
            <th>Nama Barang</th>
            <th>User</th>
            <th>Jumlah</th>
            <th>Tanggal</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->barang->barang_nama }}</td>
                <td>{{ $item->user->nama }}</td>
                <td>{{ $item->stok_jumlah }}</td>
                <td>{{ $item->stok_tanggal }}</td>
            </tr>
        @endforeach
    </table>
@endsection
