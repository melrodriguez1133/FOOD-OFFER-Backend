<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrarEmpresas extends Model
{
    use HasFactory;
    protected $fillable = ['nombreEmpresa','tipoNegocioE','descripcion','horariosAtencion', 'diasAtencion','numeroCelular', 
                            'numeroTelefono', 'direccion', 'correoEmpresa'];
}
