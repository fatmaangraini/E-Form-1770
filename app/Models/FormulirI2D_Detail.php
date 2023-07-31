<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirI2D_Detail extends Model
{
    use HasFactory;
    protected $fillable = ['rupiah_penghasilan_netoD'];
    public $timestamps = true;
}
