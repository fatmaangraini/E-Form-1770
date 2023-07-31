<?php

namespace App\Imports;

use App\Models\DataHarta;
use App\Models\FormulirIV;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class DataHartaImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Validasi kolom tidak boleh kosong
        if (empty($row[0]) || empty($row[1]) || empty($row[2]) || empty($row[3]) || empty($row[4])) {
            throw new \Exception('Data kolom tidak lengkap');
        }
        // Memeriksa apakah data pada indeks 0 sesuai dengan opsi yang diinginkan
        // $allowedOptions = ['011', '012', '013'];
        // if (!in_array($row[0], $allowedOptions)) {
        //     throw new \Exception('Data pada indeks 0 tidak sesuai dengan opsi yang diinginkan');
        // }

        $lastform = FormulirIV::orderBy('id', 'desc')->first();
        // return new DataHarta([
        //     'formuliriv_id' => $lastform->id,
        //     'kode_harta' => $row[0],
        //     'nama_harta' => $row[1],
        //     'tahun_perolehan' => $row[2],
        //     'harta_perolehan' => $row[3],
        //     'keterangan' => $row[4],
        // ]);

        return DataHarta::updateOrCreate(
            [
                'kode_harta' => $row[0],
                'tahun_perolehan' => $row[2],
                'formuliriv_id' => $lastform->id,
                'nama_harta' => $row[1],
                'harta_perolehan' => $row[3],
                'keterangan' => $row[4],
            ]
        );
    }
    public function startRow(): int
    {
        return 2;
    }
}
