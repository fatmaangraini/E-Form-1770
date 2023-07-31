<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataHartaImport;
use App\Models\DataHarta;
use App\Models\FormulirIV;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

 
class DataHartaController extends Controller
{
    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $namafile = rand() . $data->getClientOriginalName();
        $data->move('HartaData', $namafile);
        Excel::import(new DataHartaImport, public_path('/HartaData/' . $namafile));
        return redirect()->back()->with('success', 'Data Berhasil Tersimpan');
    }
    public function delete(Request $request)
    { 
        // $lastId = DataHarta::orderBy('id', 'desc')->first();
        // $dataharta = DataHarta::find($lastId->id);
        // $dataharta->delete();
        // return response()->json('berhasil', 200);
        $delete = DataHarta::whereIn('id',$request->checkedValues)->delete();
        if($delete){
            return response()->json("berhasil", 200);
        }
        else{
            return response()->json("gagal", 200);
        }
    }
    public function store(Request $request)
    {
        // $lastform = FormulirIV::orderBy('id', 'desc')->first();

       
        $dataharta = new DataHarta();
        $dataharta->formuliriv_id = $request->form4_id;
        $dataharta->kode_harta = $request->kode_harta;
        $dataharta->nama_harta = $request->nama_harta;
        $dataharta->tahun_perolehan = $request->tahun_perolehan;
        $dataharta->harta_perolehan = $request->harta_perolehan;
        $dataharta->keterangan = $request->keterangan;
        $dataharta->save();
        return response()->json('berhasil', 200);
    }

    public function save(Request $request,$id)
    {
        $tahun = 
        // $validator = Validator::make($request->all(), [
        //     'tahun_perolehan.*' => 'required|numeric|digits:4',
        // ], [
        //     'tahun_perolehan.*.digits' => 'Tahun perolehan harus terdiri dari 4 angka.',
        // ]);
    
        // if ($validator->fails()) {
        //     $errors = $validator->errors();
        //     $errorMessage = $errors->first();
    
        //     Alert::error('Kesalahan', $errorMessage)->showConfirmButton('OK', '#d33');
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
    
        $i = 0;
        $data = [];
        DataHarta::where('formuliriv_id',$id)->delete();
        $lastform = FormulirIV::find($id);

        // if ((int) $request->counted > 0) {
        //     $i = (int) $request->counted;
        // }
        for ($i = 0; $i < count($request->nama_harta); $i++) {
            $tmp = [
                'formuliriv_id' => $request->form4_id,
                'kode_harta' => $request->harta[$i],
                'nama_harta' => $request->nama_harta[$i],
                'tahun_perolehan' => $request->tahun_perolehan[$i],
                'harta_perolehan' => $request->harta_perolehan[$i],
                'keterangan' => $request->keterangan[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ];
            array_push($data, $tmp);
        }
        if (count($data) > 0) {
            $data_harta = DataHarta::insert($data);
        }
        // dd($data);
        return redirect('formulir-IV/' . $request->formspt)->with('success', 'Data Berhasil Tersimpan');
    }
}
