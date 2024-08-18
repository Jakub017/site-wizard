<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::search(request()->input('search'))->orderBy('id', 'desc')->paginate(5);
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'service_name' => 'required|string|max:255|unique:services,service_name',
            'price' => 'required|string|max:255',
            'excerpt' => 'required|string|max:255',
            'content' => 'required|string|max:2000',
        ]);

        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('services', 'public');
        };

        $data['slug'] = Str::slug($data['service_name']);

        Service::create($data);

        return redirect()->route('services.index')->with('success', 'Usługa dodana pomyślnie.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'service_name' => 'required|string|max:255|unique:services,service_name,'.$service->id,
            'price' => 'required|string|max:255',
            'excerpt' => 'required|string|max:255',
            'content' => 'required|string|max:2000',
        ]);

        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('services', 'public');
        };

        $data['slug'] = Str::slug($data['service_name']);

        $service->update($data);

        return redirect()->route('services.index')->with('success', 'Usługa zaktualizowana pomyślnie.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Usługa usunięta pomyślnie.');
    }
}
