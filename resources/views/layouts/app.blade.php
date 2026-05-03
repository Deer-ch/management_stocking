<!DOCTYPE html>
<html>
<head>
    <title>Sistem Manajemen Stok</title>
</head>
<body>
    <h1>Sistem Manajemen Stok</h1>
    <nav>
        <a href="{{ route('dashboard') }}">Dashboard</a> |
        <a href="{{ route('products.index') }}">Produk</a> |
        <a href="{{ route('categories.index') }}">Kategori</a> |
        <a href="{{ route('suppliers.index') }}">Supplier</a> |
        <a href="{{ route('stocks.index') }}">Riwayat Stok</a>
    </nav>
    <hr>

    @if(session('success'))
        <div style="color:green">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div style="color:red">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @yield('content')
</body>
</html>
