<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $selectedCategory = $request->query('category', 'all');

        $query = Product::query();

        if ($selectedCategory !== 'all') {
            $query->where('category', $selectedCategory);
        }

        $products = $query->get();

        $pizzas = Product::where('category', 'Pizza')->get();
        $burgers = Product::where('category', 'Burgers')->get();
        $pastas = Product::where('category', 'Pasta')->get();
        $drinks = Product::where('category', 'Drinks')->get();

        return view('menu', compact('products', 'pizzas', 'burgers', 'pastas', 'drinks', 'selectedCategory'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->take(3)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }
}
