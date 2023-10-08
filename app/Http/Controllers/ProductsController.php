<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        return view('dashboard.products.create');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'title' => 'required|min:3|max:255',
            'excerpt' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:0',
        ]);

        $attributes['slug'] = Str::slug($attributes['title']);

        if($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('product-thumbnails', 'public');
        }

        Product::create($attributes);

        return redirect()->route('products.index')->with('success', 'Produkt został dodany.');
    }

    public function edit(Product $product) {
        return view('dashboard.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product) {
        $attributes = $request->validate([
            'title' => 'required|min:3|max:255',
            'excerpt' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:0',
        ]);

        if($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('product-thumbnails', 'public');
        }

        $product->update($attributes);

        return redirect()->route('products.index')->with('success', 'Produkt został zaktualizowany.');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produkt został usunięty.');
    }
}
