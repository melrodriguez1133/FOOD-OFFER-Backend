<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'edad', 'direccion', 'celular', 'genero', 'ci', 'expedido', 'email', 'password'];
    public function setContraseñaAttribute($password) 
    {
        $this->attributes['password'] = bcrypt($password);
    }
}