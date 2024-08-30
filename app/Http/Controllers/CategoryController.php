<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index() {
      $categories = Category::search(request()->input('search'))->orderBy('id', 'desc')->paginate(5);
      return view('admin.categories.index', compact('categories'));
   }

   public function create() {
      return view('admin.categories.create');
   }

   public function store(Request $request) {
      $data = $request->validate([
         'category_name' => 'required|unique:categories,category_name',
         'description' => 'nullable',
         'color' => 'required',
      ]);

      $data['slug'] = Str::slug($data['category_name']);

      Category::create($data);

      return redirect()->route('categories.index')->with('success', 'Kategoria dodana pomyślnie.');
   }

   public function edit(Category $category) {
      return view('admin.categories.edit', compact('category'));
   }

   public function update(Request $request, Category $category) {
      $data = $request->validate([
         'category_name' => 'required|unique:categories,category_name,'.$category->id,
         'description' => 'nullable',
         'color' => 'required',
      ]);

      $data['slug'] = Str::slug($data['category_name']);

      $category->update($data);

      return redirect()->route('categories.index')->with('success', 'Kategoria zaktualizowana pomyślnie.');
   }

   public function destroy(Category $category) {
      $category->delete();

      return redirect()->route('categories.index')->with('success', 'Kategoria usunieta pomyślnie.');
   }
}
