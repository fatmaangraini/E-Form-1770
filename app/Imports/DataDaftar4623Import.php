<?php

namespace App\Imports;

use App\Models\pp46danpp23;
use App\Models\Datapp46danpp23;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class DataDaftar4623Import implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (!empty($row[0]) && !empty($row[1]) && !empty($row[2]) && !empty($row[3])) {
            $lastform = pp46danpp23::orderBy('id', 'desc')->first();
            return Datapp46danpp23::updateOrCreate(
                [
                    'pp46danpp23_id' => $lastform->id,
                    'npwp' =>  preg_replace("/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/", "$1.$2.$3.$4-$5.$6", $row[0]),
                    'masa_pajak' => $row[1],
                    'alamat' => $row[2],
                    'peredaran_bruto' => $row[3],
                    'jumlahPPhFinal_dibayar' => ($row[3] * 0.005),
                ]
            );
        }
    }
    public function startRow(): int
    {
        return 2;
    }
}
