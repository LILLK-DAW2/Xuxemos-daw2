<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mochila extends Model
{
    use HasFactory;
    protected $table = 'Mochila';

    protected $fillable = ['user_id', 'objeto_id', 'cantidad'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function objeto()
    {
        return $this->belongsTo(Objetos::class, 'objeto_id');
    }
}
