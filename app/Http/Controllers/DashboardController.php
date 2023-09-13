<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sampleuji;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function tablesIndex() {
        return view('dashboard.tablesUjiSample', [
            'title' => 'Tables / Data',
            'samples' => Sampleuji::all()
        ]);
    }
}