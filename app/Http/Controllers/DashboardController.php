<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\KonsulKunjungan;
use App\Models\Sampleuji;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function tablesUlasan() {
        return view('dashboard.tablesUlasan', [
            'title' => 'Data Ulasan',
            'ulasans' => Ulasan::all()
        ]);
    }

    public function profile() {
        return view('dashboard.profile', [
            'title' => 'My Profile'
        ]);
    }

    public function updateProfile(Request $request, $user_id) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'job' => 'required|max:255',
            'phone' => 'required|max:255'
        ]);

        User::firstWhere('id', $user_id)
                ->update($validatedData);
        
        return redirect('/dashboard/profile')->with('success', 'Profile has beed updated!'); 
    }
}