<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leituras;

class LeiturasController extends Controller
{
    Public function leituras_html(Request $request)
    {
        return view('Leituras');
    }
    
    public function cadastrarLeituras(Request $request){

        $request->validate([
            'usuario_id' => 'required|integer',
            'livro_id' => 'required|integer',
            'data_adicao' => 'required|date',
        ]);

        try {

            $leitura = new Leituras();
            $leitura->usuario_id = $request->usuario_id;
            $leitura->livro_id = $request->livro_id;
            $leitura->data_adicao = $request->data_adicao;
            $leitura->save();

            return response()->json(['message' => 'Leitura cadastrada com sucesso!','erro' =>'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar leitura', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
    public function ver_leitura(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        $leitura = Leituras::find($request->id);
        if ($leitura) {
            return response()->json(['Leituras' => $leitura, 'erro' => 'n'], 200);
            } else {
            return response()->json(['message' => 'Leitura não encontrada', 'erro' => 's'], 200);
            }
    }
    public function listar_leituras(Request $request){
        $leitura = Leituras::all();
        return response()->json(['Leituras' => $leitura, 'erro' => 'n'], 200);
    }
    
    public function alterar_leitura(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:leituras,id',
            'usuario_id' => 'required|integer',
            'livro_id' => 'required|integer',
            'data_adicao' => 'required|date',
        ]);

        try {
            $leitura = Leituras::findOrFail($request->id);

            $leitura->usuario_id = $request->usuario_id;
            $leitura->livro_id = $request->livro_id;
            $leitura->data_adicao = $request->data_adicao;

            $leitura->save();

            return response()->json([
                'message' => 'Leitura alterada com sucesso!',
                'erro' => 'n',
                'dados' => $leitura->fresh()
            ], 200);

        } catch (\Throwable $th) {

            return response()->json([
                'message' => 'Erro ao alterar leitura',
                'erro' => 's',
                'msg_erro' => $th->getMessage()
            ], 500);
        }
    }


    public function deletar_leitura(Request $request){
        $request->validate([
            'id' => 'required|integer|',
        ]);
        $leitura = Leituras::find($request->id);
        if ($leitura) {
            $leitura->delete();
            return response()->json(['message' => 'Leitura deletada com sucesso', 'erro' => 'n'], 200);
            } else {
            return response()->json(['message' => 'Leitura não encontrada', 'erro' => 's'], 200);
            }
    }
}

