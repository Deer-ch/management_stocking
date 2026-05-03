@extends('layouts.app')
@section('content')

<h2>Data Supplier</h2>

<a href="{{ route('suppliers.create') }}">+ Tambah Supplier</a>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th><th>Nama</th><th>Kontak</th><th>Alamat</th><th>Aksi</th>
    </tr>
    @foreach($suppliers as $i => $sup)
    <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $sup->name }}</td>
        <td>{{ $sup->contact }}</td>
        <td>{{ $sup->address }}</td>
        <td>
            <form action="{{ route('suppliers.destroy', $sup->id) }}" method="POST">
                @csrf @method('DELETE')
                <button onclick="return confirm('Hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
