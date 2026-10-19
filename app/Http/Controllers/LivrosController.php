<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;

class LivrosController extends Controller
{
    Public function livros_html(Request $request)
    {
        return view('Livros');
    }
    public function cadastrarLivros(Request $request){

        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'ano_publicacao' => 'required|integer',
            'descricao' => 'required|string|max:255',
        ]);

        try {

            $livro = new Livros();
            $livro->titulo = $request->titulo;
            $livro->autor = $request->autor;
            $livro->genero = $request->genero;
            $livro->ano_publicacao = $request->ano_publicacao;
            $livro->descricao = $request->descricao;
            $livro->save();

            return response()->json(['message' => 'Livro cadastrado com sucesso!','erro' =>'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar livro', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }     
    public function ver_livro(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        $livro = Livros::find($request->id);
        if ($livro) {
            return response()->json(['Livros' => $livro, 'erro' => 'n'], 200);
            } else {
            return response()->json(['message' => 'Livro não encontrado', 'erro' => 's'], 200);
            }
    }
    public function listar_livros(Request $request){
        $livro = Livros::all();
        return response()->json(['Livros' => $livro, 'erro' => 'n'], 200);
    }
    public function alterar_livro(Request $request){
        $request->validate([
            'id' => 'required|integer|',
            'titulo' => 'string|max:255',
            'autor' => 'string|max:255',
            'ano_publicacao' => 'integer',
            'descricao' => 'string|max:255',
        ]);
        try {
            $livros = Livros::find($request->id);
            if ($livros) {
                $livros->update($request->only(['titulo', 'autor', 'ano_publicacao', 'descricao']));
                return response()->json(['message' => 'Livro alterado com sucesso!', 'erro' => 'n'], 200);
            } else {
                return response()->json(['message' => 'Livro não encontrado', 'erro' => 's'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar livro', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
    public function deletar_livro(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        try {
            $livros = Livros::find($request->id);
            if ($livros) {
                $livros->delete();
                return response()->json(['message' => 'Livro deletado com sucesso!', 'erro' => 'n'], 200);
            } else {    
                return response()->json(['message' => 'Livro não encontrado', 'erro' => 's'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar livro', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);}
    }
}