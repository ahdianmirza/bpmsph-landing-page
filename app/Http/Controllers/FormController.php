<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\KonsulKunjungan;
use App\Models\NomorAntrian;
use App\Models\Sampleuji;
use App\Models\SubmitAlert;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function konsulKunjungan() {
        return view('form.konsulKunjungan', [
            'title' => 'Form Konsultasi Kunjungan',
            'nomorAntrians' => NomorAntrian::first(),
            'pegawais' => DataPegawai::all()
        ]);
    }

    public function konsulKunjunganStore(Request $request) {
        SubmitAlert::firstWhere('id', '1')->update([
                'submitKonsul' => 'tamu'
        ]);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'whatsapp' => 'required|max:255',
            'asal' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tanggal' => 'required',
            'waktu' => 'required',
            'staff' => 'required',
            'tujuan' => 'required|max:255',
            'suhu' => 'required'
        ]);
        
        $konsulKunjunganResult = KonsulKunjungan::create($validatedData);

        if($konsulKunjunganResult) {
            SubmitAlert::firstWhere('id', '1')->update([
                'submitKonsul' => 'T'
            ]);
        }

        return redirect('/konsultasi-kunjungan')->with('success', 'Data berhasil ditambahkan');
    }

    public function ambilNomorAntrian() {
        return view('form.nomorAntrian', [
            'title' => 'Ambil Nomor Antrian'
        ]);
    }

    public function sampleUji() {
        return view('form.sampleUji', [
            'title' => 'Form Pengantaran Sample Uji',
            'nomorAntrians' => NomorAntrian::first()
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
            'jenis' => 'required|max:255',
            'suhu' => 'required'
        ]);

        $sampleUjiResult = Sampleuji::create($validatedData);

        if($sampleUjiResult) {
            SubmitAlert::firstWhere('id', '1')->update([
                'submitKonsul' => 'S'
            ]);
        }

        return redirect('/sample-uji')->with('success', 'Data berhasil ditambahkan');
    }
}