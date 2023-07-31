<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirIIIB_Detail extends Model
{
    use HasFactory;
    protected $fillable = ['formulirIII_id','formulirIIIA_point','rupiah_dsrPengenaan_PajakA'];
    public $timestamps = true;
}
