<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoNegocio extends Model
{
    use HasFactory;
    protected $fillable = ['nombreValor'];
    public function registrarEmpresas(){
        return $this->hasMany(registrarEmpresas::class, 'id');
    }
}
