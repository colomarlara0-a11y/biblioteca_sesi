<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentarios_privados;

class Comentarios_privadosController extends Controller
{
    Public function comentarios_privados_html(Request $request)
    {
        return view('Comentarios_privados');
    }
    public function cadastrarComentarios_privados(Request $request){

        $request->validate([
            'usuario_id' => 'required|integer',
            'livro_id' => 'required|integer',
            'comentario' => 'required|string|max:255',
            'data_criacao' => 'required|date',
        ]);

        try {

            $comentario = new Comentarios_privados();
            $comentario->usuario_id = $request->usuario_id;
            $comentario->livro_id = $request->livro_id;
            $comentario->data_criacao = now();
            $comentario->comentario = $request->comentario;
            $comentario->save();

            return response()->json(['message' => 'Comentário cadastrado com sucesso!','erro' =>'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar comentário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
    public function ver_comentariop(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]); 
        $comentario = Comentarios_privados::find($request->id);
        if ($comentario) {
            return response()->json(['comentario' => $comentario, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Comentário não encontrado', 'erro' => 's'], 200);
        }           
    }
    public function listar_comentariosp(Request $request){
        $comentario = Comentarios_privados::all();
        return response()->json(['comentario' => $comentario, 'erro' => 'n'], 200);
    }
    public function alterar_comentariop(Request $request){
        $request->validate([
            'id' => 'required|integer|',
            'usuario_id' => 'integer',
            'livro_id' => 'integer',
            'comentario' => 'string|max:255',
            'data_criacao' => 'date',
        ]);
        try {
            $comentario = Comentarios_privados::find($request->id);
            if ($comentario) {  
                return response()->json(['message' => 'Comentário alterado com sucesso!', 'erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Comentário não encontrado', 'erro' => 's'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar comentário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }   
    }
    public function deletar_comentariop(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        try {
            $comentario = Comentarios_privados::find($request->id);
            if ($comentario) {
                $comentario->delete();
                return response()->json(['message' => 'Comentário deletado com sucesso!', 'erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Comentário não encontrado', 'erro' => 's'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar comentário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

}
