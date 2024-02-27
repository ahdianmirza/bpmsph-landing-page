<?php

namespace App\Exports;

use App\Models\SuhuPengunjung;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportSuhu implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = SuhuPengunjung::orderBy('created_at', 'asc')->get();
        return view('dashboard.exportTable.dataSuhu', [
            'dataSuhu' => $data
        ]);
    }
}