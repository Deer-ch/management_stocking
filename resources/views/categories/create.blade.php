@extends('layouts.app')
@section('content')

<h2>Tambah Kategori</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <label>Nama Kategori:</label>
    <input type="text" name="name" required><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('categories.index') }}">Batal</a>
</form>

@endsection
