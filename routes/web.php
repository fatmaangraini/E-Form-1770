<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataHartaImport;
use App\Exports\DataUtangImport;
use App\Exports\DataPotongPungutImport;
use App\Exports\DataDaftar4623Import;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataHartaController;
use App\Http\Controllers\DataUtangController;
use App\Http\Controllers\DataKelController;
use App\Http\Controllers\DataPotongPungutController;
use App\Http\Controllers\Formulir1770Controller;
use App\Http\Controllers\FormulirI2CController;
use App\Http\Controllers\FormulirI2Controller;
use App\Http\Controllers\FormulirIController;
use App\Http\Controllers\PP46danPP23Controller;
use App\Http\Controllers\SignaturePadController;
use App\Http\Controllers\FormulirIIIController;
use App\Http\Controllers\FormulirPhMtController;
use App\Http\Controllers\KolomIdentitasController;
use App\Http\Controllers\SaveDataHartaController;
use App\Http\Controllers\SubmitFileController;
use Sabberworm\CSS\Property\Import;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/form', [FormController::class, "index"]);

Route::get('/index', function () {
    return view('index');
});
Route::post('/add', [FormController::class, "addform"])->name('add');

Route::get('/datatable', function () {
    return view('datatable');
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('authorization', [AuthController::class, 'loginByToken']);
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::get('logout', [AuthController::class, 'index'])->name('logout');


Route::get('/data', function () {
    return view('data');
});

Route::get('/form1', function () {
    return view('form1');
});

// Route::get('/buatSPT', function () {
//     return view('buatSPT');
// });
// Route::get('/arsipSPT', function () {
//     return view('arsipSPT');
// });
Route::get('/index1', function () {
    return view('index1');
});
Route::get('/home', function () {
    return view('home');
});
Route::middleware(['is_login'])->group(function () {
    Route::get('/arsipSPT', [FormController::class, 'arsip']);
    Route::get('/buatSPT', [FormController::class, 'buatspt']);
    Route::get('/formulir-IV', [FormController::class, 'formulir4']);
    Route::get('/formulir-III', [FormController::class, 'formulir3']);
    Route::get('/formulir-II', [FormController::class, 'formulir2']);
    Route::get('/formulir-I', [FormController::class, 'formulir1']);
    Route::get('/formulir-I hal 2', [FormController::class, 'formulir1_2']);
    Route::get('/PP46atau23', [FormController::class, 'PP46']);
    Route::get('/formulir1770', [FormController::class, 'formulir']);
    Route::get('/PH-MT', [FormController::class, 'PHMT']);
    Route::get('/submit', [FormController::class, 'submit']);
    // ById
    Route::get('/arsipSPT/{id}', [FormController::class, 'arsip']);
    Route::get('/formulir-IV/{id}', [FormController::class, 'formulir4ById']);
    Route::get('/formulir-III/{id}', [FormController::class, 'formulir3ById']);
    Route::get('/formulir-II/{id}', [FormController::class, 'formulir2ById']);
    Route::get('/formulir-I/{id}', [FormController::class, 'formulir1ById']);
    Route::get('/formulir-I hal 2/{id}', [FormController::class, 'formulir1_2ById']);
    Route::get('/PP46atau23/{id}', [FormController::class, 'PP46ById']);
    Route::get('/formulir1770/{id}', [FormController::class, 'formulirById']);
    Route::get('/PH-MT/{id}', [FormController::class, 'PHMTById']);
    Route::get('/submit/{id}', [FormController::class, 'submitById']);
    Route::get('/formulirprint', function () {
        return view('formulirprint');
    });

    Route::get('/dosen', function () {
        return view('dosen');
    });

    Route::post('/prosestambahspt', [FormController::class, 'prosestambahspt']);

    // Jenis Pelaporan
    Route::post('/JenisUpdate/{id}', [FormController::class, 'update_jenis_pelaporan']);

    // Cek Pembetulan
    Route::post('/CekPembetulan/{id}', [FormController::class, 'update_cek_pembetulan']);

    // Jenis Audit
    Route::post('/JenisAudit/{id}', [FormController::class, 'update_is_audit']);

    // Jenis PTKP
    Route::post('/JenisPTKP/{id}', [FormController::class, 'update_PTKP']);

    // Jenis Kredit Pajak
    Route::post('/JenisKreditPajak/{id}', [FormController::class, 'update_jenis_KreditPajak']);

    // Jenis PPh Kurang/Lebih Bayar
    Route::post('/JenisPPhKurangLebih/{id}', [FormController::class, 'update_jenis_PPhKurang_LebihBayar']);

    // PermohonanPPhLebihBayar
    Route::post('/PermohonanPPhLebihBayar/{id}', [FormController::class, 'update_permohonan_PPhLebihBayar']);

    // Angsuran PPh Pasal 25
    Route::post('/AngsuranPPhPasal25/{id}', [FormController::class, 'update_angsuran_PPh25']);

    // Perhitungan Sendiri
    Route::post('/PerhitunganSendiri/{id}', [FormController::class, 'update_perhitungan_sendiri']);

    // Pilihan PTKP
    Route::post('/PilihanPTKP/{id}', [FormController::class, 'update_pilihan_PTKP']);

    // Pelapor Pajak
    Route::post('/PelaporPajak/{id}', [FormController::class, 'update_pelapor_pajak']);

    // Status Penghasilan Neto
    Route::post('/StatusPengNeto/{id}', [FormController::class, 'update_PengNeto']);

    // Data Harta
    Route::post('/DataHartaImport', [DataHartaController::class, 'importexcel'])->name('DataHartaImport');
    Route::post('/DataHarta/Store', [DataHartaController::class, 'store']);
    Route::post('/DataHarta/delete', [DataHartaController::class, 'delete']);
    Route::post('/SaveDataHarta/{id}', [DataHartaController::class, 'save']);

    // Data Utang
    Route::post('/DataUtangImport', [DataUtangController::class, 'importexcel'])->name('DataUtangImport');
    Route::post('/DataUtang/Store', [DataUtangController::class, 'store']);
    Route::post('/DataUtang/delete', [DataUtangController::class, 'delete']);
    Route::post('/SaveDataUtang/{id}', [DataUtangController::class, 'save']);

    // Data Keluarga
    Route::post('/DataKel/Store', [DataKelController::class, 'store']);
    Route::post('/DataKel/delete', [DataKelController::class, 'delete']);
    Route::post('/SaveDataKel/{id}', [DataKelController::class, 'save']);

    // Data Potong Pungut
    Route::post('/DataPotongPungutImport', [DataPotongPungutController::class, 'importexcel'])->name('DataPotongPungutImport');
    Route::post('/DataPotongPungut/Store', [DataPotongPungutController::class, 'store']);
    Route::post('/DataPotongPungut/delete', [DataPotongPungutController::class, 'delete']);
    Route::post('/SaveDataPotongPungut/{id}', [DataPotongPungutController::class, 'save']);

    // DataPP46/23
    Route::post('/DataDaftar4623Import', [PP46danPP23Controller::class, 'importexcel'])->name('DataDaftar4623Import');
    Route::post('/Datapp46danpp23/Store', [PP46danPP23Controller::class, 'store']);
    Route::post('/Datapp46danpp23/delete', [PP46danPP23Controller::class, 'delete']);
    Route::post('/SaveDataPP4623/{id}', [PP46danPP23Controller::class, 'save']);
    Route::post('/simpanAlamat/{id}', [PP46danPP23Controller::class, 'store']);
    Route::post('/Alamat/Store/{id}', [PP46danPP23Controller::class, 'store']);


    // Formulir III A
    Route::post('/FormulirIIIA_Point/Store/{id}', [FormulirIIIController::class, 'store']);
    Route::post('/FormulirIIIA_Point/delete/{id}', [FormulirIIIController::class, 'delete']);

    // Check PP46/23
    Route::post('/CheckPP46_23/{id}', [FormController::class, 'update_PP4623']);

    // Formulir III B
    Route::post('/FormulirIIIB_Point/Store/{id}', [FormulirIIIController::class, 'store2']);
    Route::post('/FormulirIIIB_Point/delete/{id}', [FormulirIIIController::class, 'delete2']);

    // Formulir III C
    Route::post('/FormulirIIIC_Point/Store/{id}', [FormulirIIIController::class, 'store3']);
    Route::post('/FormulirIIIC_Point/delete/{id}', [FormulirIIIController::class, 'delete3']);

    // Formulir I Audit
    Route::post('Audit/Store/{id}', [AuditController::class, 'store']);
    Route::post('Audit/delete/{id}', [AuditController::class, 'delete']);
    Route::post('SaveAudit/{id}', [AuditController::class, 'store']);

    // Formulir I
    Route::post('/FormulirI_Point/Store/{id}', [FormulirIController::class, 'store']);
    Route::post('/FormulirI_Point/delete/{id}', [FormulirIController::class, 'delete']);

    // Formulir I2 B
    Route::post('/FormulirI2B_Point/Store/{id}', [FormulirI2Controller::class, 'store']);
    Route::post('/FormulirI2B_Point/delete/{id}', [FormulirI2Controller::class, 'delete']);

    // Formulir I2 C
    Route::post('/FormulirI2C/Store', [FormulirI2CController::class, 'store']);
    Route::post('/FormulirI2C/delete', [FormulirI2CController::class, 'delete']);
    Route::post('/SaveFormulirI2C', [FormulirI2CController::class, 'save']);

    // Formulir I2 D
    Route::post('/FormulirI2D_Point/Store/{id}', [FormulirI2Controller::class, 'store3']);
    Route::post('/FormulirI2D_Point/delete/{id}', [FormulirI2Controller::class, 'delete3']);

    // Formulir 1770 Kolom Identitas
    Route::post('KolomIdentitas/Store/{id}', [KolomIdentitasController::class, 'store']);
    Route::post('KolomIdentitas/delete/{id}', [KolomIdentitasController::class, 'delete']);
    Route::post('SaveKolomIdentitas/{id}', [KolomIdentitasController::class, 'save']);

    // Formulir 1770
    Route::post('/Formulir1770_Point/Store/{id}', [Formulir1770Controller::class, 'store']);
    Route::post('/Formulir1770_Point/delete', [Formulir1770Controller::class, 'delete']);

    // Formulir PH-MT
    Route::post('/PhMt_Point/Store/{id}', [FormulirPhMtController::class, 'store']);
    Route::post('/PhMt2_Point/Store/{id}', [FormulirPhMtController::class, 'store2']);
    Route::post('/PhMt3_Point/Store/{id}', [FormulirPhMtController::class, 'store3']);
    Route::post('/PhMt_Point/delete/{id}', [FormulirPhMtController::class, 'delete']);

    // Formulir Print PDF
    Route::get('/formulir_print/{id}', [FormController::class, 'DomPdf']);

    Route::get('signaturepad', [SignaturePadController::class, 'index']);
    Route::post('signaturepad', [SignaturePadController::class, 'upload'])->name('signaturepad.upload');

    // Tanda Tangan
    Route::post('/PhMt_TTD/{id}', [FormulirPhMtController::class, 'ttd']);
    Route::post('/1770_TTD/{id}', [Formulir1770Controller::class, 'ttd']);

    // Submit File
    Route::post('/SubmitFile/{id}', [SubmitFileController::class, 'SubmitFile']);
    Route::get('download/{id}', [SubmitFileController::class, 'download']);
    Route::post('/getKodeSetor', [FormController::class, 'getKodeSetor'])->name('getKodeSetor');

    Route::post('/DataSetorPajakImport', [SubmitFileController::class, 'importexcel'])->name('DataSetorPajakImport');
    Route::post('/DataSubmit/Store', [SubmitFileController::class, 'store']);
    Route::post('/DataSubmit/delete', [SubmitFileController::class, 'delete']);
    Route::post('/SaveDataSubmit/{id}', [SubmitFileController::class, 'save']);

    Route::post('/SubmitForm/{id}', [FormController::class, 'submit_form']);

    Route::get('/tes1', function () {
        return view('tes1');
    });
});
