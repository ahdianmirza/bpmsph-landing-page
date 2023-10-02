<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SubmitAlert;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function submitKonsul() {
        return SubmitAlert::first();
    }

    public function postSubmitKonsul() {
        $data_post = request()->all();
        $data = SubmitAlert::firstWhere('id', '1')->update([
            'submitKonsul' => $data_post['submitKonsul']
        ]);

        // return response()->json($data);
    }

    public function postNomorAntrian() {
        $data_post = request()->all();
        $data = SubmitAlert::firstWhere('id', '1')->update([
            'submitKonsul' => $data_post['submitKonsul']
        ]);

        // return response()->json($data);
    }
}