<?php

namespace App\Http\Controllers;

use App\Models\FormulirIII;
use Illuminate\Http\Request;
use App\Models\FormulirIIIA_Detail;
use App\Models\FormulirIIIB_Detail;
use App\Models\FormulirIIIC_Detail;


class FormulirIIIController extends Controller
{
    public function delete($id)
    {
        FormulirIIIA_Detail::where('formulirIII_id',$id)->delete();
       
        return response()->json('berhasil', 200);
    }
    public function store(Request $request,$id)
    {
            FormulirIIIA_Detail::where('formulirIII_id',$id)->delete();
            $lastform = FormulirIII::find($id);

            $data = [
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 1,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[0],
                    'rupiah_PPh_terutang' => $request->pphterutang[0] ? $request->pphterutang[0] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 2,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[1],
                    'rupiah_PPh_terutang' => $request->pphterutang[1] ? $request->pphterutang[1] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 3,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[2],
                    'rupiah_PPh_terutang' => $request->pphterutang[2] ? $request->pphterutang[2] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 4,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[3],
                    'rupiah_PPh_terutang' => $request->pphterutang[3] ? $request->pphterutang[3] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 5,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[4],
                    'rupiah_PPh_terutang' => $request->pphterutang[4] ? $request->pphterutang[4] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 6,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[5],
                    'rupiah_PPh_terutang' => $request->pphterutang[5] ? $request->pphterutang[5] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 7,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[6],
                    'rupiah_PPh_terutang' => $request->pphterutang[6] ? $request->pphterutang[6] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 8,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[7],
                    'rupiah_PPh_terutang' => $request->pphterutang[7] ? $request->pphterutang[7] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 9,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[8],
                    'rupiah_PPh_terutang' => $request->pphterutang[8] ? $request->pphterutang[8] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 10,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[9],
                    'rupiah_PPh_terutang' => $request->pphterutang[9] ? $request->pphterutang[9] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 11,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[10],
                    'rupiah_PPh_terutang' => $request->pphterutang[10] ? $request->pphterutang[10] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 12,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[11],
                    'rupiah_PPh_terutang' => $request->pphterutang[11] ? $request->pphterutang[11] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 13,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[12],
                    'rupiah_PPh_terutang' => $request->pphterutang[12] ? $request->pphterutang[12] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 14,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[13],
                    'rupiah_PPh_terutang' => $request->pphterutang[13] ? $request->pphterutang[13] : '0',
                ],
                [
                    'formulirIII_id' => $lastform->id,
                    'formulirIIIA_point' => 15,
                    'rupiah_dsrPengenaan_PajakA' => $request->pengenaan[14],
                    'rupiah_PPh_terutang' => $request->pphterutang[14] ? $request->pphterutang[14] : '0',
                ],
            ];
            $iiiapointdetail = new FormulirIIIA_Detail;
            $iiiapointdetail->insert($data);
            return response()->json(['berhasil update'], 200);
        
    }

    public function store2(Request $request,$id)
    {
        FormulirIIIB_Detail::where('formulirIII_id',$id)->delete();
        $lastform = FormulirIII::find($id);
       
        $data = [
            [
                'formulirIII_id' => $lastform->id,
                'formulirIIIB_point' => 1,
                'rupiah_dsrPengenaan_PajakB' => $request->bantuansumbanganhibah[0],
            ],
            [
                'formulirIII_id' => $lastform->id,
                'formulirIIIB_point' => 2,
                'rupiah_dsrPengenaan_PajakB' => $request->bantuansumbanganhibah[1],
            ],
            [
                'formulirIII_id' => $lastform->id,
                'formulirIIIB_point' => 3,
                'rupiah_dsrPengenaan_PajakB' => $request->bantuansumbanganhibah[2],
            ],
            [
                'formulirIII_id' => $lastform->id,
                'formulirIIIB_point' => 4,
                'rupiah_dsrPengenaan_PajakB' => $request->bantuansumbanganhibah[3],
            ],
            [
                'formulirIII_id' => $lastform->id,
                'formulirIIIB_point' => 5,
                'rupiah_dsrPengenaan_PajakB' => $request->bantuansumbanganhibah[4],
            ],
            [
                'formulirIII_id' => $lastform->id,
                'formulirIIIB_point' => 6,
                'rupiah_dsrPengenaan_PajakB' => $request->bantuansumbanganhibah[5],
            ],
        ];
        $iiibpointdetail = new FormulirIIIB_Detail;
        $iiibpointdetail->insert($data);
        return response()->json('berhasil', 200);
    }

    public function delete2($id)
    {
        FormulirIIIB_Detail::where('formulirIII_id',$id)->delete();

        return response()->json('berhasil', 200);
    }
    public function store3(Request $request,$id)
    {
        FormulirIIIB_Detail::where('formulirIII_id',$id)->delete();
        $lastform = FormulirIII::find($id);

        $data = [
            [
                'formulirIII_id' => $lastform->id,
                'formulirIIIC_point' => 1,
                'rupiah_dsrPengenaan_PajakC' => $request->pajak_terpisah,
            ],
        ];
        $iiicpointdetail = new FormulirIIIC_Detail;
        $iiicpointdetail->insert($data);
        return response()->json('berhasil', 200);
    }

    public function delete3($id)
    {
        FormulirIIIC_Detail::where('formulirIII_id',$id)->delete();

        return response()->json('berhasil', 200);
    }
}
