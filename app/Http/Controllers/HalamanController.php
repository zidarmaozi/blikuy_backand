<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home(Request $request)
    {
        $selectedCategoryId = $request->query('category');

        // Mengambil semua kategori beserta jumlah produknya
        $categories = Category::withCount('products')->get();

        // Mengambil produk beserta relasi kategorinya
        $productsQuery = Product::with('category');

        if ($selectedCategoryId) {
            $productsQuery->where('category_id', $selectedCategoryId);
        }

        $products = $productsQuery->latest()->get();

        return view('home', compact('categories', 'products', 'selectedCategoryId'));
    }

    public function profil()
    {
        return view('profil');
    }
}