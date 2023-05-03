<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    use HasFactory;
    protected $fillable=['nombre','director','genero','ano','guion','id_usuario'];
}

