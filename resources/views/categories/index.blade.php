@extends('layouts.app')
@section('content')

<h2>Data Kategori</h2>

<a href="{{ route('categories.create') }}">+ Tambah Kategori</a>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th><th>Nama</th><th>Aksi</th>
    </tr>
    @foreach($categories as $i => $cat)
    <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $cat->name }}</td>
        <td>
            <form action="{{ route('categories.destroy', $cat->id) }}" method="POST">
                @csrf @method('DELETE')
                <button onclick="return confirm('Hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
