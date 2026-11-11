<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Login_funcionarioToken;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\Login_funcionario;
use App\Models\UsuarioToken;
use App\Models\Usuario;
use Illuminate\Support\Facades\Cookie;

class AdminLogadoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    
        public function handle(Request $request, Closure $next): Response
    {
        if (Cookie::has('token') && Cookie::has('usuario_id')){
            $admin = Cookie::get('usuario_id');
            $token = Cookie::get('token');
            $token_funcionario = Login_funcionarioToken::where('login_funcionario_id', $admin)
                ->where('token', $token)
                ->where('valido_ate', '>', Carbon::now())
                ->first();
            return $next($request);
            if($token_funcionario){
                $usuario = Usuario::find($usuario_id);
                $request->usuario = $usuario;
                $admin = Login_funcionario::where('usuario_id', $usuario_id)->first();
                if($admin && $admin->cargo != ' Aluno'){
                    return $next($request);
                }else{
                    Cookie::forget('token');
                    Cookie::forget('usuario_id');
                    return redirect()->route('Login');
                }
            }
        
        }else{
            Cookie::forget('token');
            Cookie::forget('usuario_id');
            return redirect()->route('Login');
        }

        

    
    }
}
