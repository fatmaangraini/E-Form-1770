<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUtang extends Model
{
    use HasFactory;
    protected $fillable = ['formuliriv_id','kode_utang','nama_pemberi_pinjaman','alamat_pemberi_pinjaman','tahun_pinjaman','jumlah_pinjaman'];
    public $timestamps = true;
}
