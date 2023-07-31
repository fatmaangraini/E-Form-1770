<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataPotongPungutImport;
use App\Models\DataPotongPungut;
use App\Models\FormulirII;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

use function GuzzleHttp\Promise\all;

class DataPotongPungutController extends Controller
{
    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $namafile = rand() . $data->getClientOriginalName();
        $data->move('PotongPungutData', $namafile);
        Excel::import(new DataPotongPungutImport, public_path('/PotongPungutData/' . $namafile));
        return redirect()->back()->with('success', 'Data Berhasil Tersimpan');
    }
    public function store(Request $request)
    {
        $lastform = FormulirII::orderBy('id', 'desc')->first();
        $datapotongpungut = new DataPotongPungut();
        $datapotongpungut->formulirii_id = $lastform->id;
        $datapotongpungut->nama_pemotong = $request->nama_pemotong;
        $datapotongpungut->npwp_pemotong = $request->npwp_pemotong;
        $datapotongpungut->nomor_bupot = $request->nomor_bupot;
        $datapotongpungut->tgl_bupot = $request->tgl_bupot;
        $datapotongpungut->jenis_pajak = $request->jenis_pajak;
        $datapotongpungut->jumlahPPh_potong = $request->jumlahPPh_potong;
        $datapotongpungut->save();
        return response()->json('berhasil', 200);
    }
    public function delete(Request $request)
    {
        // $lastId = DataPotongPungut::orderBy('id', 'desc')->first();
        // $datapotongpungut = DataPotongPungut::find($lastId->id);
        // $datapotongpungut->delete();
        // return response()->json('berhasil', 200);
        $delete = DataPotongPungut::whereIn('id',$request->checkedValues)->delete();
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
        DataPotongPungut::where('formulirii_id', $id)->delete();
        $lastform = FormulirII::find($id);

        // if ((int) $request->counted > 0) {
        //     $i = (int) $request->counted;
        // }
        $count_err = 0;
        for ($i = 0; $i < count($request->nama_pemotong); $i++) {
            if (preg_match($npwp_pattern, $request->npwp_pemotong[$i])) {
                $tmp = [
                    'formulirii_id' => $request->form2_id,
                    'nama_pemotong' => $request->nama_pemotong[$i],
                    'npwp_pemotong' => $request->npwp_pemotong[$i],
                    'nomor_bupot' => $request->nomor_bupot[$i],
                    'tgl_bupot' => $request->tgl_bupot[$i],
                    'jenis_pajak' => $request->jenis_pajak[$i],
                    'jumlahPPh_potong' => $request->jumlahPPh_potong[$i],
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time()),
                ];
                array_push($data, $tmp);
            } else {
                $count_err += 1;
            }
        }
        if (count($data) > 0) {
            $datapotongpungut = DataPotongPungut::insert($data);
        }
        if ($count_err > 0) {
            return redirect('formulir-II/' . $request->formspt)->with('success', "$count_err Data tidak sesuai format NPWP");
        }
        return redirect('formulir-II/' . $request->formspt)->with('success', 'Data Berhasil Tersimpan');
    }
}
