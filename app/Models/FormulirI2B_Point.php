<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirI2B_Point extends Model
{
    use HasFactory;
    protected $fillable = ['jenis_usahaB'];
    public $timestamps = true;
}
