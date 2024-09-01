<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Mail\HelpMail;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function dashboard() {
        $usersCount = count(User::all());
        $servicesCount = count(Service::all());
        $postsCount = count(Post::all());
        $productsCount = count(Product::all());
        return view('admin.dashboard', compact('usersCount', 'servicesCount', 'postsCount', 'productsCount'));
    }

    public function help() {
        return view('admin.help');
    }

    public function send() {
        $data = request()->validate([
            'name' => 'required|max:255',
            'topic' => 'required',
            'email' => 'required|email|max:255',
            'message' => 'required',
            'php_version' => 'required',
            'domain' => 'required',
            'laravel_version' => 'required',
            'file' => 'nullable|file|max:2048',
        ]);

        if(isset($data['file'])) {
            $data['file'] = $data['file']->store('files', 'public');
        }

        try {
            Mail::to('wsparcie@sitewizard.pl')->send(new HelpMail($data));
            return redirect()->back()->with('success', 'Wiadomość została wysłana pomyślnie!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Wystąpił problem podczas wysyłania wiadomości. Spróbuj ponownie później.');
        }
    }
}
