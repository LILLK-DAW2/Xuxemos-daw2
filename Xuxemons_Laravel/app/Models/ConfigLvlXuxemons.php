<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigLvlXuxemons extends Model
{
    use HasFactory;

    protected $table = 'config_lvl_xuxemons'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'peq-med', // Permitir asignación en masa para el campo 'peq-med'
        'med-gra', // Permitir asignación en masa para el campo 'med-gra'
    ];
}
