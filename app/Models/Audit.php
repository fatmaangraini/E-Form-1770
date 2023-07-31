<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;
    protected $fillable = ['opini_akuntan','nama_AKpublik','npwp_AKpublik','nama_kantor_AKpublik','npwp_kantor_AKpublik',
    'nama_Kpajak','npwp_Kpajak','nama_kantor_Kpajak','npwp_kantor_Kpajak'];
    public $timestamps = true;
}
