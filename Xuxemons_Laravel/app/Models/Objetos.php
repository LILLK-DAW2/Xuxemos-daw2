<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetos extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'precio', 'cantidad'];

    public function inventarios()
    {
        return $this->hasMany(Mochila::class, 'objeto_id');
    }
}
