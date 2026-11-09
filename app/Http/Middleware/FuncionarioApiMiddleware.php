<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Login_funcionarioToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Login_funcionario;

class FuncionarioApiMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('token') && $request->has('login_funcionario_id')) {

            $token = LoginFuncionarioToken::where(
                'login_funcionario_id',
                $request->login_funcionario_id
            )
            ->where('token', $request->token)
            ->where('valido_ate', '>', Carbon::now())
            ->first();

            if ($token) {
                return $next($request);
            }

            return response()->json([
                'message' => 'Token inválido',
                'erro' => 's'
            ], 401);

        } else {

            return response()->json([
                'message' => 'Token não fornecido',
                'erro' => 's'
            ], 401);
        }
    }
}

