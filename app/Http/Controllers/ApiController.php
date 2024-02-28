<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Antrian;
use App\Models\DataPegawai;
use App\Models\KonsulKunjungan;
use App\Models\NomorAntrian;
use App\Models\Posisi;
use App\Models\Sampleuji;
use App\Models\SensorSuhu;
use App\Models\SubmitAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function getSubmit() {
        $dataSubmit = SubmitAlert::first();
        return response()->json($dataSubmit);
    }

    public function postSubmit() {
        $data_post = request()->all();
        $data = SubmitAlert::firstWhere('id', '1')->update([
            'submitKonsul' => $data_post['submitKonsul']
        ]);
        return response()->json($data);
    }

    public function postNomorAntrian() {
        $data_post = request()->all();
        $dataAntrian = NomorAntrian::firstWhere('id', '1')->update([
            'nomorAntrian' => $data_post['nomorAntrian']
        ]);
        return response()->json($dataAntrian);
    }

    public function getNomorAntrian() {
        $dataAntrian = NomorAntrian::all();
        return response()->json($dataAntrian);
    }

    public function getSuhu() {
        $dataSuhu = SensorSuhu::all();
        return response()->json($dataSuhu);
    }

    public function postSuhu() {
        $data_post = request()->all();
        $dataSuhu = SensorSuhu::firstWhere('id', '1')->update([
            'suhu' => $data_post['suhu']
        ]);
        return response()->json($dataSuhu);
    }

    public function postPosisi() {
        $data_post = request()->all();
        $dataPosisi = Posisi::firstWhere('id', '1')->update([
            'posisi' => $data_post['posisi']
        ]);
        return response()->json($dataPosisi);
    }

    public function getPosisi() {
        $dataPosisi = Posisi::firstWhere('id', '1');
        return response()->json($dataPosisi);
    }


    public function getAntrian() {
        $dataAntrian = Antrian::all();
        return response()->json($dataAntrian);
    }

    public function getDataPegawai() {
        $dataNomorPegawai = DataPegawai::all();
        return response()->json($dataNomorPegawai);
    }

    public function getAntrianProses() {
        $antrianProses = Antrian::firstWhere('status', 'proses');
        return response()->json($antrianProses);
    }

    public function getTotalVisitorsPerWeek() {
        $data = DB::table('total_visitors_per_week')->orderBy(DB::raw('visitors_date'))->get();
        return response()->json($data);
    }

    public function getTotalKonsulSample() {
        $totalTamu = KonsulKunjungan::select(DB::raw('count(id) as total_tamu'))->get();
        $totalSample = Sampleuji::select(DB::raw('count(id) as total_sample'))->get();
        return response()->json([
            'total_tamu' => $totalTamu,
            'total_sample' => $totalSample
        ]);
    }
}