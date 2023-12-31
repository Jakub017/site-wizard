<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::search(request('search'))->orderby('id', 'asc')->paginate(10);
        return view('dashboard.services.index', compact('services'));
    }

    public function create()
    {
        return view('dashboard.services.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required|unique:services|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric',
        ]);

        $attributes['slug'] = Str::slug($attributes['title']);

        if($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('services-images', 'public');
        }

        Service::create($attributes);

        return redirect()->route('services.index')->with('success', 'Usługa dodana pomyślnie.');
    }

    public function edit(Service $service)
    {
        return view('dashboard.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service) {
        $attributes = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric',
        ]);

        if($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('services-images', 'public');
        }

        $service->update($attributes);

        return redirect()->route('services.index')->with('success', 'Usługa zaktualizowana pomyślnie.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Usługa usunięta pomyślnie.');
    }
}
