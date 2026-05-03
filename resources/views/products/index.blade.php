@extends('layouts.app')
@section('content')
<h2>Data Produk</h2>

@if(session('success'))
    <div style="color:green">{{ session('success') }}</div>
@endif

<a href="{{ route('products.create') }}">+ Tambah Produk</a>

<table border="1" cellpadding="8">
    <tr>
        <th>Kode</th><th>Nama</th><th>Kategori</th>
        <th>Stok</th><th>Satuan</th><th>Aksi</th>
    </tr>
    @foreach($products as $p)
    <tr style="{{ isset($p->min_stock) && $p->stock <= $p->min_stock ? 'background:#ffe0e0' : '' }}">
        <td>{{ $p->code }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->category->name ?? '-' }}</td>
        <td>{{ $p->stock }}</td>
        <td>{{ $p->unit }}</td>
        <td>
            <form action="{{ route('products.destroy', $p->id) }}" method="POST">
                @csrf @method('DELETE')
                <button onclick="return confirm('Hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<p style="margin-top:10px; font-size:12px;">Baris merah = stok di bawah minimum</p>
@endsection
