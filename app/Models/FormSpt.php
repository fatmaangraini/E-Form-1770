<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSpt extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','tahun','status_spt','pembetulan','status','jumlah','catatan','media_pengiriman_token','jenis_pelaporan','cek_pembetulan','cek_submit'];
    public $timestamps = true;

}
