<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KonsulKunjungan;
use App\Models\Sampleuji;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function konsulKunjungan() {
        return view('form.konsulKunjungan', [
            'title' => 'Form Konsultasi Kunjungan'
        ]);
    }

    public function konsulKunjunganStore(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'whatsapp' => 'required|max:255',
            'asal' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tanggal' => 'required',
            'waktu' => 'required',
            'staff' => 'required',
            'tujuan' => 'required|max:255'
        ]);

        KonsulKunjungan::create($validatedData);
        return redirect('/konsultasi-kunjungan')->with('success', 'New data has been added');
    }

    public function sampleUji() {
        return view('form.sampleUji', [
            'title' => 'Form Pengantaran Sample Uji'
        ]);
    }

    public function sampleUjiStore(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'whatsapp' => 'required|max:255',
            'asal' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tanggal' => 'required',
            'waktu' => 'required',
            'jenis' => 'required|max:255'
        ]);

        Sampleuji::create($validatedData);
        return redirect('/sample-uji')->with('success', 'New data has been added');
    }
}