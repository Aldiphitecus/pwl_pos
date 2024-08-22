@extends('layouts.template')

@section('content')
    <table class="table table-bordered">
        <tr class="text-center">
            <th>Kategori</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
        </tr>
        @foreach ($data as $barang)
            <tr>
                <td>{{ $barang->kategori->kategori_nama }}</td>
                <td>{{ $barang->barang_kode }}</td>
                <td>{{ $barang->barang_nama }}</td>
                <td>Rp. {{ number_format($barang->harga_beli, 0, ',', '.') }}</td>
                <td>Rp. {{ number_format($barang->harga_jual, 0, ',', '.') }}</td>
            </tr>
        @endforeach
    </table>
@endsection
