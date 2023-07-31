<?php

namespace App\Http\Controllers;

use App\Imports\DataSetorPajakImport;
use App\Models\DataSubmit;
use App\Models\kodeMap;
use App\Models\submitFile;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;


class SubmitFileController extends Controller
{
    public function SubmitFile(Request $request, $id)
    {
        try {
            $data = submitFile::find($id);
            $rules = [
                'laporan_keuangan' => 'max:15000',
            ];
            $messages = array(
                'laporan_keuangan' => 'max:15000',
            );

            $this->validate($request, $rules, $messages);


            if ($request->hasFile('laporan_keuangan')) {
                $name = date('mdy') . '-' . uniqid() . '.' . $request->file('laporan_keuangan')->getClientOriginalName();
                $request->file('laporan_keuangan')->move('SubmitFolder/LaporanKeuangan/', $name);
                // $data->laporan_keuangan = $request->file('laporan_keuangan')->getClientOriginalName();
                $data->laporan_keuangan = $name;
            }
            if ($request->hasFile('bukti_potong')) {
                $name = date('mdy') . '-' . uniqid() . '.' . $request->file('bukti_potong')->getClientOriginalName();
                $request->file('bukti_potong')->move('SubmitFolder/BuktiPotong/', $name);
                $data->bukti_potong = $name;
            }
            if ($request->hasFile('dokumen_lainnya')) {
                $name = date('mdy') . '-' . uniqid() . '.' . $request->file('dokumen_lainnya')->getClientOriginalName();
                $request->file('dokumen_lainnya')->move('SubmitFolder/DokumenLainnya/', $name);
                $data->dokumen_lainnya = $name;
            }

            $data->save();
            return redirect('submit/' . $id)->with('success', 'Data Berhasil Tersimpan');
        } catch (Exception $e) {
            // dd($e->getMessage());
            return redirect('submit/' . $id)->with('warning', 'Ukuran File Maksimal 15 MB');

            // return redirect('submit/' . $id)->with('error', $e->getMessage());
        }
    }
    public function download(Request $request, $id)
    {
        $document = submitFile::find($id);
        // return response()->json($document,200);
        // dd(public_path('SubmitFolder/' . $document->laporan_keuangan));
        if ($request->download == 'laporan_keuangan') {
            return response()->download(public_path('SubmitFolder/LaporanKeuangan/' . $document->laporan_keuangan), $document->laporan_keuangan, ['Cache-Control' => 'no-cache, must-revalidate']);
        }
        if ($request->download == 'bukti_potong') {
            return response()->download(public_path('SubmitFolder/BuktiPotong/' . $document->bukti_potong), $document->bukti_potong, ['Cache-Control' => 'no-cache, must-revalidate']);
        }
        if ($request->download == 'dokumen_lainnya') {
            return response()->download(public_path('SubmitFolder/DokumenLainnya/' . $document->dokumen_lainnya), $document->dokumen_lainnya, ['Cache-Control' => 'no-cache, must-revalidate']);
        }
        // return response()->download(Storage::get('documents/'.$document->file_source));
    }

    // public function download($id) {
    //     $data = DB::table('submit_files')->find($id);
    //     $filepath = public_path("SubmitFolder/{$data->laporan_keuangan}");
    //     return \Response::download($filepath);

    // }

    // public function dropdown()
    // {
    //     $kode_maps = kodeMap::all();
    //     $data = ['kode_maps' => $kode_maps];
    //     return view('submit/', compact('kode_maps'));
    // }

    public function save(Request $request, $id)
    {
        $i = 0;
        $data = [];
        DataSubmit::where('submit_id', $id)->delete();
        $lastform = submitFile::find($id);

        for ($i = 0; $i < count($request->kode_map); $i++) {
            $tmp = [
                'submit_id' => $request->formsubmit_id,
                'kode_map' => $request->kode_map[$i],
                'kode_setor' => $request->kode_setor[$i],
                'tanggal_spp_pbk' => $request->tanggal_spp_pbk[$i],
                'nilai_spp_pbk' => $request->nilai_spp_pbk[$i],
                'ntpn_pbk' => $request->ntpn_pbk[$i],
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ];
            array_push($data, $tmp);
        }
        if (count($data) > 0) {
            $data_submit = DataSubmit::insert($data);
        }

        return redirect('submit/' . $request->formspt)->with('success', 'Data Berhasil Tersimpan');
    }

    public function delete(Request $request)
    {
        // $lastId = DataSubmit::orderBy('id', 'desc')->first();
        // $data_submit = DataSubmit::find($lastId->id);
        // $data_submit->delete();
        // return response()->json('berhasil', 200);
        $delete = DataSubmit::whereIn('id',$request->checkedValues)->delete();
        if($delete){
            return response()->json("berhasil", 200);
        }
        else{
            return response()->json("gagal", 200);
        }
    }

    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $namafile = rand() . $data->getClientOriginalName();
        $data->move('SetorPajakData', $namafile);
        Excel::import(new DataSetorPajakImport, public_path('/SetorPajakData/' . $namafile));
        return redirect()->back()->with('success', 'DataBerhasil Tersimpan');
    }
}
