<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataUtangImport;
use App\Models\DataUtang;
use App\Models\FormulirIV;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class DataUtangController extends Controller
{
    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $namafile = rand() . $data->getClientOriginalName();
        $data->move('UtangData', $namafile);
        Excel::import(new DataUtangImport, public_path('/UtangData/' . $namafile));
        return redirect()->back()->with('success', 'Data Berhasil Tersimpan');
    }
    public function delete(Request $request)
    {
        // $lastId = DataUtang::orderBy('id', 'desc')->first();
        // $dataharta = DataUtang::find($lastId->id);
        // $dataharta->delete();
        // return response()->json('berhasil', 200);
        $delete = DataUtang::whereIn('id',$request->checkedValues)->delete();
        if($delete){
            return response()->json("berhasil", 200);
        }
        else{
            return response()->json("gagal", 200);
        }
    }
    public function store(Request $request)
    {
        $lastform = FormulirIV::orderBy('id', 'desc')->first();

        $datautang = new DataUtang();
        $datautang->formuliriv_id = $lastform->id;
        $datautang->kode_utang = $request->kode_utang;
        $datautang->nama_pemberi_pinjaman = $request->nama_pemberi_pinjaman;
        $datautang->alamat_pemberi_pinjaman = $request->alamat_pemberi_pinjaman;
        $datautang->tahun_pinjaman = $request->tahun_pinjaman;
        $datautang->jumlah_pinjaman = $request->jumlah_pinjaman;
        $datautang->save();
        return response()->json('berhasil', 200);
    }

    public function save(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tahun_pinjaman.*' => 'required|numeric|digits:4',
        ], [
            'tahun_pinjaman.*.digits' => 'Tahun peminjaman harus terdiri dari 4 angka.',
        ]);
    
        if ($validator->fails()) {
            $errors = $validator->errors();
            $errorMessage = $errors->first();
    
            Alert::error('Kesalahan', $errorMessage)->showConfirmButton('OK', '#d33');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $i = 0;
        $data = [];
        DataUtang::where('formuliriv_id', $id)->delete();
        $lastform = FormulirIV::find($id);

        // if ((int) $request->counted > 0) {
        //     $i = (int) $request->counted;
        // }
        // dd($request->all());
        for ($i = 0; $i < count($request->kode_utang); $i++) {

            $tmp = [
                'formuliriv_id' => $request->form4_id,
                'kode_utang' => $request->kode_utang[$i],
                'nama_pemberi_pinjaman' => $request->nama_pemberi_pinjaman[$i],
                'alamat_pemberi_pinjaman' => $request->alamat_pemberi_pinjaman[$i],
                'tahun_pinjaman' => $request->tahun_pinjaman[$i],
                'jumlah_pinjaman' => $request->jumlah_pinjaman[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ];
            array_push($data, $tmp);
        }
        if (count($data) > 0) {
            $datautang = DataUtang::insert($data);
        }
        // dd($data);
        return redirect('formulir-IV/' . $request->formspt)->with('success', 'Data Berhasil Tersimpan');
    }
}
