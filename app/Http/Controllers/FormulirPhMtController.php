<?php

namespace App\Http\Controllers;

use App\Models\formulirPhMt;
use App\Models\PhMtDetail;
use App\Models\PhMtDetail2;
use App\Models\PhMtDetail3;
use Illuminate\Http\Request;

class FormulirPhMtController extends Controller
{
    public function ttd(Request $request,$id){
        $data = formulirPhMt::find($id);

        if($request->hasfile('ttd1')){
            $request->file('ttd1')->move('ttdPHMT/', $request->file('ttd1')->getClientOriginalName());
            $data->ttd1 = $request->file('ttd1')->getClientOriginalName();
        }
        if($request->hasfile('ttd2')){
            $request->file('ttd2')->move('ttdPHMT/', $request->file('ttd2')->getClientOriginalName());
            $data->ttd2 = $request->file('ttd2')->getClientOriginalName();
        }
        
        $data->save();
        return redirect('PH-MT/' . $request->formspt)->with('success', 'Data Berhasil Tersimpan');
    }
    public function store(Request $request, $id)
    {
        PhMtDetail::where('PhMt_id', $id)->delete();
        $lastform = formulirPhMt::find($id);
        $lastform->tanggal_phmt = $request->tanggal_phmt;
        $lastform->nama_PHMT = $request->nama_PHMT;
        $lastform->npwp_PHMT = $request->npwp_PHMT;
        $lastform->save();

        $data = [
            [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 1,
                'rupiah_PengNeto1' => $request->PengNeto1[0],
                'rupiah_PengNeto2' => $request->PengNeto2[0],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 2,
                'rupiah_PengNeto1' => $request->PengNeto1[1],
                'rupiah_PengNeto2' => $request->PengNeto2[1],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 3,
                'rupiah_PengNeto1' => $request->PengNeto1[2],
                'rupiah_PengNeto2' => $request->PengNeto2[2],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 4,
                'rupiah_PengNeto1' => $request->PengNeto1[3],
                'rupiah_PengNeto2' => $request->PengNeto2[3],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 5,
                'rupiah_PengNeto1' => $request->PengNeto1[4],
                'rupiah_PengNeto2' => $request->PengNeto2[4],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 6,
                'rupiah_PengNeto1' => $request->PengNeto1[5],
                'rupiah_PengNeto2' => $request->PengNeto2[5],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 7,
                'rupiah_PengNeto1' => $request->PengNeto1[6],
                'rupiah_PengNeto2' => $request->PengNeto2[6],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 8,
                'rupiah_PengNeto1' => $request->PengNeto1[7],
                'rupiah_PengNeto2' => $request->PengNeto2[7],
            ]
        ];
        $phmtpointdetail = new PhMtDetail;
        $phmtpointdetail->insert($data);
        return response()->json(['berhasil'], 200);
    }

    public function store2(Request $request, $id)
    {
        PhMtDetail2::where('PhMt_id', $id)->delete();
        $lastform = formulirPhMt::find($id);

        $data = [
            [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 1,
                'nilai_rupiah' => $request->NilaiRupiah[0],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 2,
                'nilai_rupiah' => $request->NilaiRupiah[1],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 3,
                'nilai_rupiah' => $request->NilaiRupiah[2],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 4,
                'nilai_rupiah' => $request->NilaiRupiah[3],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 5,
                'nilai_rupiah' => $request->NilaiRupiah[4],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 6,
                'nilai_rupiah' => $request->NilaiRupiah[5],
            ],
        ];
        $phmt2pointdetail = new PhMtDetail2;
        $phmt2pointdetail->insert($data);
        return response()->json(['berhasil'], 200);
    }

    public function store3(Request $request, $id)
    {
        PhMtDetail3::where('PhMt_id', $id)->delete();
        $lastform = formulirPhMt::find($id);

        $data = [
            [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 1,
                'PPhTerutang' => $request->PPhTerutang[0],
                'hasil_PPhTerutang' => $request->HasilPPhTerutang[0],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 2,
                'PPhTerutang' => $request->PPhTerutang[1],
                'hasil_PPhTerutang' => $request->HasilPPhTerutang[1],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 3,
                'PPhTerutang' => $request->PPhTerutang[2],
                'hasil_PPhTerutang' => $request->HasilPPhTerutang[2],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 4,
                'PPhTerutang' => $request->PPhTerutang[3],
                'hasil_PPhTerutang' => $request->HasilPPhTerutang[3],
            ], [
                'PhMt_id' => $lastform->id,
                'PhMt_point' => 5,
                'PPhTerutang' => $request->PPhTerutang[4],
                'hasil_PPhTerutang' => $request->HasilPPhTerutang[4],
            ],
        ];
        $phmt3pointdetail = new PhMtDetail3();
        $phmt3pointdetail->insert($data);
        return response()->json(['berhasil'], 200);
    }

    public function delete($id)
    {
        PhMtDetail::where('PhMt_id', $id)->delete();
        PhMtDetail2::where('PhMt_id', $id)->delete();
        PhMtDetail3::where('PhMt_id', $id)->delete();

        return response()->json('berhasil', 200);
    }
}
