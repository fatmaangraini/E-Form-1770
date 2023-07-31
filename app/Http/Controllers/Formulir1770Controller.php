<?php

namespace App\Http\Controllers;

use App\Models\FormSpt;
use App\Models\Formulir1770;
use App\Models\Formulir1770_Detail;
use Illuminate\Http\Request;

class Formulir1770Controller extends Controller
{
    public function ttd(Request $request,$id){
        $data = Formulir1770::find($id);

        if($request->hasfile('tanda_tangan')){
            $request->file('tanda_tangan')->move('ttdPHMT/', $request->file('tanda_tangan')->getClientOriginalName());
            $data->tanda_tangan = $request->file('tanda_tangan')->getClientOriginalName();
        }
        
        $data->save();
        return redirect('formulir1770/' . $data->id)->with('success', 'Data Berhasil Tersimpan');

    }
    public function store(Request $request,$id)
    {
        Formulir1770_Detail::where('formulir1770_id',$id)->delete();
        $lastform = Formulir1770::find($id);
        $lastform->tanggal_lunas = $request->tanggal_lunas;
        $lastform->tanggal_lampiran = $request->tanggal_lampiran;
        $lastform->save();
        $data = [
            [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 1,
                'rupiah_daftar_poin' => $request->poin1770[0],
            ],
            [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 2,
                'rupiah_daftar_poin' => $request->poin1770[1],
            ],
            [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 3,
                'rupiah_daftar_poin' => $request->poin1770[2],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 4,
                'rupiah_daftar_poin' => $request->poin1770[3],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 5,
                'rupiah_daftar_poin' => $request->poin1770[4],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 6,
                'rupiah_daftar_poin' => $request->poin1770[5],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 7,
                'rupiah_daftar_poin' => $request->poin1770[6],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 8,
                'rupiah_daftar_poin' => $request->poin1770[7],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 9,
                'rupiah_daftar_poin' => $request->poin1770[8],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 10,
                'rupiah_daftar_poin' => $request->poin1770[9],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 11,
                'rupiah_daftar_poin' => $request->poin1770[10],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 12,
                'rupiah_daftar_poin' => $request->poin1770[11],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 13,
                'rupiah_daftar_poin' => $request->poin1770[12],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 14,
                'rupiah_daftar_poin' => $request->poin1770[13],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 15,
                'rupiah_daftar_poin' => $request->poin1770[14],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 16,
                'rupiah_daftar_poin' => $request->poin1770[15],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 17,
                'rupiah_daftar_poin' => $request->poin1770[16],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 18,
                'rupiah_daftar_poin' => $request->poin1770[17],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 19,
                'rupiah_daftar_poin' => $request->poin1770[18],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 20,
                'rupiah_daftar_poin' => $request->poin1770[19],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 21,
                'rupiah_daftar_poin' => $request->poin1770[20],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 22,
                'rupiah_daftar_poin' => $request->poin1770[21],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 23,
                'rupiah_daftar_poin' => $request->poin1770[22],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 24,
                'rupiah_daftar_poin' => $request->poin1770[23] ?? 0,
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 25,
                'rupiah_daftar_poin' => $request->poin1770[24] ?? 0,
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 26,
                'rupiah_daftar_poin' => $request->poin1770[25],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 27,
                'rupiah_daftar_poin' => $request->poin1770[26],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 28,
                'rupiah_daftar_poin' => $request->poin1770[27],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 29,
                'rupiah_daftar_poin' => $request->poin1770[28],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 30,
                'rupiah_daftar_poin' => $request->poin1770[29],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 31,
                'rupiah_daftar_poin' => $request->poin1770[30],
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 32,
                'rupiah_daftar_poin' => $request->poin1770[31]
            ], [
                'formulir1770_id' => $lastform->id,
                'formulir1770_point' => 33,
                'rupiah_daftar_poin' => $request->poin1770[32] ?? 0,
            ],
        ];
        $status = 'Nihil';
        $jumlah = 0;
        // dd((int) str_replace(",","",$request->poin1770[13]), (int) str_replace(",","",$request->poin1770[18]));
        // return response()->json([
        //     '13' => (int) str_replace(",","",$request->poin1770[13]),
        //     '18' => (int) str_replace(",","",$request->poin1770[18])
        // ], 200);
        if ((int) str_replace(",","",$request->poin1770[13]) < (int) str_replace(",","",$request->poin1770[18])) {
            $status = 'Lebih Bayar';
        }
        if ((int) str_replace(",","",$request->poin1770[13]) > (int) str_replace(",","",$request->poin1770[18])) {
            $status = 'Kurang Bayar';
        }
 
        $pointdetail1770 = new Formulir1770_Detail;
        $pointdetail1770->insert($data);
        $formspt = FormSpt::find($request->formsptid);
        $formspt->status = $status;
        $formspt->jumlah = $request->jumlah;
        $formspt->save();
        return response()->json('berhasil', 200);
    }

    public function delete()
    {
        $lastId = Formulir1770::orderBy('id', 'desc')->first();
        $formulir_1770 = Formulir1770_Detail::where('formulir1770_id', $lastId->id);
        $formulir_1770->delete();
        return response()->json('berhasil', 200);
    }
}
