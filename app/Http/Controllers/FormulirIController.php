<?php

namespace App\Http\Controllers;

use App\Models\FormulirI;
use App\Models\FormulirI_Detail;
use Illuminate\Http\Request;

class FormulirIController extends Controller
{
    public function store(Request $request, $id)
    {
        FormulirI_Detail::where('formuliri_id', $id)->delete();
        $lastform = FormulirI::find($id);

        $data = [
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 1,
                'rupiah_JenisPenghasilan' => $request->penghasilan[0],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 2,
                'rupiah_JenisPenghasilan' => $request->penghasilan[1],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 3,
                'rupiah_JenisPenghasilan' => $request->penghasilan[2],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 4,
                'rupiah_JenisPenghasilan' => $request->penghasilan[3],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 5,
                'rupiah_JenisPenghasilan' => $request->penghasilan[4],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 6,
                'rupiah_JenisPenghasilan' => $request->penghasilan[5],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 7,
                'rupiah_JenisPenghasilan' => $request->penghasilan[6],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 8,
                'rupiah_JenisPenghasilan' => $request->penghasilan[7],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 9,
                'rupiah_JenisPenghasilan' => $request->penghasilan[8],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 10,
                'rupiah_JenisPenghasilan' => $request->penghasilan[9],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 11,
                'rupiah_JenisPenghasilan' => $request->penghasilan[10],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 12,
                'rupiah_JenisPenghasilan' => $request->penghasilan[11],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 13,
                'rupiah_JenisPenghasilan' => $request->penghasilan[12],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 14,
                'rupiah_JenisPenghasilan' => $request->penghasilan[13],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 15,
                'rupiah_JenisPenghasilan' => $request->penghasilan[14],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 16,
                'rupiah_JenisPenghasilan' => $request->penghasilan[15],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 17,
                'rupiah_JenisPenghasilan' => $request->penghasilan[16],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 18,
                'rupiah_JenisPenghasilan' => $request->penghasilan[17],
            ], [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 19,
                'rupiah_JenisPenghasilan' => $request->penghasilan[18],
            ], [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 20,
                'rupiah_JenisPenghasilan' => $request->penghasilan[19],
            ], [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 21,
                'rupiah_JenisPenghasilan' => $request->penghasilan[20],
            ],
            [
                'formuliri_id' => $lastform->id,
                'formuliri_point' => 22,
                'rupiah_JenisPenghasilan' => $request->penghasilan[21],
            ],
        ];

        $ipointdetail = new FormulirI_Detail;
        $ipointdetail->insert($data);
        return response()->json('berhasil', 200);
    }

    public function delete($id)
    {
        FormulirI_Detail::where('formuliri_id', $id)->delete();

        return response()->json('berhasil', 200);
    }
}
