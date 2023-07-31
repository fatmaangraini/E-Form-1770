<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKel extends Model
{
    use HasFactory;
    protected $fillable = ['formuliriv_id','nama_anggota_kel','nik','hubungan','hubungan'];
    public $timestamps = true;
}
