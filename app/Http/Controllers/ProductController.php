<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->with('categories')->paginate(5);
        return view('products.index', compact('products'));
    }

    public function create() 
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
       $data = $request->validate([
            'product_name' => 'required|unique:products,product_name',
            'description' => 'required',
            'price' => 'required',
            'sale_price' => 'nullable',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_alt' => 'required',
            'categories' => 'required',
            'gallery' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if(isset($data['image'])) {
            $data['image'] = $data['image']->store('products', 'public');
        }

        $data['slug'] = Str::slug($data['product_name']);

        $product = Product::create($data);

        $product->categories()->sync($data['categories']);

        return redirect()->route('products.index')->with('success', 'Product dodany pomyślnie.');
    }

    public function edit($id) 
    {
        $product = Product::where('id', $id)->with('categories')->firstOrFail();
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'product_name' => 'required|unique:products,product_name,'.$product->id,
            'description' => 'required',
            'price' => 'required',
            'sale_price' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_alt' => 'required',
            'categories' => 'required',
            'gallery' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if(isset($data['image'])) {
            $data['image'] = $data['image']->store('products', 'public');
        }

        $data['slug'] = Str::slug($data['product_name']);

        $product->update($data);

        $product->categories()->sync($data['categories']);

        return redirect()->route('products.index')->with('success', 'Product zaktualizowany pomyślnie.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product usunięty pomyślnie.');
    }
}
