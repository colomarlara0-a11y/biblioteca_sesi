<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;
use App\Models\UsuarioToken;
use App\Models\Usuario;
use Carbon\Carbon; 
use App\Models\Login_funcionario;
class LogadoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Cookie::has('token') && Cookie::has('usuario_id')){
            $usuario_id = Cookie::get('usuario_id');
            $token = Cookie::get('token');
            $token_usuario = UsuarioToken::where('usuario_id', $usuario_id)
                ->where('token', $token)
                ->where('valido_ate', '>', Carbon::now())
                ->first();
            return $next($request);
            if($token_usuario){
                $usuario = Usuario::find($usuario_id);
                $request->usuario = $usuario;
                $admin = Login_funcionario::where('usuario_id', $usuario_id)->first();
                if($admin){
                    $request->admin = 'S';
                }else{
                    $request->admin = 'N';
                }
                return $next($request);
            }else{
                Cookie::forget('token');
                Cookie::forget('usuario_id');
                return redirect()->route('Login');
            }
        
        }else{
            Cookie::forget('token');
            Cookie::forget('usuario_id');
            return redirect()->route('Login');
        }

        

    }
}
