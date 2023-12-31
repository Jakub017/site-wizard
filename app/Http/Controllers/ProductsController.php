<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::search(request('search'))->orderBy('id', 'asc')->paginate(10);
        return view('dashboard.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::latest()->get();
        return view('dashboard.products.create', compact('categories'));
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => 'required|min:3|max:255',
            'excerpt' => 'max:255',
            'content' => '',
            'main_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images' => '',
            'price' => 'numeric',
            'status' => 'required',
        ]);

        $attributes['slug'] = Str::slug($attributes['name']);

        if($request->hasFile('main_image')) {
            $attributes['main_image'] = $request->file('main_image')->store('product-thumbnails', 'public');
        }

        if($request->hasFile('images')) {
            $images = [];
            foreach($request->file('images') as $image) {
                $images[] = $image->store('product-images', 'public');
            }
            $attributes['images'] = json_encode($images);
        }

        $product = Product::create($attributes);

        $product->categories()->sync($request->input('categories'));

        return redirect()->route('products.index')->with('success', 'Produkt został dodany.');
    }

    public function edit(Product $product) {
        $categories = Category::latest()->get();
        return view('dashboard.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product) {
        $attributes = $request->validate([
            'name' => 'required|min:3|max:255',
            'excerpt' => 'max:255',
            'content' => '',
            'main_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'numeric',
            'status' => 'required',
        ]);

        if($request->hasFile('main_image')) {
            $attributes['main_image'] = $request->file('main_image')->store('product-thumbnails', 'public');
        }

        if($request->hasFile('images')) {
            $images = [];
            foreach($request->file('images') as $image) {
                $images[] = $image->store('product-images', 'public');
            }
            $attributes['images'] = json_encode($images);
        }

        $product->categories()->sync($request->input('categories'));

        $product->update($attributes);

        return redirect()->route('products.index')->with('success', 'Produkt został zaktualizowany.');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produkt został usunięty.');
    }
}
