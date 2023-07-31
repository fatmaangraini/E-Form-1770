<?php

namespace App\Imports;

use App\Models\FormulirII;
use App\Models\DataPotongPungut;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class DataPotongPungutImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $lastform = FormulirII::orderBy('id', 'desc')->first();
        return DataPotongPungut::updateOrCreate(
            [
            'formulirii_id' => $lastform->id,
            'nama_pemotong' => $row[1],
            'npwp_pemotong' =>  preg_replace("/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/","$1.$2.$3.$4-$5.$6",$row[2]),
            'nomor_bupot' => $row[3],
            'tgl_bupot' =>date('Y-m-d', strtotime(str_replace("/","-",$row[4]))) ,
            'jenis_pajak' => $row[5],
            'jumlahPPh_potong' => $row[6],

        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}