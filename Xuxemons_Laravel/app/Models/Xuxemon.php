<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xuxemon extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','vida', 'tipo_id', 'archivo', 'descripcion'];

    public function tipo()
    {
        return $this->belongsTo(Tipos::class);
    }
}
