<?php

namespace App\Imports;

use App\Models\DataSubmit;
use App\Models\submitFile;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class DataSetorPajakImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $lastform = submitFile::orderBy('id', 'desc')->first();        
        return DataSubmit::updateOrCreate([
            'submit_id' => $lastform->id,
            'kode_map' => $row[0],
            'kode_setor' => $row[1],
            'tanggal_spp_pbk' => date('Y-m-d', strtotime(str_replace("/","-",$row[2]))),
            'nilai_spp_pbk' => $row[3],
            'ntpn_pbk' => $row[4],
        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}
