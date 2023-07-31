<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPotongPungut extends Model
{
    use HasFactory;
    protected $fillable = ['formulirii_id','nama_pemotong','npwp_pemotong','nomor_bupot','tgl_bupot','jenis_pajak','jumlahPPh_potong'];
    public $timestamps = true;
}