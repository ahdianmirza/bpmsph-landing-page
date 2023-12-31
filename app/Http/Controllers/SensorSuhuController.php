<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NomorAntrian;
use Illuminate\Http\Request;
use App\Models\SensorSuhu;

class SensorSuhuController extends Controller
{
    public function bacasuhu() {
        $data = SensorSuhu::latest()->get();
        return response()->json($data);
        
        // $data = request()->all();
        // return response()->json($data);
        
        // $sensor = SensorSuhu::all();
        // return view('sensor.bacasuhu', [
        //     'suhus' => $sensor
        // ]);
    }

    public function simpansuhu() {
        SensorSuhu::where('id', '1')->update([
            'suhu' => request()->suhu
        ]);
    }

    public function nomorAntrian() {
        $data = NomorAntrian::latest()->get();
        return response()->json($data);
        
        // $data = request()->all();
        // return response()->json($data);
        
        // $sensor = SensorSuhu::all();
        // return view('sensor.bacasuhu', [
        //     'suhus' => $sensor
        // ]);
    }

    public function simpanNomorAntrian() {
        NomorAntrian::where('id', '1')->update([
            'suhu' => request()->nomorAntrian
        ]);
    }
}