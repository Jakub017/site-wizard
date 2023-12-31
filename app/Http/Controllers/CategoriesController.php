<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Category::search(request('search'))->orderBy('id', 'asc')->paginate(10);
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create() {
        return view('dashboard.categories.create');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'max:255',
        ]);

        Category::create($attributes);

        return redirect()->route('categories.index')->with('success', 'Kategoria dodana pomyślnie.');
    }

    public function edit(Category $category) {
        return view('dashboard.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category) {
        $attributes = $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'description' => 'max:255',
        ]);

        $category->update($attributes);

        return redirect()->route('categories.index')->with('success', 'Kategoria zaktualizowana pomyślnie.');
    }

    public function destroy(Category $category) {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Kategoria usunięta pomyślnie.');
    }
}
