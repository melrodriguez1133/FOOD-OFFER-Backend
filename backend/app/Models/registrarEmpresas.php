<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class registrarEmpresas extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $fillable = ['nombreEmpresa','tipoNegocioE','descripcion','horariosAtencion', 'diasAtencion','numeroCelular', 
                            'numeroTelefono', 'direccion', 'correoEmpresa', 'password'];
    protected $hidden = ['password', 'remember_token',];
}
