<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        return view('dashboard.tickets.index');
    }

    public function send(Request $request) {
        $attributes = $request->validate([
            'recipent' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'file' => '',
        ]);
    }
}
