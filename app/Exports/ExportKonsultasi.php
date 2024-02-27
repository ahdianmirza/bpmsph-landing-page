<?php

namespace App\Exports;

use App\Models\KonsulKunjungan;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportKonsultasi implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = KonsulKunjungan::orderBy('created_at', 'asc')->get();
        return view('dashboard.exportTable.konsultasiKunjungan', [
            'dataKonsul' => $data
        ]);
    }
}