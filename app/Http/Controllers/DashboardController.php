<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Group;
use App\Models\Client;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function dashboard() {
        $usersCount = count(User::get());
        $clientsCount = count(Client::get());

        $servicesCount = count(Service::get());
        $testimonialsCount = count(Testimonial::get());
        $postsCount = count(Post::get());
        return view('dashboard.dashboard', compact('usersCount', 'clientsCount', 'servicesCount', 'testimonialsCount', 'postsCount'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('dashboard.index');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();
        
        return Redirect::route('home');
    }
}
