<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KolomIdentitas extends Model
{
    use HasFactory;
    protected $fillable = ['npwp_wajibpajak','nama_wajibpajak','jenis_usaha',
    'klu','no_telepon','fax','status_perpajakan','npwp_suamiisteri'];
    public $timestamps = true;
}
