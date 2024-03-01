<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];

    public function xuxemons()
    {
        return $this->hasMany(Xuxemon::class);
    }
}
