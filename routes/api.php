
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Login_funcionarioController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\LeiturasController;
use App\Http\Controllers\Comentarios_publicosController;
use App\Http\Controllers\Comentarios_privadosController;
use App\Http\Controllers\AprovacaoController;

use App\Http\Middleware\LoginApiMiddleware;
use App\Http\Middleware\FuncionarioApiMiddleware;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/cadastrarUsuario', [UsuarioController::class, 'cadastrarUsuario']);
Route::post('/login', [UsuarioController::class, 'login']);

Route::get('/ver_usuario', [UsuarioController::class, 'ver_usuario']);
Route::get('/listar_usuarios', [UsuarioController::class, 'listar_usuarios']);
Route::get('/listar_usuarios_simples', [UsuarioController::class, 'listar_usuarios_simples']);
Route::get('/logout_u', [UsuarioController::class, 'logout_u'])->middleware(LoginApiMiddleware::class);

Route::put('/alterar_usuario', [UsuarioController::class, 'alterar_usuario'])->middleware(LoginApiMiddleware::class);
Route::delete('/deletar_usuario', [UsuarioController::class, 'deletar_usuario'])->middleware(LoginApiMiddleware::class);

Route::post('/login_funcionario', [Login_funcionarioController::class, 'login_funcionario']);
Route::get('/ver_login_funcionario', [Login_funcionarioController::class, 'ver_login_funcionario']);
Route::get('/listar_login_funcionarios', [Login_funcionarioController::class, 'listar_login_funcionarios']);

Route::put('/alterar_login_funcionario', [Login_funcionarioController::class, 'alterar_login_funcionario'])->middleware(FuncionarioApiMiddleware::class);
Route::delete('/deletar_login_funcionario', [Login_funcionarioController::class, 'deletar_login_funcionario'])->middleware(FuncionarioApiMiddleware::class);

Route::get('/usuario/{id}', [Login_funcionarioController::class, 'show']);
Route::post('/login_funcionario_login', [Login_funcionarioController::class, 'login_funcionario_login']);
Route::post('/logout', [Login_funcionarioController::class, 'logout']);

Route::post('/cadastrarLivros', [LivrosController::class, 'cadastrarLivros']);
Route::get('/listar_livros', [LivrosController::class, 'listar_livros']);
Route::get('/ver_livro', [LivrosController::class, 'ver_livro']);
Route::put('/alterar_livro', [LivrosController::class, 'alterar_livro']);
Route::delete('/deletar_livro', [LivrosController::class, 'deletar_livro']);

Route::post('/cadastrarLeituras', [LeiturasController::class, 'cadastrarLeituras']);
Route::get('/listar_leituras', [LeiturasController::class, 'listar_leituras']);
Route::get('/ver_leitura', [LeiturasController::class, 'ver_leitura']);
Route::put('/alterar_leitura', [LeiturasController::class, 'alterar_leitura']);
Route::delete('/deletar_leitura', [LeiturasController::class, 'deletar_leitura']);

Route::post('/cadastrarComentarios_publicos', [Comentarios_publicosController::class, 'cadastrarComentarios_publicos']);
Route::get('/listar_comentarios', [Comentarios_publicosController::class, 'listar_comentarios']);
Route::get('/ver_comentario', [Comentarios_publicosController::class, 'ver_comentario']);
Route::put('/alterar_comentario', [Comentarios_publicosController::class, 'alterar_comentario']);
Route::delete('/deletar_comentario', [Comentarios_publicosController::class, 'deletar_comentario']);

Route::post('/cadastrarComentarios_privados', [Comentarios_privadosController::class, 'cadastrarComentarios_privados']);
Route::get('/listar_comentariosp', [Comentarios_privadosController::class, 'listar_comentariosp']);
Route::get('/ver_comentariop', [Comentarios_privadosController::class, 'ver_comentariop']);
Route::put('/alterar_comentariop', [Comentarios_privadosController::class, 'alterar_comentariop']);
Route::delete('/deletar_comentariop', [Comentarios_privadosController::class, 'deletar_comentariop']);

Route::post('/aprovacao', [AprovacaoController::class, 'aprovacao']);
Route::get('/listar_aprovacoes', [AprovacaoController::class, 'listar_aprovacoes']);
Route::get('/ver_aprovacao', [AprovacaoController::class, 'ver_aprovacao']);
Route::put('/alterar_aprovacao', [AprovacaoController::class, 'alterar_aprovacao']);
Route::delete('/deletar_aprovacao', [AprovacaoController::class, 'deletar_aprovacao']);
