<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirI2C extends Model
{
    use HasFactory;
    protected $fillable = ['formuliri2_id','npwp_pemberi_kerja','nama_pemberi_kerja','penghasilan_bruto','pengurangan_penghasilan_bruto','penghasilan_neto'];
    public $timestamps = true;
}