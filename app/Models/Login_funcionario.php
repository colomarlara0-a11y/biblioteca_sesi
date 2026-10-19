<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login_funcionario extends Model
{
    protected $table = 'login_funcionario';

    protected $fillable = [
        'cargo',
        'nif',
        'usuario_id',
    ];
    public function Usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
