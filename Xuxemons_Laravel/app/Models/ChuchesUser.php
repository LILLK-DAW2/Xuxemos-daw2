<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuchesUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'chuches_id',
        'user_id',
        'cantidad',
    ];

}
