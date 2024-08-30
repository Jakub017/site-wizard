<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard() {
        $usersCount = count(User::all());
        $servicesCount = count(Service::all());
        $postsCount = count(Post::all());
        $productsCount = count(Product::all());
        return view('dashboard', compact('usersCount', 'servicesCount', 'postsCount', 'productsCount'));
    }
}
