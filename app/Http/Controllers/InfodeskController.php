<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class InfodeskController extends Controller
{
    public function index() {
        return view('infodesk', [
            'title' => 'INFODESK'
        ]);
    }

    public function pesanStore(Request $request) {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'pesan' => 'required'
        ]);

        $notifikasi = new Notifikasi();
        $notifikasi->name = $request->name;
        $notifikasi->email = $request->email;
        $notifikasi->pesan = $request->pesan;
        $notifikasi->checked = 0;
        $notifikasi->save();

        return redirect('/')->with('success', 'Pesan berhasil dikirim');
    }
}