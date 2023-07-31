<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treasure extends Model
{
    use HasFactory;
    protected $fillable = ['form_id','choice','name_treasure','acquisition_year','acquisition_cost','description'];
}
