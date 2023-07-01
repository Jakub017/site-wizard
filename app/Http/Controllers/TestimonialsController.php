<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('dashboard.testimonials.testimonials-index', compact('testimonials'));
    }

    public function create()
    {
        return view('dashboard.testimonials.testimonials-create');
    }

    public function store(Request $request) {
        $attributes = request()->validate([
            'body_pl' => 'required',
            'body_en' => 'required',
            'author_pl' => 'required',
            'author_en' => 'required',
            'company_pl' => 'required',
            'company_en' => 'required',
            'photo' => 'required',
        ]);

        if($request->hasFile('photo')) {
            $attributes['photo'] = $request->file('photo')->store('testimonials-photos', 'public');
        }


        Testimonial::create($attributes);

        return redirect()->route('testimonials.index')->with('success', 'Opinia dodana pomyślnie.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('dashboard.testimonials.testimonials-edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $attributes = request()->validate([
            'body_pl' => 'required',
            'body_en' => 'required',
            'author_pl' => 'required',
            'author_en' => 'required',
            'company_pl' => 'required',
            'company_en' => 'required',
        ]);

        if($request->hasFile('photo')) {
            $attributes['photo'] = $request->file('photo')->store('testimonials-photos', 'public');
        }

        $testimonial->update($attributes);

        return redirect()->route('testimonials.index')->with('success', 'Opinia zaktualizowana pomyślnie.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Opinia usunięta pomyślnie.');
    }
}
