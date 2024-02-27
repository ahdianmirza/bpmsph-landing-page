<?php

namespace App\Exports;

use App\Models\Sampleuji;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportSample implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = Sampleuji::orderBy('created_at', 'asc')->get();
        return view('dashboard.exportTable.sample', [
            'dataSample' => $data
        ]);
    }
}