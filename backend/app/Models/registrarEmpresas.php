<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrarEmpresas extends Model
{
    use HasFactory;
    protected $fillable = ['nombreEmpresa','tipoNegocioE','descripcion','diasA', 'horaA', 'horaC', 'numerosContactos', 
                            'correoEmpresa', 'direccionesSucursales'];
    
    public function tipoNegocio(){
        return $this->belongsTo(TipoNegocio::class, 'id');
    }
}
