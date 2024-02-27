<?php

namespace App\Exports;

use App\Models\Ulasan;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportUlasan implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = Ulasan::orderBy('created_at', 'asc')->get();
        return view('dashboard.exportTable.ulasan', [
            'dataUlasan' => $data
        ]);
    }
}