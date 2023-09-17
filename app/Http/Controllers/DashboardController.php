<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KonsulKunjungan;
use App\Models\Sampleuji;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('dashboard.dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    public function dataSuhuPengunjung() {
        return view('dashboard.tablesSuhuPengunjung', [
            'title' => 'Data Suhu Pengunjung'
        ]);
    }

    public function tablesUjiSample() {
        return view('dashboard.tablesUjiSample', [
            'title' => 'Data Pengantaran Sample',
            'samples' => Sampleuji::all()
        ]);
    }

    public function tablesKonsulKunjungan() {
        return view('dashboard.tablesKonsulKunjungan', [
            'title' => 'Data Konsultasi / Kunjungan',
            'konsuls' => KonsulKunjungan::all()
        ]);
    }

    public function profile() {
        return view('dashboard.profile', [
            'title' => 'My Profile'
        ]);
    }
}