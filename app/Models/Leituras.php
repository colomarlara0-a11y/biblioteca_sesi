<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leituras extends Model
{
    protected $table = 'leituras';

    protected $fillable = [
        'usuario_id',
        'livro_id',
        'data_leitura',
    ];
}
