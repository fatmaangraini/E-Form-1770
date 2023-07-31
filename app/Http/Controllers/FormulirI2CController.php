<?php

namespace App\Http\Controllers;

use App\Models\FormulirI2;
use App\Models\FormulirI2C;
use Illuminate\Http\Request;

class FormulirI2CController extends Controller
{
    public function store (Request $request){
        $lastform = FormulirI2::orderBy('id', 'desc')->first();

        $formI2C = new FormulirI2C();
        $formI2C->formuliri2_id = $lastform->id;
        $formI2C->npwp_pemberi_kerja = $request->npwp_pemberi_kerja;
        $formI2C->nama_pemberi_kerja = $request->nama_pemberi_kerja;
        $formI2C->penghasilan_bruto = $request->penghasilan_bruto;
        $formI2C->pengurangan_penghasilan_bruto = $request->pengurangan_penghasilan_bruto;
        $formI2C->penghasilan_neto = $request->penghasilan_neto;
        $formI2C->save();
        return response()->json('berhasil',200);
    }

    public function delete(Request $request){
        // $lastId = FormulirI2C::orderBy('id','desc')->first();
        // $formI2C = FormulirI2C::find($lastId->id);
        // $formI2C->delete();
        // return response()->json('berhasil',200);
        $delete = FormulirI2C::whereIn('id',$request->checkedValues)->delete();
        if($delete){
            return response()->json("berhasil", 200);
        }
        else{
            return response()->json("gagal", 200);
        }
    }

    public function save(Request $request){
        $i = 0;
        $data = [];
        $lastform = FormulirI2::orderBy('id', 'desc')->first();

        if ((int) $request->counted > 0) {
            $i = (int) $request->counted;
        }
        for ($i; $i < count($request->npwp_pemberi_kerja); $i++) {
            $tmp = [
                'formuliri2_id' => $request->form1_2_id ,
                'npwp_pemberi_kerja' => $request->npwp_pemberi_kerja[$i],
                'nama_pemberi_kerja' => $request->nama_pemberi_kerja[$i],
                'penghasilan_bruto' => $request->penghasilan_bruto[$i],
                'pengurangan_penghasilan_bruto' => $request->pengurangan_penghasilan_bruto[$i],
                'penghasilan_neto' => $request->penghasilan_neto[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ];
            array_push($data, $tmp);
        }
        if (count($data) > 0) {
            $datakel = FormulirI2C::insert($data);
        }
        // dd($data);
        return redirect('formulir-I hal 2/'.$request->formspt)->with('success', 'Data Berhasil Tersimpan');
    }
}

