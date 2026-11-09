<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Login_funcionario;

class LoginFuncionarioToken extends Model
{
    protected $table = 'login_funcionario_token';

    protected $fillable = [
        'login_funcionario_id',
        'token',
        'valido_ate',
    ];

    public function login_funcionario()
    {
        return $this->belongsTo(Login_funcionario::class, 'login_funcionario_id');
    }
}