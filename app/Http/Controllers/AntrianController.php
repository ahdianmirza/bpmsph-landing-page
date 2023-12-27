<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Antrian;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index() {
        return view('dashboard.antrian', [
            'title' => 'Antrian',
            'dataAntrian' => Antrian::all(),
            'antrianProses' => Antrian::firstWhere('status', 'proses'),
            'antrianSelesai' => Antrian::orderBy('nomorAntrian', 'asc')->where('status', 'selesai')->get(),
            'dataNotifikasiUnchecked' => Notifikasi::where('checked', 0)->get(),
            'dataNotifikasi' => Notifikasi::latest()->get()
        ]);
    }

    public function antrianSelesai() {
        Antrian::firstWhere('status', 'proses')->update(['status' => 'selesai']);
        return redirect('/dashboard/antrian')->with('success', 'Antrian berhasil diselesaikan');
    }

    public function antrianProses($id) {
        Antrian::where('id', $id)->update(['status' => 'proses']);
        return redirect('/dashboard/antrian')->with('success', 'Antrian berhasil diproses');
    }

    public function antrianMenunggu($id) {
        Antrian::where('id', $id)->update(['status' => 'menunggu']);
        return redirect('/dashboard/antrian')->with('success', 'Antrian kembali menunggu');
    }

    public function destroyAntrianSelesai() {
        Antrian::where('status', 'selesai')->delete();
        return redirect('/dashboard/antrian')->with('success', 'Antrian berhasil dihapus');
    }
}