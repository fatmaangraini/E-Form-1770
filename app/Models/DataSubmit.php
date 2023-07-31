<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSubmit extends Model
{
    use HasFactory;
    protected $fillable = ['submit_id','kode_map','kode_setor','tanggal_spp_pbk','nilai_spp_pbk','ntpn_pbk'];
    public $timestamps = true;

    public function kodesetor()
    {
        return $this->hasOne(kodeSetor::class,'id','kode_setor');
    }
    
}

