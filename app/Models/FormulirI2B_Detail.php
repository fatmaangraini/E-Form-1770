<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirI2B_Detail extends Model
{
    use HasFactory;
    protected $fillable = ['rupiah_peredaran_usahaB', 'norma', 'rupiah_penghasilan_netoB'];
    public $timestamps = true;
}
