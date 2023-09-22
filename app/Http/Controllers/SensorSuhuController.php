<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SensorSuhu;

class SensorSuhuController extends Controller
{
    public function bacasuhu() {
        $data = SensorSuhu::all();
        return response()->json($data);
        
        // $sensor = SensorSuhu::all();
        // return view('sensor.bacasuhu', [
        //     'suhus' => $sensor
        // ]);
    }
}