<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $table = 'livros';

    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'ano_publicacao',
        'descricao',
    ];
}
