<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioXuxemons extends Model
{
    use HasFactory;
    protected $table = 'InventarioXuxemons';

    protected $fillable = ['user_id', 'xuxemon_id', 'vida','ataque', 'defensa','tamaño','caramenlos',];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function xuxemon()
    {
        return $this->belongsTo(Xuxemon::class, 'xuxemon_id');
    }
}
