<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    use HasFactory;

    protected $table = 'terceros';

    protected $fillable = [
        'id',
        'cedula',
        'nombre',
        'apellido',
        'celular',
        'correo'
    ];

    public function vehiculos(){
        return $this->hasMany(Vehiculo::class, 'id');
    }
}
