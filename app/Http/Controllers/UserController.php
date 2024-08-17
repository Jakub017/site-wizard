<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'photo' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if (isset($data['photo'])) {
            $user->updateProfilePhoto($data['photo']);
        }

        return redirect()->route('users.index')->with('success', 'Użytkownik dodany pomyślnie.');
    }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'photo' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:1024',
        ]);

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);

            $user->update([
                'password' => $data['password'],
            ]);
        }

        if (isset($data['photo'])) {
            $user->updateProfilePhoto($data['photo']);
        }
        
        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        return redirect()->route('users.index')->with('success'. 'Użytkownik zaktualizowany pomyślnie.');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Użytkownik usunięty pomyślnie.');
    }

}
