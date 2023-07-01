<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::with('groups')->get();

        return view('dashboard.clients.clients-index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::get();
        return view('dashboard.clients.clients-create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'nip' => 'unique:clients,nip',
            'phone' => 'required|unique:clients,phone',
            'email' => 'required|unique:clients,email',
            'country' => 'required',
        ]);

        $client = Client::create($attributes);

        $client->groups()->sync($request->input('groups'));

        return redirect()->back()->with(['success' => ['en' => 'Thank you for subscribing to the newsletter!', 'pl' => 'Dziękujemy za zapisanie się do newslettera!']]);

    }

     public function storeFromDashboard(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'nip' => 'unique:clients,nip',
            'phone' => 'required|unique:clients,phone',
            'email' => 'required|unique:clients,email',
            'country' => 'required',
        ]);


        $client = Client::create($attributes);

        $client->groups()->sync($request->input('groups'));

        return Redirect::route('clients.index')->with('success', 'Klient dodany pomyślnie.');
    }

    

    

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('dashboard.clients.clients-show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $groups = Group::get();
        return view('dashboard.clients.clients-edit', compact('client', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'nip' => '',
            'phone' => 'required',
            'email' => 'required',
            'country' => 'required',
        ]);

        $client->update($attributes);

        $client->groups()->sync($request->input('groups'));

        return Redirect::route('clients.index')->with('success', 'Klient zaktualizowany pomyślnie.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return Redirect::route('clients.index')->with('success', 'Klient usunięty pomyślnie.');
    }

}
