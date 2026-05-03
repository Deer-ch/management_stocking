@extends('layouts.app')
@section('content')

<h2>Tambah Produk</h2>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <label>Kode Produk:</label>
    <input type="text" name="code" required><br>

    <label>Nama Produk:</label>
    <input type="text" name="name" required><br>

    <label>Kategori:</label>
    <select name="category_id" required>
        <option value="">-- Pilih --</option>
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select><br>

    <label>Satuan:</label>
    <input type="text" name="unit" required><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('products.index') }}">Batal</a>
</form>

@endsection
