@extends('layouts.app')
@section('content')

<h2>Riwayat Perubahan Stok</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Tanggal</th>
        <th>Produk</th>
        <th>Tipe</th>
        <th>Jumlah</th>
    </tr>
    @foreach($stocks as $s)
    <tr>
        <td>{{ $s->created_at }}</td>
        <td>{{ $s->product->name ?? '-' }}</td>
        <td>{{ $s->type }}</td>
        <td>{{ $s->quantity }}</td>
    </tr>
    @endforeach
</table>

@endsection
