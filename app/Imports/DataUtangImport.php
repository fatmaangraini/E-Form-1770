<?php

namespace App\Imports;

use App\Models\FormulirIV;
use App\Models\DataUtang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class DataUtangImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (!empty($row[0]) && !empty($row[1]) && !empty($row[2]) && !empty($row[3]) && !empty($row[4])) {
            $lastform = FormulirIV::orderBy('id', 'desc')->first();
            // dd($lastform->id);
            return DataUtang::updateOrCreate(
                [
                    'formuliriv_id' => $lastform->id,
                    'kode_utang' => $row[0],
                    'nama_pemberi_pinjaman' => $row[1],
                    'alamat_pemberi_pinjaman' => $row[2],
                    'tahun_pinjaman' => $row[3],
                    'jumlah_pinjaman' => $row[4],
                ]
            );
        }
    }
    public function startRow(): int
    {
        return 2;
    }
}
