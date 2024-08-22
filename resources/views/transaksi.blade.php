@extends('layouts.template')
@section('content')
    <table class="table table-bordered">
        <tr class="text-center">
            <th>User</th>
            <th>Pembeli</th>
            <th>Kode Penjualan</th>
            <th>Tanggal</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->user->nama }}</td>
                <td>{{ $item->pembeli }}</td>
                <td>{{ $item->penjualan_kode }}</td>
                <td>{{ $item->penjualan_tanggal }}</td>
            </tr>
        @endforeach
    </table>
@endsection
