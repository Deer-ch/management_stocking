@extends('layouts.app')
@section('content')

<h2>Dashboard</h2>

<p>Selamat datang di Sistem Manajemen Stok</p>

<p>Gunakan menu di atas untuk mengelola:</p>
<ul>
    <li><a href="{{ route('products.index') }}">Produk</a></li>
    <li><a href="{{ route('categories.index') }}">Kategori</a></li>
    <li><a href="{{ route('suppliers.index') }}">Supplier</a></li>
    <li><a href="{{ route('stocks.index') }}">Riwayat Stok</a></li>
</ul>

@endsection
