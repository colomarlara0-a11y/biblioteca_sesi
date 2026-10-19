<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'tipo',
    ];

    public function login_funcionario()
    {
        return $this->hasMany(Login_funcionario::class, 'usuario_id');
    }
}


