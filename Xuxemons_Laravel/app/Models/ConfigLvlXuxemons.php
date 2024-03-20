<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigLvlXuxemons extends Model
{
    use HasFactory;

    protected $table = 'config_lvl_xuxemons'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'peq_med', // Permitir asignación en masa para el campo 'peq-med'
        'med_gra', // Permitir asignación en masa para el campo 'med-gra'
    ];
}
