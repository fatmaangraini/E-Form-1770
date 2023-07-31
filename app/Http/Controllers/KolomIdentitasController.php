<?php

namespace App\Http\Controllers;

use App\Models\Formulir1770;
use App\Models\KolomIdentitas;
use Illuminate\Http\Request;

class KolomIdentitasController extends Controller
{
    public function delete($id)
    {
        KolomIdentitas::where('formulir1770_id',$id)->delete();
       
        return response()->json('berhasil', 200);
    }
    public function store(Request $request,$id)
    {
        KolomIdentitas::where('formulir1770_id',$id)->delete();
        $lastform = Formulir1770::find($id);

        $kolom_identitas = new KolomIdentitas();
        $kolom_identitas->formulir1770_id = $lastform->id;
        $kolom_identitas->npwp_wajibpajak = $request->npwp_wajibpajak;
        $kolom_identitas->nama_wajibpajak = $request->nama_wajibpajak;
        $kolom_identitas->jenis_usaha = $request->jenis_usaha;
        $kolom_identitas->klu = $request->klu;
        $kolom_identitas->no_telepon = $request->no_telepon;
        $kolom_identitas->fax = $request->fax;
        $kolom_identitas->status_perpajakan = $request->status_perpajakan;
        $kolom_identitas->npwp_suamiisteri = $request->npwp_suamiisteri;
        $kolom_identitas->save();
        return response()->json('berhasil', 200);
    }
    public function save(Request $request,$id){
        $i = 0;
        $data = [

        ];
        $lastform = Formulir1770::find($id);


        if((int) $request->counted >0){
            $i = (int) $request->counted;
        }
        for($i; $i < count($request->npwp_wajibpajak); $i++){
            $tmp = [
                'formulir1770_id' => $lastform->id ,
                'npwp_wajibpajak' => $request->npwp_wajibpajak[$i] ,
                'nama_wajibpajak' => $request->nama_wajibpajak[$i] ,
                'jenis_usaha' => $request->jenis_usaha[$i] ,
                'klu' => $request->klu[$i] ,
                'no_telepon' => $request->no_telepon[$i] ,
                'status_perpajakan' => $request->status_perpajakan[$i] ,
                'npwp_suamiisteri' => $request->npwp_suamiisteri[$i] ,
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
            ];
            array_push($data,$tmp);
        }
        if(count($data) > 0){
            $kolom_identitas = KolomIdentitas::insert($data);
        }
        return redirect('formulir1770');
    }
}
