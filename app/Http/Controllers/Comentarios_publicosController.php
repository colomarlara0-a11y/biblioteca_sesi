<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentarios_publicos;

class Comentarios_publicosController extends Controller
{
    Public function comentarios_publicos_html(Request $request)
    {
        return view('Comentarios_publicos');
    }
    public function cadastrarComentarios_publicos(Request $request){

        $request->validate([
            'usuario_id' => 'required|integer',
            'livro_id' => 'required|integer',
            'comentario' => 'required|string|max:255',
            'data_criacao' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        try {

            $comentario = new Comentarios_publicos();
            $comentario->usuario_id = $request->usuario_id;
            $comentario->livro_id = $request->livro_id;
            $comentario->status = $request->status;
            $comentario->data_criacao = now();
            $comentario->comentario = $request->comentario;
            $comentario->save();

            return response()->json(['message' => 'Comentário cadastrado com sucesso!','erro' =>'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar comentário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
    public function ver_comentario(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        $comentario = Comentarios_publicos::find($request->id);
        if ($comentario) {
            return response()->json(['Comentarios_publicos' => $comentario, 'erro' => 'n'], 200);
            } else {
            return response()->json(['message' => 'Comentário não encontrado', 'erro' => 's'], 200);
            }   
    }
    public function listar_comentarios(Request $request){
        $comentario = Comentarios_publicos::all();
        return response()->json(['Comentarios_publicos' => $comentario, 'erro' => 'n'], 200);
    }
    public function alterar_comentario(Request $request){
        $request->validate([
            'id' => 'required|integer|',
            'usuario_id' => 'integer',
            'livro_id' => 'integer',
            'comentario' => 'string|max:255', 
            'data_criacao' => 'date',
            'status' => 'string|max:255',
        ]);
        try {
            $comentario = Comentarios_publicos::find($request->id);
            if ($comentario) {
                $comentario->update($request->only(['usuario_id', 'livro_id', 'comentario', 'data_criacao', 'status']));
                return response()->json(['message' => 'Comentário alterado com sucesso!', 'erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Comentário não encontrado', 'erro' => 's'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar comentário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
        
     }
    public function deletar_comentario(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        $comentario = Comentarios_publicos::find($request->id);
        if ($comentario) {
            $comentario->delete();
            return response()->json(['message' => 'Comentário deletado com sucesso', 'erro' => 'n'], 200);
            } else {
            return response()->json(['message' => 'Comentário não encontrado', 'erro' => 's'], 200);
            }
    }
}
