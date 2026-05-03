<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // Tampilkan semua produk (READ)
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    // Tampilkan form tambah
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    // Simpan produk baru (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'code'     => 'required|unique:products',
            'category_id' => 'required',
            'unit'     => 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Produk ditambahkan!');
    }

    // Hapus produk (DELETE)
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk dihapus!');
    }
}
