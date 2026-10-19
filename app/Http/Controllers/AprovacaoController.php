<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprovacao;
class AprovacaoController extends Controller
{
    Public function aprovacao_html(Request $request)
    {
        return view('Aprovacao');
    }
    public function aprovacao(Request $request){

        $request->validate([
            'aprovado' => 'required|integer',
            'reprovado' => 'required|integer',
            'comentario_id' => 'required|integer',
            'observacao' => 'required|string|max:255',
            'data_aprovacao' => 'required|date',
            'login_funcionario_id' => 'required|integer',
        ]);

        try {

            $aprovacao = new Aprovacao();
            $aprovacao->comentario_id = $request->comentario_id;
            $aprovacao->login_funcionario_id = $request->login_funcionario_id;
            $aprovacao->aprovado = $request->aprovado;
            $aprovacao->reprovado = $request->reprovado;
            $aprovacao->status = $request->status;
            $aprovacao->observacao = $request->observacao;
            $aprovacao->data_aprovacao = now();

            $aprovacao->save();

            return response()->json(['message' => 'Aprovação cadastrada com sucesso!','erro' =>'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar aprovação', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
    public function ver_aprovacao(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        $aprovacao = Aprovacao::find($request->id);
        if ($aprovacao) {
            return response()->json(['Aprovacao' => $aprovacao, 'erro' => 'n'], 200);
            } else {
            return response()->json(['message' => 'Aprovação não encontrada', 'erro' => 's'], 200);
            }
    }
    public function listar_aprovacoes(Request $request){
        $aprovacao = Aprovacao::all();
        return response()->json(['Aprovacao' => $aprovacao, 'erro' => 'n'], 200);
    }   
    public function alterar_aprovacao(Request $request){
        $request->validate([
            'id' => 'required|integer|',
            'comentario_id' => 'integer',
            'status' => 'string|max:255',    
        ]); 
        try {
            $aprovacao = Aprovacao::find($request->id);
            if ($aprovacao) {
                $aprovacao->comentario_id = $request->comentario_id;
                $aprovacao->status = $request->status;
                $aprovacao->save();
                return response()->json(['message' => 'Aprovação alterada com sucesso!','erro' =>'n'], 200);
            } else {
                return response()->json(['message' => 'Aprovação não encontrada', 'erro' => 's'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar aprovação', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
    public function deletar_aprovacao(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        try {
            $aprovacao = Aprovacao::find($request->id);
            if ($aprovacao) {
                $aprovacao->delete();
                return response()->json(['message' => 'Aprovação deletada com sucesso!','erro' =>'n'], 200);
            } else {
                return response()->json(['message' => 'Aprovação não encontrada', 'erro' => 's'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar aprovação', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        
        }
    }
}