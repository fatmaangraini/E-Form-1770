<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataDaftar4623Import;
use App\Models\Datapp46danpp23;
use App\Models\pp46danpp23;


class PP46danPP23Controller extends Controller
{
    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $namafile = rand() . $data->getClientOriginalName();
        $data->move('DaftarPP4623', $namafile);
        Excel::import(new DataDaftar4623Import, public_path('/DaftarPP4623/' . $namafile));
        return redirect()->back()->with('success', 'Data Berhasil Tersimpan');
    }
    public function store(Request $request)
    {
        $lastform = pp46danpp23::orderBy('id', 'desc')->first();
        $datadaftarpp4623 = new Datapp46danpp23();
        $datadaftarpp4623->pp46danpp23_id = $lastform->id;
        $datadaftarpp4623->npwp = $request->npwp;
        $datadaftarpp4623->masa_pajak = $request->masa_pajak;
        $datadaftarpp4623->alamat = $request->alamat;
        $datadaftarpp4623->peredaran_bruto = $request->peredaran_bruto;
        $datadaftarpp4623->jumlahPPhFinal_dibayar = $request->jumlahPPhFinal_dibayar;
        $datadaftarpp4623->save();
        return response()->json('berhasil', 200);
    }
    public function delete(Request $request)
    {
        // $lastId = Datapp46danpp23::orderBy('id', 'desc')->first();
        // // return response()->json($lastId,200);

        // $datadaftarpp4623 = Datapp46danpp23::find($lastId->id);
        // $datadaftarpp4623->delete();
        // return response()->json('berhasil', 200);
        $delete = Datapp46danpp23::whereIn('id',$request->checkedValues)->delete();
        if($delete){
            return response()->json("berhasil", 200);
        }
        else{
            return response()->json("gagal", 200);
        }
    }

    public function save(Request $request, $id)
    {
        $npwp_pattern = '/^\d{2}\.\d{3}\.\d{3}\.\d{1}-\d{3}\.\d{3}$/';

        $i = 0;
        $data = [];
        Datapp46danpp23::where('pp46danpp23_id', $id)->delete();
        $lastform = pp46danpp23::find($id);

        // if ((int) $request->counted > 0){
        //     $i = (int) $request->counted;
        // }
        $count_err = 0;
        for ($i = 0; $i < count($request->npwp); $i++) {
            if (preg_match($npwp_pattern, $request->npwp[$i])) {

                $tmp = [
                    'pp46danpp23_id' => $request->pp4623_id,
                    'npwp' => $request->npwp[$i],
                    'masa_pajak' => $request->masa_pajak[$i],
                    'alamat' => $request->alamat[$i],
                    'peredaran_bruto' => $request->peredaran_bruto[$i],
                    'jumlahPPhFinal_dibayar' => $request->jumlahPPhFinal_dibayar[$i],
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),

                ];
                array_push($data, $tmp);
            } else {
                $count_err += 1;
            }
        }
        if (count($data) > 0) {
            $datadaftarpp4623 = Datapp46danpp23::insert($data);
        }
        if ($count_err > 0) {
            return redirect('PP46atau23/' . $request->formspt)->with('success', "$count_err Data tidak sesuai format NPWP");
        }
        return redirect('PP46atau23/' . $request->formspt)->with('success', 'Data Berhasil Tersimpan');
    }

    public function simpanAlamat(Request $request, $id)
    {
        pp46danpp23::where('form_spts_id', $id)->delete();
        $lastform = pp46danpp23::find($id);

        $pp4623 = new pp46danpp23();
        $pp4623->form_spts_id = $lastform->id;
        $pp4623->alamat_wajib_pajak = $request->alamat_wajib_pajak;
        $pp4623->save();
        return response()->json('berhasil', 200);
    }
}
