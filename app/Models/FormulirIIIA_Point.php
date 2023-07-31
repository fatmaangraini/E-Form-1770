<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirIIIA_Point extends Model
{
    use HasFactory;
    protected $fillable = ['jenis_penghasilanA'];
    public $timestamps = true;
}
