<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function index() {
        return view('form.ulasan', [
            'title' => 'Ulasan'
        ]);
    }

    public function ulasanStore(Request $request) {
        $validatedData = $request->validate([
            'ulasan' => 'required',
            'komentar' => 'required'
        ]);

        dd($validatedData);
    }
}