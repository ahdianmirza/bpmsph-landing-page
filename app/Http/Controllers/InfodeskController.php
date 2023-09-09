<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfodeskController extends Controller
{
    public function index() {
        return view('infodesk', [
            'title' => 'INFODESK'
        ]);
    }
}