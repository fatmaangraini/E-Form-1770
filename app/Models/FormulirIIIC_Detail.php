<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirIIIC_Detail extends Model
{
    use HasFactory;
    protected $fillable = ['formulirIII_id','formulirIIIC_point','rupiah_dsrPengenaan_PajakC'];
    public $timestamps = true;
}
