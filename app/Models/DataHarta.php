<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHarta extends Model
{
    use HasFactory;
    protected $fillable = ['kode_harta','formuliriv_id','nama_harta','tahun_perolehan','harta_perolehan','keterangan'];
    public $timestamps = true;
}
