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
        'vim',
        'modelo',
        'año',
        'color',
        'kilometraje'
    ];

    function terceros(){
        return $this->belongsTo(Tercero::class, 'id_tercero');
    }
}
