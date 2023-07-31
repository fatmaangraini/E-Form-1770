<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kodeMap extends Model
{
    use HasFactory;
    protected $fillable = ['akun_pajak'];
    public $timestamps = true;
}
