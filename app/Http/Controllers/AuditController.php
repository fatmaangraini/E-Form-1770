<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\FormulirI;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function store(Request $request,$id){
        
        Audit::where('formuliri_id',$id)->delete();
        $lastform = FormulirI::find($id);

        $audit = new Audit();
        $audit->formuliri_id = $lastform->id;
        $audit->opini_akuntan = $request->opini_akuntan;
        $audit->nama_AKpublik = $request->nama_AKpublik;
        $audit->npwp_AKpublik = $request->npwp_AKpublik;
        $audit->nama_kantor_AKpublik = $request->nama_kantor_AKpublik;
        $audit->npwp_kantor_AKpublik = $request->npwp_kantor_AKpublik;
        $audit->nama_Kpajak = $request->nama_Kpajak;
        $audit->npwp_Kpajak = $request->npwp_Kpajak;
        $audit->nama_kantor_Kpajak = $request->nama_kantor_Kpajak;
        $audit->npwp_kantor_Kpajak = $request->npwp_kantor_Kpajak;
        $audit->save();
        return response()->json('berhasil',200);
    }
    public function save(Request $request,$id){
        $i = 0;
        $data = [

        ];
        $lastform = FormulirI::find($id);

        if((int) $request->counted >0){
            $i = (int) $request->counted;
        }
        for($i; $i < count($request->nama_AKpublik); $i++){
            $tmp = [
                'formuliri_id' => $lastform->id ,
                'opini_akuntan' => $request->opini_akuntan[$i] ,
                'nama_AKpublik' => $request->nama_AKpublik[$i] ,
                'npwp_AKpublik' => $request->npwp_AKpublik[$i] ,
                'nama_kantor_AKpublik' => $request->nama_kantor_AKpublik[$i] ,
                'npwp_kantor_AKpublik' => $request->npwp_kantor_AKpublik[$i] ,
                'nama_Kpajak' => $request->nama_Kpajak[$i] ,
                'npwp_Kpajak' => $request->npwp_Kpajak[$i] ,
                'nama_kantor_Kpajak' => $request->nama_kantor_Kpajak[$i] ,
                'npwp_kantor_Kpajak' => $request->npwp_kantor_Kpajak[$i] ,
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
            ];
            array_push($data,$tmp);
        }
        if(count($data) > 0){
            $audit = Audit::insert($data);
        }
        // dd($data);
        return redirect('formulir-I');
    }

    public function delete($id)
    {
        Audit::where('formuliri_id',$id)->delete();

        return response()->json('berhasil',200);

    }
}
