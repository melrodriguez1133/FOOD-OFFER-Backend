<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrarEmpresas extends Model
{
    use HasFactory;
    protected $fillable = ['nombreEmpresa','tipoNegocio','Descripcion','dias', 'numeroCelular', 'numeroTelefono',
                            'correoEmpresa','direccion'];
}
