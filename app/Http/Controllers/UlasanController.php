<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function index() {
        return view('form.ulasan', [
            'title' => 'Ulasan'
        ]);
    }

    public function ulasanStore(Request $request) {
        // dd($request->all());
        $validatedData = $request->validate([
            'kelamin' => 'required',
            'umur' => 'required',
            'ulasan' => 'required',
            'kualitas' => 'required',
            'kecepatan' => 'required',
            'kemudahan' => 'required',
            'whatsapp' => 'required',
            'qna' => 'required',
            'komentar' => 'required'
        ]);
        Ulasan::create($validatedData);

        return redirect('/ulasan')->with('success', 'Ulasan berhasil dikirim');
    }

    public function ikmIndex() {
        return view('form.ikm', [
            'title' => 'Form IKM'
        ]);
    }
}