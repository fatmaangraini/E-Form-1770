<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirI2D_Point extends Model
{
    use HasFactory;
    protected $fillable = ['jenis_usahaD'];
    public $timestamps = true;
}
