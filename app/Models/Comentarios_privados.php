<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentarios_privados extends Model
{
    protected $table = 'comentarios_privados';

    protected $fillable = [
        'usuario_id',
        'comentario',
        'data_criacao',
        'livro_id',
        
    ];
}
