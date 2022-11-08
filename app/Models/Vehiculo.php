<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'placa',
        'vin',
        'modelo',
        'año',
        'color',
        'kilometraje',
        'id_tercero',
    ];

    function terceros(){
        return $this->belongsTo(Tercero::class, 'id_tercero');
    }
}
