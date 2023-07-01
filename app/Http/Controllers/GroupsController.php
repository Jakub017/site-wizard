<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GroupsController extends Controller
{
    public function index()
    {
        $groups = Group::get();
        return view('dashboard.groups.groups-index', compact('groups'));
    }

    public function create() {
        return view('dashboard.groups.groups-create');
    }

    public function edit(Group $group) {
        return view('dashboard.groups.groups-edit', compact('group'));
    }

    public function update(Group $group) {
        $attributes = request()->validate([
            'name' => 'required',
            'color' => 'required',
        ]);

        $group->update($attributes);

        return Redirect::route('groups.index')->with('success', 'Grupa zaktualizowana pomyślnie.');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => 'required',
            'color' => 'required',
        ]);

        Group::create($attributes);

        return Redirect::route('groups.index')->with('success', 'Grupa dodana pomyślnie.');
    }

    public function destroy(Group $group) {
        $group->delete();
        return Redirect::route('groups.index')->with('success', 'Grupa usunięta pomyślnie.');
    }
}
