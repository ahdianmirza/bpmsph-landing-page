<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\KonsulKunjungan;
use App\Models\Notifikasi;
use App\Models\Sampleuji;
use App\Models\SuhuPengunjung;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('dashboard.dashboard', [
            'title' => 'Dashboard',
            'dataNotifikasiUnchecked' => Notifikasi::where('checked', 0)->get(),
            'dataNotifikasi' => Notifikasi::latest()->get()
        ]);
    }

    public function notifCheckedAll() {
        Notifikasi::where('checked', 0)->update([
            'checked' => 1
        ]);
        return back();
    }

    public function dataPegawai() {
        return view('dashboard.dataPegawai.dataPegawai', [
            'title' => 'Data Pegawai',
            'pegawais' => DataPegawai::all(),
            'dataNotifikasiUnchecked' => Notifikasi::where('checked', 0)->get(),
            'dataNotifikasi' => Notifikasi::latest()->get()
        ]);
    }

    public function dataPegawaiCreate() {
        return view('dashboard.dataPegawai.createDataPegawai', [
            'title' => 'Tambah Data Pegawai',
            'dataNotifikasiUnchecked' => Notifikasi::where('checked', 0)->get(),
            'dataNotifikasi' => Notifikasi::latest()->get()
        ]);
    }

    public function dataPegawaiStore(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'whatsapp' => 'required|max:255',
        ]);

        DataPegawai::create($validatedData);

        return redirect('/dashboard/data-pegawai')->with('success', 'Data berhasil ditambahkan !');
    }

    public function dataPegawaiDestroy($pegawai_id) {
        $dataPegawai = DataPegawai::where('id', $pegawai_id);
        $dataPegawai->delete();
        return redirect('/dashboard/data-pegawai')->with('success', 'Data berhasil dihapus !');
    }

    public function dataSuhuPengunjung() {
        return view('dashboard.tablesSuhuPengunjung', [
            'title' => 'Data Suhu Pengunjung',
            'dataNotifikasiUnchecked' => Notifikasi::where('checked', 0)->get(),
            'dataNotifikasi' => Notifikasi::latest()->get(),
            'dataSuhu' => SuhuPengunjung::all()
        ]);
    }

    public function tablesUjiSample() {
        return view('dashboard.tablesUjiSample', [
            'title' => 'Data Pengantaran Sample',
            'samples' => Sampleuji::all(),
            'dataNotifikasiUnchecked' => Notifikasi::where('checked', 0)->get(),
            'dataNotifikasi' => Notifikasi::latest()->get()
        ]);
    }

    public function tablesKonsulKunjungan() {
        return view('dashboard.tablesKonsulKunjungan', [
            'title' => 'Data Konsultasi / Kunjungan',
            'konsuls' => KonsulKunjungan::all(),
            'dataNotifikasiUnchecked' => Notifikasi::where('checked', 0)->get(),
            'dataNotifikasi' => Notifikasi::latest()->get()
        ]);
    }

    public function tablesUlasan() {
        return view('dashboard.tablesUlasan', [
            'title' => 'Data Ulasan',
            'ulasans' => Ulasan::all(),
            'dataNotifikasiUnchecked' => Notifikasi::where('checked', 0)->get(),
            'dataNotifikasi' => Notifikasi::latest()->get()
        ]);
    }

    public function profile() {
        return view('dashboard.profile', [
            'title' => 'My Profile',
            'dataNotifikasiUnchecked' => Notifikasi::where('checked', 0)->get(),
            'dataNotifikasi' => Notifikasi::latest()->get()
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

    public function notifikasiIndex() {
        return view('dashboard.notifikasi', [
            'title' => 'Notifikasi',
            'dataNotifikasiUnchecked' => Notifikasi::where('checked', 0)->get(),
            'dataNotifikasi' => Notifikasi::latest()->get()
        ]);
    }
}