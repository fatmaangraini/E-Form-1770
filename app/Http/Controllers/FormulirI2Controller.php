<?php

namespace App\Http\Controllers;

use App\Models\FormulirI2;
use App\Models\FormulirI2B_Detail;
use App\Models\FormulirI2D_Detail;
use Illuminate\Http\Request;

class FormulirI2Controller extends Controller
{
    public function store(Request $request, $id)
    {
        FormulirI2B_Detail::where('formuliri2_id',$id)->delete();
        $lastform = FormulirI2::find($id);

        $data = [
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2b_point' => 1,
                'rupiah_peredaran_usahaB' => $request->PeredaranUsahaB[0],
                'norma' => $request->Norma[0] ? $request->Norma[0] : '0',
                'rupiah_penghasilan_netoB' => $request->PenghasilanNetoB[0] ? $request->PenghasilanNetoB[0] : '0',
            ],
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2b_point' => 2,
                'rupiah_peredaran_usahaB' => $request->PeredaranUsahaB[1],
                'norma' => $request->Norma[1] ? $request->Norma[1] : '0',
                'rupiah_penghasilan_netoB' => $request->PenghasilanNetoB[1] ? $request->PenghasilanNetoB[1] : '0',
            ],
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2b_point' => 3,
                'rupiah_peredaran_usahaB' => $request->PeredaranUsahaB[2],
                'norma' => $request->Norma[2] ? $request->Norma[2] : '0',
                'rupiah_penghasilan_netoB' => $request->PenghasilanNetoB[2] ? $request->PenghasilanNetoB[2] : '0',
            ],
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2b_point' => 4,
                'rupiah_peredaran_usahaB' => $request->PeredaranUsahaB[3],
                'norma' => $request->Norma[3] ? $request->Norma[3] : '0',
                'rupiah_penghasilan_netoB' => $request->PenghasilanNetoB[3] ? $request->PenghasilanNetoB[3] : '0',
            ],
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2b_point' => 5,
                'rupiah_peredaran_usahaB' => $request->PeredaranUsahaB[4],
                'norma' => $request->Norma[4] ? $request->Norma[4] : '0',
                'rupiah_penghasilan_netoB' => $request->PenghasilanNetoB[4] ? $request->PenghasilanNetoB[4] : '0',
            ],
        ];
        $i2bpointdetail = new FormulirI2B_Detail;
        $i2bpointdetail->insert($data);
        return response()->json('berhasil', 200);
    }

    public function delete($id)
    {
       FormulirI2B_Detail::where('formuliri2_id',$id)->delete();
        return response()->json('berhasil', 200);
    }
    
    public function store3(Request $request,$id)
    {
        FormulirI2D_Detail::where('formuliri2_id',$id)->delete();
        $lastform = FormulirI2::find($id);

        $data = [
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2d_point' => 1,
                'rupiah_penghasilan_netoD' => $request->PenghasilanNetoD[0],
            ],
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2d_point' => 2,
                'rupiah_penghasilan_netoD' => $request->PenghasilanNetoD[1],
            ],
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2d_point' => 3,
                'rupiah_penghasilan_netoD' => $request->PenghasilanNetoD[2],
            ],
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2d_point' => 4,
                'rupiah_penghasilan_netoD' => $request->PenghasilanNetoD[3],
            ],
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2d_point' => 5,
                'rupiah_penghasilan_netoD' => $request->PenghasilanNetoD[4],
            ],
            [
                'formuliri2_id' => $lastform->id,
                'formuliri2d_point' => 6,
                'rupiah_penghasilan_netoD' => $request->PenghasilanNetoD[5],
            ],
        ];
        $i2dpointdetail = new FormulirI2D_Detail();
        $i2dpointdetail->insert($data);
        return response()->json('berhasil', 200);
    }

    public function delete3($id)
    {
       FormulirI2D_Detail::where('formuliri2_id',$id)->delete();
        return response()->json('berhasil', 200);
    }

}
