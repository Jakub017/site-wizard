<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::paginate(5);
        return view('dashboard.testimonials.index', compact('testimonials'));
    }

    public function create() {
        return view('dashboard.testimonials.create');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('testimonials-photos', 'public');
        }

        Testimonial::create($attributes);

        return redirect()->route('testimonials.index')->with('success', 'Opinia dodana pomyślnie');
    }

    public function edit(Testimonial $testimonial) {
        return view('dashboard.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial) {
        $attributes = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('testimonials-photos', 'public');
        }

        $testimonial->update($attributes);

        return redirect()->route('testimonials.index')->with('success', 'Opinia zaktualizowana pomyślnie');
    }

    public function destroy(Testimonial $testimonial) {
        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Opinia usunięta pomyślnie');
    }
}
