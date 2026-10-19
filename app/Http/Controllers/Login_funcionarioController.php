<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login_funcionario;

class Login_funcionarioController extends Controller
{
    Public function login_funcionario_html(Request $request)
    {
        return view('Login_funcionario');
    }

    public function cadastrarLogin_funcionario(Request $request){

        $request->validate([
            'cargo' => 'required|string|max:255',
            'nif' => 'required|string|max:255',
            'usuario_id' => 'required|integer',
        ]);
        
        try {

            $login_funcionario = new Login_funcionario();
            $login_funcionario->cargo = $request->cargo;
            $login_funcionario->nif = $request->nif;
            $login_funcionario->usuario_id = $request->usuario_id;
            $login_funcionario->save();

            return response()->json(['message' => 'Login do funcionário cadastrado com sucesso!','erro' =>'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar login do funcionário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }

     
    }
    public function ver_login_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        $login_funcionario = Login_funcionario::find($request->id);
        if ($login_funcionario) {
            return response()->json(['login_funcionario' => $login_funcionario, 'erro' => 'n'], 200);
            } else {
            return response()->json(['message' => 'Login do funcionário não encontrado', 'erro' => 's'], 200);
            }
    }
    public function listar_login_funcionarios(Request $request){
        $login_funcionario = Login_funcionario::all();
        return response()->json(['login_funcionario' => $login_funcionario, 'erro' => 'n'], 200);
    }
    public function alterar_login_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer|',
            'cargo' => 'string|max:255',
            'nif' => 'string|max:255',
            'usuario_id' => 'integer',
        ]);
        try {
            $login_funcionario = Login_funcionario::find($request->id);
            if ($login_funcionario) {
                $login_funcionario->cargo = $request->cargo ?? $login_funcionario->cargo;
                $login_funcionario->nif = $request->nif ?? $login_funcionario->nif;
                $login_funcionario->usuario_id = $request->usuario_id ?? $login_funcionario->usuario_id;
                $login_funcionario->save();
                return response()->json(['message' => 'Login do funcionário alterado com sucesso!', 'erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Login do funcionário não encontrado', 'erro' => 's'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar login do funcionário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
    public function deletar_login_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        try {
            $login_funcionario = Login_funcionario::find($request->id);
            if ($login_funcionario) {
                $login_funcionario->delete();
                return response()->json(['message' => 'Login do funcionário deletado com sucesso!', 'erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Login do funcionário não encontrado', 'erro' => 's'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar login do funcionário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
}
