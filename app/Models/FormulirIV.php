<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirIV extends Model
{
    use HasFactory;
    protected $fillable = ['form_spts_id'];
    public $timestamps = true;
}
