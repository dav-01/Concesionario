<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    function terceros(){
        return $this->belongsTo(Tercero::class, 'id_tercero');
    }
}
