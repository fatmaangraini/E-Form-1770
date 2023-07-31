<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKel;
use App\Models\FormulirIV;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DataKelController extends Controller
{
    public function store(Request $request)
    {
        $lastform = FormulirIV::orderBy('id', 'desc')->first();

        $datakel = new DataKel();
        $datakel->formuliriv_id = $lastform->id;
        $datakel->nama_anggota_kel = $request->nama_anggota_kel;
        $datakel->nik = $request->nik;
        $datakel->hubungan = $request->hubungan;
        $datakel->pekerjaan = $request->pekerjaan;
        $datakel->save();
        return response()->json('berhasil', 200);
    }

    public function delete(Request $request)
    {
        // $lastId = DataKel::orderBy('id', 'desc')->first();
        // $datakel = DataKel::find($lastId->id);
        // $datakel->delete();
        // return response()->json('berhasil', 200);
        $delete = DataKel::whereIn('id',$request->checkedValues)->delete();
        if($delete){
            return response()->json("berhasil", 200);
        }
        else{
            return response()->json("gagal", 200);
        }
    }

    public function save(Request $request, $id)
    {
        $nik_pattern = '/^\d{16}$/';

        $i = 0;
        $data = [];
        DataKel::where('formuliriv_id', $id)->delete();
        $lastform = FormulirIV::find($id);

        // if ((int) $request->counted > 0) {
        //     $i = (int) $request->counted;
        // }
        $count_err = 0;
        for ($i = 0; $i < count($request->nama_anggota_kel); $i++) {
            if (preg_match($nik_pattern, $request->nik[$i])) {
                $tmp = [
                    'formuliriv_id' => $request->form4_id,
                    'nama_anggota_kel' => $request->nama_anggota_kel[$i],
                    'nik' => $request->nik[$i],
                    'hubungan' => $request->hubungan[$i],
                    'pekerjaan' => $request->pekerjaan[$i],
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ];
                array_push($data, $tmp);
            } else {
                $count_err += 1;
            }
        }
        if (count($data) > 0) {
            $datakel = DataKel::insert($data);
        }
        if($count_err > 0){
        return redirect('formulir-IV/'.$request->formspt)->with('success', "$count_err Data tidak sesuai format NIK");
    }
        // dd($data);
        return redirect('formulir-IV/' . $request->formspt)->with('success', 'Data Berhasil Tersimpan');
    }
}
