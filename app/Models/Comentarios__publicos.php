<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentarios_publicos extends Model
{
    protected $table = 'comentarios_publicos';

    protected $fillable = [
        'usuario_id',
        'comentario',
        'data_criacao',
        'livro_id',
        'status',
        
    ];
}
