<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use App\Models\DataHarta;
use App\Models\DataUtang;
use App\Models\DataKel;
use App\Models\DataPotongPungut;
use App\Models\Datapp46danpp23;
use App\Models\Form;
use App\Models\FormSpt;
use App\Models\FormulirIV;
use App\Models\FormulirIII;
use App\Models\FormulirII;
use App\Models\pp46danpp23;
use App\Models\Treasure;
use App\Models\FormulirIIIA_Detail;
use App\Models\FormulirIIIB_Detail;
use App\Models\FormulirI;
use App\Models\Audit;
use App\Models\DataSubmit;
use App\Models\Formulir1770;
use App\Models\Formulir1770_Detail;
use App\Models\FormulirI2;
use App\Models\FormulirI2B_Detail;
use App\Models\FormulirI2C;
use App\Models\FormulirI2D_Detail;
use App\Models\FormulirI_Detail;
use App\Models\FormulirIIIC_Detail;
use App\Models\formulirPhMt;
use App\Models\kodeMap;
use App\Models\kodeSetor;
use App\Models\KolomIdentitas;
use App\Models\PhMtDetail;
use App\Models\PhMtDetail2;
use App\Models\PhMtDetail3;
use App\Models\submitFile;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class FormController extends Controller
{

    public function DomPdf(Request $request, $id)
    {
        $spt = FormSpt::where('id', $id)->first();
        $form4 = FormulirIV::where('form_spts_id', $spt->id ?? null)->first();
        $data_harta = DataHarta::where('formuliriv_id', $form4->id ?? null)->get();
        $data_utang = DataUtang::where('formuliriv_id', $form4->id ?? null)->get();
        $data_kel = DataKel::where('formuliriv_id', $form4->id ?? null)->get();

        $form3 = FormulirIII::where('form_spts_id', $spt->id ?? null)->first();
        $formulir_iiia = FormulirIIIA_Detail::where('formuliriii_id', $form3->id ?? null)->get();
        $formulir_iiib = FormulirIIIB_Detail::where('formuliriii_id', $form3->id ?? null)->get();
        $formulir_iiic = FormulirIIIC_Detail::where('formuliriii_id', $form3->id ?? null)->get();

        $pp4623 = pp46danpp23::where('form_spts_id', $spt->id ?? null)->first();
        $datadaftarpp4623 = Datapp46danpp23::where('pp46danpp23_id', $pp4623->id ?? null)->get();

        $form2 = FormulirII::where('form_spts_id', $spt->id ?? null)->first();
        $data_potong_pungut = DataPotongPungut::where('formulirii_id', $form2->id ?? null)->get();

        $form1 = FormulirI::where('form_spts_id', $spt->id ?? null)->first();
        $audit = Audit::where('formuliri_id', $form1->id ?? null)->get();
        $formuliri = FormulirI_Detail::where('formuliri_id', $form1->id ?? null)->get();

        $form1_2 = FormulirI2::where('form_spts_id', $spt->id ?? null)->first();
        $formulir_i2b = FormulirI2B_Detail::where('formuliri2_id', $form1_2->id)->get();
        $formulir_i2d = FormulirI2D_Detail::where('formuliri2_id', $form1_2->id)->get();
        $formulir_i2c = FormulirI2C::where('formuliri2_id', $form1_2->id)->get();

        $form1770 = Formulir1770::latest()->first();
        $kolom_identitas = KolomIdentitas::where('formulir1770_id', $form1770->id)->get();
        $formulir_1770 = Formulir1770_Detail::where('formulir1770_id', $form1770->id ?? null)->get();

        $formPhMt = formulirPhMt::where('form_spts_id', $spt->id ?? null)->first();
        $PhMt = PhMtDetail::where('PhMt_id', $formPhMt->id ?? null)->get();
        $PhMt2 = PhMtDetail2::where('PhMt_id', $formPhMt->id ?? null)->get();
        $PhMt3 = PhMtDetail3::where('PhMt_id', $formPhMt->id ?? null)->get();

        $totalkolom5 = 0;
        $totalform12c = 0;
        $totalform12d = 0;

        if ($spt->jenis_pelaporan == 'pembukuan') {
            if (!isset($formuliri[21]->rupiah_JenisPenghasilan) ?? false) {
                $totalkolom5 += 0;
            } else {

                $num = implode("", explode(',', $formuliri[21]->rupiah_JenisPenghasilan));
                $totalkolom5 += (int) $num;
            }
        } else if ($spt->jenis_pelaporan == 'pencatatan') {
            foreach ($formulir_i2b as $f) {
                $num = implode("", explode(',', $f->rupiah_penghasilan_netoB));

                $totalkolom5 += (int) $num;
            }
        }
        foreach ($formulir_i2c as $f) {
            $num = implode("", explode(',', $f->penghasilan_neto));

            $totalform12c += (int) $num;
        }
        foreach ($formulir_i2d as $f) {
            $num = implode("", explode(',', $f->rupiah_penghasilan_netoD));

            $totalform12d += (int) $num;
        }

        $data = [
            'spt' => $spt,
            'formspt' => $spt->id,
            'form4' => $form4,
            'data_harta' => $data_harta,
            'data_utang' => $data_utang,
            'data_kel' => $data_kel,

            'form3' => $form3->id,
            'formulir_iiia' => $formulir_iiia,
            'formulir_iiib' => $formulir_iiib,
            'formulir_iiic' => $formulir_iiic,

            'pp4623' => $pp4623->id,
            'datadaftarpp4623' => $datadaftarpp4623,

            'form2' => $form2->id,
            'data_potong_pungut' => $data_potong_pungut,

            'form1' => $form1,
            'audit' => $audit,
            'formuliri' => $formuliri,

            'form1_2' => $form1_2->id,
            'formulir_i2b' => $formulir_i2b,
            'formulir_i2d' => $formulir_i2d,
            'formulir_i2c' => $formulir_i2c,
            'totalformulir_i2c' => $totalform12c,
            'form1770' => $form1770->id,
            'form1770s' => $form1770,
            'kolom5' => $totalkolom5,
            'totalformulir_i2d' => $totalform12d,
            'kolom_identitas' => $kolom_identitas,
            'formulir_1770' => $formulir_1770,

            'formPhMt' => $formPhMt->id,
            'formPhMts' => $formPhMt,
            'PhMt' => $PhMt,
            'PhMt2' => $PhMt2,
            'PhMt3' => $PhMt3,

            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];

        // if ($request->has('download')) {

        //     $pdf = PDF::loadView('formulir_print', $data)->setOption(['defaultFont' => 'sans-serif', "enable_html5_parser" => true]);;
        //     return $pdf->download('formulirs.pdf');
        // }

        return view('formulir_print', $data);
    }
    public function arsip()
    {
        $form = FormSpt::where('user_id', auth()->user()->id)->get();

        $data = [
            'nama' => auth()->user()->name,
            'form' => $form,
        ];
        return view('arsipSPT', $data);
    }
    public function buatspt()
    {
        $data = [
            'nama' => auth()->user()->name
        ];
        return view('buatSPT', $data);
    }

    public function index()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('formulir-IV', $data);
    }
    public function formulir4()
    {

        $spt = FormSpt::latest()->first();
        $form4 = FormulirIV::latest()->first();
        $data_harta = DataHarta::where('formuliriv_id', $form4->id)->get();
        $data_utang = DataUtang::where('formuliriv_id', $form4->id)->get();
        $data_kel = DataKel::where('formuliriv_id', $form4->id)->get();
        $data = [
            'spt' =>  $spt,
            'data_harta' => $data_harta,
            'data_utang' => $data_utang,
            'data_kel' => $data_kel,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        // dd($data);
        return view('formulir-IV', $data);
    }
    public function formulir4ById($id)
    {

        $spt = FormSpt::where('id', $id)->first();
        $form4 = FormulirIV::where('form_spts_id', $spt->id ?? null)->first();
        $data_harta = DataHarta::where('formuliriv_id', $form4->id ?? null)->get();
        $data_utang = DataUtang::where('formuliriv_id', $form4->id ?? null)->get();
        $data_kel = DataKel::where('formuliriv_id', $form4->id ?? null)->get();
        $data = [
            'form4' => $form4->id,
            'formspt' => $spt->id,
            'spt' =>  $spt,
            'data_harta' => $data_harta,
            'data_utang' => $data_utang,
            'data_kel' => $data_kel,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        // dd($data);
        return view('formulir-IV', $data);
    }
    public function formulir3()
    {
        $spt = FormSpt::latest()->first();
        $form3 = FormulirIII::latest()->first();
        $formulir_iiia = FormulirIIIA_Detail::where('formuliriii_id', $form3->id)->get();
        $formulir_iiib = FormulirIIIB_Detail::where('formuliriii_id', $form3->id)->get();
        $formulir_iiic = FormulirIIIC_Detail::where('formuliriii_id', $form3->id)->get();

        //    return  response()->json($formulir_iiia,200);
        $data = [
            'spt' =>  $spt,
            'formulir_iiia' => $formulir_iiia,
            'formulir_iiib' => $formulir_iiib,
            'formulir_iiic' => $formulir_iiic,

            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('formulir-III', $data);
    }
    public function formulir3ById($id)
    {
        $spt = FormSpt::where('id', $id)->first();
        $form3 = FormulirIII::where('form_spts_id', $spt->id ?? null)->first();
        $formulir_iiia = FormulirIIIA_Detail::where('formuliriii_id', $form3->id ?? null)->get();
        $formulir_iiib = FormulirIIIB_Detail::where('formuliriii_id', $form3->id ?? null)->get();
        $formulir_iiic = FormulirIIIC_Detail::where('formuliriii_id', $form3->id ?? null)->get();
        $pp4623 = pp46danpp23::where('form_spts_id', $spt->id ?? null)->first();
        $datadaftarpp4623 = Datapp46danpp23::where('pp46danpp23_id', $pp4623->id ?? null)->get();

        $PerBruto = 0;
        $PPhFinal = 0;

        foreach ($datadaftarpp4623 as $f) {
            $num = implode("", explode(',', $f->peredaran_bruto));

            $PerBruto += (int) $num;
        }
        foreach ($datadaftarpp4623 as $f) {
            $num = implode("", explode(',', $f->jumlahPPhFinal_dibayar));

            $PPhFinal += (int) $num;
        }

        $data = [
            'form3' => $form3->id,
            'form3s' => $form3,
            'formspt' => $spt->id,
            'spt' =>  $spt,
            'formulir_iiia' => $formulir_iiia,
            'formulir_iiib' => $formulir_iiib,
            'formulir_iiic' => $formulir_iiic,
            'Peredaran_Bruto' => $PerBruto,
            'PPh_Final' => $PPhFinal,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('formulir-III', $data);
    }
    public function formulir2()
    {
        $spt = FormSpt::latest()->first();
        $form2 = FormulirII::latest()->first();
        $data_potong_pungut = DataPotongPungut::where('formulirii_id', $form2->id)->get();
        $data = [
            'spt' =>  $spt,
            'data_potong_pungut' => $data_potong_pungut,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('formulir-II', $data);
    }
    public function formulir2ById($id)
    {
        $spt = FormSpt::where('id', $id)->first();
        $form2 = FormulirII::where('form_spts_id', $spt->id ?? null)->first();
        $data_potong_pungut = DataPotongPungut::where('formulirii_id', $form2->id ?? null)->get();
        $data = [
            'form2' => $form2->id,
            'formspt' => $spt->id,
            'spt' =>  $spt,
            'data_potong_pungut' => $data_potong_pungut,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('formulir-II', $data);
    }
    public function formulir1()
    {
        $spt = FormSpt::latest()->first();
        $form1 = FormulirI::latest()->first();
        $audit = Audit::where('formuliri_id', $form1->id)->get();
        $formuliri = FormulirI_Detail::where('formuliri_id', $form1->id)->get();
        $data = [
            'spt' =>  $spt,
            'audit' => $audit,
            'formuliri' => $formuliri,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('formulir-I', $data);
    }
    public function formulir1ById($id)
    {
        $spt = FormSpt::where('id', $id)->first();
        $form1 = FormulirI::where('form_spts_id', $spt->id ?? null)->first();
        $audit = Audit::where('formuliri_id', $form1->id ?? null)->get();
        $formuliri = FormulirI_Detail::where('formuliri_id', $form1->id ?? null)->get();
        $data = [
            'form1' => $form1,
            'formspt' => $spt->id,
            'spt' =>  $spt,
            'audit' => $audit,
            'formuliri' => $formuliri,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        // dd($data);
        return view('formulir-I', $data);
    }
    public function formulir1_2()
    {
        $spt = FormSpt::latest()->first();
        $form1_2 = FormulirI2::latest()->first();
        $formulir_i2b = FormulirI2B_Detail::where('formuliri2_id', $form1_2->id)->get();
        $formulir_i2d = FormulirI2D_Detail::where('formuliri2_id', $form1_2->id)->get();
        $formulir_i2c = FormulirI2C::where('formuliri2_id', $form1_2->id)->get();

        // dd($formulir_i2b);
        $data = [
            'spt' =>  $spt,
            'formulir_i2b' => $formulir_i2b,
            'formulir_i2d' => $formulir_i2d,
            'formulir_i2c' => $formulir_i2c,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('formulir-I hal 2', $data);
    }
    public function formulir1_2ById($id)
    {
        $spt = FormSpt::where('id', $id)->first();
        $form1_2 = FormulirI2::where('form_spts_id', $spt->id ?? null)->first();
        $formulir_i2b = FormulirI2B_Detail::where('formuliri2_id', $form1_2->id ?? null)->get();
        $formulir_i2d = FormulirI2D_Detail::where('formuliri2_id', $form1_2->id ?? null)->get();
        $formulir_i2c = FormulirI2C::where('formuliri2_id', $form1_2->id ?? null)->get();

        // dd($formulir_i2b);
        $data = [
            'form1_2' => $form1_2->id,
            'formspt' => $spt->id,
            'spt' =>  $spt,
            'formulir_i2b' => $formulir_i2b,
            'formulir_i2d' => $formulir_i2d,
            'formulir_i2c' => $formulir_i2c,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('formulir-I hal 2', $data);
    }

    // FORMULIR PP46/23
    public function PP46()
    {
        $spt = FormSpt::latest()->first();
        $form3 = FormulirIII::latest()->first();
        $pp4623 = pp46danpp23::where('formuliriii_id', $form3->id)->first();
        $datadaftarpp4623 = Datapp46danpp23::where('pp46danpp23_id', $pp4623->id)->get();
        $data = [
            'spt' =>  $spt,
            'datadaftarpp4623' => $datadaftarpp4623,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('PP46atau23', $data);
    }
    public function PP46ById($id)
    {
        $spt = FormSpt::where('id', $id)->first();
        $form3 = FormulirIII::where('form_spts_id', $spt->id ?? null)->first();
        $pp4623 = pp46danpp23::where('form_spts_id', $spt->id ?? null)->first();
        $datadaftarpp4623 = Datapp46danpp23::where('pp46danpp23_id', $pp4623->id ?? null);
        // dd($datadaftarpp4623);
        $data = [
            'spt' =>  $spt,
            'pp4623' => $pp4623->id,
            'pp4623s' => $pp4623,
            'countdatapp4623' => $datadaftarpp4623->count(),
            'datadaftarpp4623' => $datadaftarpp4623->get(),
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        // return response()->json($data,200);

        return view('PP46atau23', $data);
    }

    // FORMULIR 1770
    public function formulir()
    {
        $spt = FormSpt::latest()->first();
        $form1770 = Formulir1770::latest()->first();
        $kolom_identitas = KolomIdentitas::where('formulir1770_id', $form1770->id)->get();
        $formulir_1770 = Formulir1770_Detail::where('formulir1770_id', $form1770->id)->get();

        $data = [
            'form1770' => $form1770->id,
            'form1770s' => $form1770,
            'formspt' => $spt->id,
            'spt' =>  $spt,
            'kolom_identitas' => $kolom_identitas,
            'formulir_1770' => $formulir_1770,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        // dd($kolom_identitas);
        return view('formulir1770', $data);
    }
    public function formulirById($id)
    {
        $spt = FormSpt::where('id', $id)->first();
        $form1770 = Formulir1770::where('form_spts_id', $spt->id ?? null)->first();
        $kolom_identitas = KolomIdentitas::where('formulir1770_id', $form1770->id ?? null)->get();
        $formulir_1770 = Formulir1770_Detail::where('formulir1770_id', $form1770->id ?? null)->get();
        $form1_2 = FormulirI2::where('form_spts_id', $spt->id ?? null)->first();
        $form1 = FormulirI::where('form_spts_id', $spt->id ?? null)->first();
        $formulir_i2c = FormulirI2C::where('formuliri2_id', $form1_2->id ?? null)->get();
        $formulir_i2d = FormulirI2D_Detail::where('formuliri2_id', $form1_2->id ?? null)->get();
        $formulir_i2b = FormulirI2B_Detail::where('formuliri2_id', $form1_2->id ?? null)->get();
        $formuliri = FormulirI_Detail::where('formuliri_id', $form1->id ?? null)->get();
        $form2 = FormulirII::where('form_spts_id', $spt->id ?? null)->first();
        $data_potong_pungut = DataPotongPungut::where('formulirii_id', $form2->id ?? null)->get();

        $totalkolom5 = 0;
        $totalform12c = 0;
        $totalform12d = 0;
        $totalpotongpungut = 0;

        if ($spt->jenis_pelaporan == 'pembukuan') {
            if (!isset($formuliri[21]->rupiah_JenisPenghasilan) ?? false) {
                $totalkolom5 += 0;
            } else {

                $num = implode("", explode(',', $formuliri[21]->rupiah_JenisPenghasilan));
                $totalkolom5 += (int) $num;
            }
        } else if ($spt->jenis_pelaporan == 'pencatatan') {
            foreach ($formulir_i2b as $f) {
                $num = implode("", explode(',', $f->rupiah_penghasilan_netoB));

                $totalkolom5 += (int) $num;
            }
        }
        foreach ($formulir_i2c as $f) {
            $num = implode("", explode(',', $f->penghasilan_neto));

            $totalform12c += (int) $num;
        }
        foreach ($formulir_i2d as $f) {
            $num = implode("", explode(',', $f->rupiah_penghasilan_netoD));

            $totalform12d += (int) $num;
        }
        foreach ($data_potong_pungut as $f) {
            $num = implode("", explode(',', $f->jumlahPPh_potong));

            $totalpotongpungut += (int) $num;
        }

        $data = [
            'form1770' => $form1770->id,
            'form1770s' => $form1770,
            'formulir_i2c' => $totalform12c,
            'kolom5' => $totalkolom5,
            'formulir_i2d' => $totalform12d,
            'totalpotongpungut' => $totalpotongpungut,
            'formspt' => $spt->id,
            'spt' =>  $spt,
            'kolom_identitas' => $kolom_identitas,
            'formulir_1770' => $formulir_1770,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('formulir1770', $data);
    }
    public function PHMT()
    {
        $spt = FormSpt::latest()->first();
        $formPhMt = formulirPhMt::latest()->first();
        $PhMt = PhMtDetail::where('PhMt_id', $formPhMt->id)->get();
        $PhMt2 = PhMtDetail2::where('PhMt_id', $formPhMt->id)->get();
        $PhMt3 = PhMtDetail3::where('PhMt_id', $formPhMt->id)->get();

        $data = [
            'spt' =>  $spt,
            'formPhMt' => $formPhMt->id,
            'formPhMts' => $formPhMt,
            'PhMt' => $PhMt,
            'PhMt2' => $PhMt2,
            'PhMt3' => $PhMt3,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name

        ];
        return view('PH-MT', $data);
    }
    public function PHMTById($id)
    {
        $spt = FormSpt::where('id', $id)->first();
        $formPhMt = formulirPhMt::where('form_spts_id', $spt->id ?? null)->first();
        $PhMt = PhMtDetail::where('PhMt_id', $formPhMt->id ?? null)->get();
        $PhMt2 = PhMtDetail2::where('PhMt_id', $formPhMt->id ?? null)->get();
        $PhMt3 = PhMtDetail3::where('PhMt_id', $formPhMt->id ?? null)->get();

        $data = [
            'formPhMt' => $formPhMt->id,
            'formPhMts' => $formPhMt,
            'formspt' => $spt->id,
            'spt' =>  $spt,
            'PhMt' => $PhMt,
            'PhMt2' => $PhMt2,
            'PhMt3' => $PhMt3,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name

        ];
        return view('PH-MT', $data);
    }

    public function submit()
    {
        $spt = FormSpt::latest()->first();
        $formsubmit = submitFile::latest()->first();
        $data = [
            'spt' =>  $spt,
        ];
        return view('submit', $data);
    }

    public function submitById(Request $request, $id)
    {
        $spt = FormSpt::where('id', $id)->first();
        $formsubmit = submitFile::where('form_spts_id', $spt->id ?? null)->first();
        $data_submit = DataSubmit::with('kodesetor')->where('submit_id', $formsubmit->id ?? null)->get();
        $kode_maps = kodeMap::all();

        // return response()->json($data_submit[0],200);
        $data = [
            'spt' =>  $spt,
            'formsubmit' => $formsubmit->id,
            'formspt' => $spt->id,
            'formsubmits' => $formsubmit,
            'data_submit' => $data_submit,
            'kode_maps' => $kode_maps,
            // 'kode_setors' => $kode_setors
        ];
        return view('submit', $data);
    }

    public function getKodeSetor(Request $request)
    {
        $id_kodemap = $request->id_kodemap;
        $kode_setors = kodeSetor::where('akun_pajak_id', $id_kodemap)->get();

        foreach ($kode_setors as $kode_setors) {
            echo "<option value='$kode_setors->id'>$kode_setors->jenis_setor</option>";
        }
    }
    public function composeEmail2(Request $request, string $email,$id)
    {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {
            $form  =  FormSpt::find($id);

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            // $mail->SMTPAuth = true;
            $mail->Username = 'eform1770bantupajak@gmail.com';   //  sender username
            $mail->Password = 'ehvmbqzoivbdnwiq';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom('eform1770bantupajak@gmail.com', 'E-Form 1770 Bantu Pajak');
            $mail->addAddress($email);

            $mail->isHTML(true);                // Set email content format to HTML
            $nama = auth()->user()->name;
            $npwp = auth()->user()->npwp;
            $mail->Subject = 'E-FORM 1770';
            $mail->Body    = "
            <table style='border-collapse: collapse;'>
            <tr style='background-color: #FF7F00;'>
            <td style='text-align: center;'>Simulasi Penyampaian SPT Elektronik<br>E-Form 1770</td></tr>
            <tr style='background-color: #FFD700;'>
            <td style='text-align: center;'>Berikut adalah bukti penerimaan elektronik Anda.<br>......................</td></tr>
            <tr style='background-color: #FFD700;'>
            <td style='text-align: center;'>
            Nama : $nama<br>
            NPWP : $npwp<br>
            Tahun/Masa Pajak : $form->tahun<br>
            Pembetulan ke : $form->pembetulan <br>
            Status : $form->status<br>
            Jumlah : $form->jumlah<br>
            Terima Kasih telah melakukan simulasi pelaporan SPT Anda.
            </td>
            </tr></table>";

            // $mail->AltBody = plain text version of email body;

            if (!$mail->send()) {
                echo "Email gagal dikirim: " . $mail->ErrorInfo;
            } else {
                echo "Email berhasil dikirim";
            }
        } catch (Exception $e) {
            echo $e->errorMessage();
        }
    }

    public function composeEmail(Request $request, string $email, $id)
    {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            // $mail->SMTPAuth = true;
            $mail->Username = 'eform1770bantupajak@gmail.com';   //  sender username
            $mail->Password = 'ehvmbqzoivbdnwiq';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom('eform1770bantupajak@gmail.com', 'E-Form 1770 Bantu Pajak');
            $mail->addAddress($email);

            $mail->isHTML(true);                // Set email content format to HTML
            $nama = auth()->user()->name;
            $mail->Subject = 'E-FORM 1770';
            $mail->Body    = "Halo $nama<br>
            Kami ingin memberitahu Anda bahwa alamat E-Form 1770 sudah tersedia dan siap untuk diakses. <br><br>
            Klik tautan di bawah ini untuk langsung menuju ke alamat E-Form 1770:<br>
            <a class='btn' href='/formulir-IV/$id'>Elektonik Formulir Surat Pemberitahuan 1770</a><br><br>
            Terima kasih atas perhatiannya.";

            // $mail->AltBody = plain text version of email body;

            if (!$mail->send()) {
                echo "Email gagal dikirim: " . $mail->ErrorInfo;
            } else {
                echo "Email berhasil dikirim";
            }
        } catch (Exception $e) {
            echo $e->errorMessage();
        }
    }

    public function prosestambahspt(Request $request)
    {
        $data = $request->all();
        if ($data['status_spt'] == 'Normal') {
            $checkform = FormSpt::where('tahun', $data['tahun'])->where('user_id', auth()->user()->id)->get();
            if (count($checkform) > 0) {
                return redirect('arsipSPT')->withErrors('Sudah ada data');
            }
            $form  = new FormSpt();
            $form->tahun = $data['tahun'];
            $form->user_id = auth()->user()->id;
            $form->status_spt = $data['status_spt'];
            $form->status = 'Nihil';
            $form->pembetulan = $data['pembetulan'] ?? 0;
            $form->media_pengiriman_token = $data['media_pengiriman_token'];
            $form->cek_submit = 0;
            $form->save();
            FormController::composeEmail($request,$request->email , $form->id);

            $form4 = FormulirIV::create([
                'form_spts_id' => $form->id
            ]);
            $form3 = FormulirIII::create([
                'form_spts_id' => $form->id
            ]);
            $form2 = FormulirII::create([
                'form_spts_id' => $form->id
            ]);
            $form1 = FormulirI::create([
                'form_spts_id' => $form->id
            ]);
            $form1_2 = FormulirI2::create([
                'form_spts_id' => $form->id
            ]);
            $pp4623 = pp46danpp23::create([
                'form_spts_id' => $form->id,
                'formulirIII_id' => $form3->id,
            ]);
            $form1770 = Formulir1770::create([
                'form_spts_id' => $form->id
            ]);
            $formPhMt = formulirPhMt::create([
                'form_spts_id' => $form->id
            ]);
            $formsubmit = submitFile::create([
                'form_spts_id' => $form->id
            ]);
            return redirect('arsipSPT');
        } else {
            $checkform = FormSpt::where('tahun', $data['tahun'])->where('user_id', auth()->user()->id)->get();
            if (count($checkform) > 0) {
                $form  = FormSpt::find($checkform[0]->id);
                $form->tahun = $data['tahun'];
                $form->user_id = auth()->user()->id;
                $form->status_spt = $data['status_spt'];
                $form->pembetulan = $data['pembetulan'] ?? 0;
                $form->media_pengiriman_token = $data['media_pengiriman_token'];
                $form->cek_submit = 0;
                $form->save();
                FormController::composeEmail($request,$request->email , $form->id);

                return redirect('arsipSPT');
            } else {
                return redirect('arsipSPT')->withErrors('Data tidak ada silahkan buat dulu');
            }
        }
        $data = [
            'nama' => auth()->user()->name,

        ];
        // return redirect('arsipSPT');
    }

    public function update_jenis_pelaporan(Request $request, $id)
    {
        $spt = FormSpt::find($id);
        $spt->jenis_pelaporan = $request->jenis_pelaporan;
        $spt->save();
        return response()->json('sukses', 200);
    }

    public function update_cek_pembetulan(Request $request, $id)
    {
        $spt = FormSpt::find($id);
        $spt->cek_pembetulan = $request->cek_pembetulan;
        $spt->save();
        return response()->json('sukses', 200);
    }

    public function update_is_audit(Request $request, $id)
    {
        $formuliri = FormulirI::find($id);
        $formuliri->is_audit = $request->is_audit;
        $formuliri->save();
        return response()->json('sukses', 200);
    }

    public function update_PTKP(Request $request, $id)
    {
        $formulir_1770 = Formulir1770::find($id);
        $formulir_1770->jenis_PTKP = $request->jenis_PTKP;
        $formulir_1770->save();
        return response()->json('sukses', 200);
    }

    public function update_jenis_KreditPajak(Request $request, $id)
    {
        $formulir_1770 = Formulir1770::find($id);
        $formulir_1770->jenis_KreditPajak = $request->jenis_KreditPajak;
        $formulir_1770->save();
        return response()->json('sukses', 200);
    }

    public function update_jenis_PPhKurang_LebihBayar(Request $request, $id)
    {
        $formulir_1770 = Formulir1770::find($id);
        $formulir_1770->jenis_PPhKurang_LebihBayar = $request->jenis_PPhKurang_LebihBayar;
        $formulir_1770->save();
        return response()->json('sukses', 200);
    }

    public function update_permohonan_PPhLebihBayar(Request $request, $id)
    {
        $formulir_1770 = Formulir1770::find($id);
        $formulir_1770->permohonan_PPhLebihBayar = $request->permohonan_PPhLebihBayar;
        $formulir_1770->save();
        return response()->json('sukses', 200);
    }

    public function update_angsuran_PPh25(Request $request, $id)
    {
        $formulir_1770 = Formulir1770::find($id);
        $formulir_1770->angsuran_PPh25 = $request->angsuran_PPh25;
        $formulir_1770->save();
        return response()->json('sukses', 200);
    }

    public function update_perhitungan_sendiri(Request $request, $id)
    {
        $formulir_1770 = Formulir1770::find($id);
        $formulir_1770->perhitungan_sendiri = $request->perhitungan_sendiri;
        $formulir_1770->save();
        return response()->json('sukses', 200);
    }

    public function update_pilihan_PTKP(Request $request, $id)
    {
        $PhMt = formulirPhMt::find($id);
        $PhMt->pilihan_PTKP = $request->pilihan_PTKP;
        $PhMt->save();
        return response()->json('sukses', 200);
    }

    public function update_PengNeto(Request $request, $id)
    {
        $PhMt = formulirPhMt::find($id);
        $PhMt->status_PengNeto1 = $request->status_PengNeto1;
        $PhMt->status_PengNeto2 = $request->status_PengNeto2;
        $PhMt->save();
        return response()->json('sukses', 200);
    }

    public function update_PP4623(Request $request, $id)
    {
        $formulir_iiia = FormulirIII::find($id);
        $formulir_iiia->PP46_23 = $request->PP46_23;
        $formulir_iiia->save();
        return response()->json('sukses', 200);
    }
    public function update_pelapor_pajak(Request $request, $id)
    {
        $formulir_1770 = Formulir1770::find($id);
        $formulir_1770->pelapor_pajak = $request->pelapor_pajak;
        $formulir_1770->save();
        return response()->json('sukses', 200);
    }

    public function submit_form(Request $request, $id)
    {
        // dd($request->email);
        $form = FormSpt::find($id);
        $form->cek_submit = 1;
        $form->save();
        FormController::composeEmail2($request, $request->email,$id);

        return redirect('arsipSPT')->with('success', 'Data Berhasil Tersimpan');

        return response()->json('sukses', 200);
    }
}
