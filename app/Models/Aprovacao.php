<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprovacao extends Model
{
    protected $table = 'aprovacao';

    protected $fillable = [
        'observacao',
        'data_aprovacao',
        'login_funcionario_id',
        'comentario_id',
        'aprovado',
        'reprovado',
    ];
}
