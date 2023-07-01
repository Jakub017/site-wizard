<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard.products.products-index', compact('products'));
    }

    public function create()
    {
        return view('dashboard.products.products-create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title_pl' => 'required',
            'title_en' => 'required',

            'body_pl' => 'required',
            'body_en' => 'required',

            'excerpt_pl' => 'required',
            'excerpt_en' => 'required',

            'photo' => 'required',

            'photo_alt_pl' => '',
            'photo_alt_en' => '',
            'meta_title_pl' => '',
            'meta_title_en' => '',
            'meta_description_pl' => '',
            'meta_description_en' => '',
            'meta_keywords_pl' => '',
            'meta_keywords_en' => '',
            
        ]);

        if($request->hasFile('photo')) {
            $attributes['photo'] = $request->file('photo')->store('products-photos', 'public');
        }

        $attributes['slug'] = Str::slug($attributes['title_en']);

        product::create($attributes);

        return redirect()->route('products.index')->with('success', 'Produkt dodany pomyślnie.');
    }

    public function edit(Product $product)
    {
        return view('dashboard.products.products-edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $attributes = request()->validate([
            'title_pl' => 'required',
            'title_en' => 'required',

            'body_pl' => 'required',
            'body_en' => 'required',

            'excerpt_pl' => 'required',
            'excerpt_en' => 'required',

            'photo_alt_pl' => '',
            'photo_alt_en' => '',

            'meta_title_pl' => '',
            'meta_title_en' => '',
            'meta_description_pl' => '',
            'meta_description_en' => '',
            'meta_keywords_pl' => '',
            'meta_keywords_en' => '',
            
        ]);

        if($request->hasFile('photo')) {
            $attributes['photo'] = $request->file('photo')->store('products-photos', 'public');
        }

        $attributes['slug'] = Str::slug($attributes['title_en']);

        $product->update($attributes);

        return redirect()->route('products.index')->with('success', 'Produkt zaktualizowany pomyślnie.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produkt usunięty pomyślnie.');
    }
}
