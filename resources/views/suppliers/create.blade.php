@extends('layouts.app')
@section('content')

<h2>Tambah Supplier</h2>

<form action="{{ route('suppliers.store') }}" method="POST">
    @csrf

    <label>Nama Supplier:</label>
    <input type="text" name="name" required><br>

    <label>Kontak:</label>
    <input type="text" name="contact" required><br>

    <label>Alamat:</label>
    <textarea name="address" rows="4" required></textarea><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('suppliers.index') }}">Batal</a>
</form>

@endsection
