<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('dashboard.services.services-index', compact('services'));
    }

    public function create()
    {
        return view('dashboard.services.services-create');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'photo' => 'required',
            'photo_alt' => '',
            'meta_title' => '',
            'meta_description' => '',
            'meta_keywords' => '',
            
        ]);

        if($request->hasFile('photo')) {
            $attributes['photo'] = $request->file('photo')->store('services-photos', 'public');
        }

        $attributes['slug'] = Str::slug($attributes['title']);

        Service::create($attributes);

        return redirect()->route('services.index')->with('success', 'Usługa dodana pomyślnie.');
    }

    public function edit(Service $service)
    {
        return view('dashboard.services.services-edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'photo_alt' => '',
            'meta_title' => '',
            'meta_description' => '',
            'meta_keywords' => '',
        ]);

        if($request->hasFile('photo')) {
            $attributes['photo'] = $request->file('photo')->store('services-photos', 'public');
        }

        $attributes['slug'] = Str::slug($attributes['title']);

        $service->update($attributes);

        return redirect()->route('services.index')->with('success', 'Usługa zaktualizowana pomyślnie.');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Usługa usunięta pomyślnie.');
    }
}
