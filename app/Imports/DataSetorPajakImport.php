<?php

namespace App\Imports;

use App\Models\DataSubmit;
use App\Models\kodeMap;
use App\Models\kodeSetor;
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
        if (!empty($row[0]) && !empty($row[1]) && !empty($row[2]) && !empty($row[3]) && !empty($row[4])) {
            $lastform = submitFile::orderBy('id', 'desc')->first();
            $kdmap = kodeMap::where('akun_pajak', $row[0])->get();
            $kdsetor = kodeSetor::where(['akun_pajak_id' => $kdmap[0]->id, 'jenis_setor' => $row[1]])->get();
            //  dd(response()->json(,200));        
            return DataSubmit::updateOrCreate([
                'submit_id' => $lastform->id,
                'kode_map' => $kdmap[0]->id,
                'kode_setor' => $kdsetor[0]->id,
                'tanggal_spp_pbk' => date('Y-m-d', strtotime(str_replace("/", "-", $row[2]))),
                'nilai_spp_pbk' => $row[3],
                'ntpn_pbk' => $row[4],
            ]);
        }
    }
    public function startRow(): int
    {
        return 2;
    }
}
