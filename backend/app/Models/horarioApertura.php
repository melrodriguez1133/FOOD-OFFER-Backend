<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horarioApertura extends Model
{
    use HasFactory;
    protected $fillable = ['nombreValor'];
}