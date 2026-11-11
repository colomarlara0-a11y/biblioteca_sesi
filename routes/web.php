<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AprovacaoController;
use App\Http\Controllers\Comentarios_privadosController;
use App\Http\Controllers\Comentarios_publicosController;
use App\Http\Controllers\Login_funcionarioController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\LeiturasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\homeController;
use App\Http\Middleware\LogadoMiddleware;
use App\Http\Middleware\AdminLogadoMiddleware;
use App\Http\Middleware\FuncionarioApiMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Usuario', [UsuarioController::class, 'usuario_html'])->name('Usuario');
Route::get('/Aprovacao', [AprovacaoController::class, 'aprovacao_html'])->name('Aprovacao');
Route::get('/Comentarios_privados', [Comentarios_privadosController::class, 'comentarios_privados_html'])->name('Comentarios_privados');
Route::get('/Comentarios_publicos', [Comentarios_publicosController::class, 'comentarios_publicos_html'])->name('Comentarios_publicos');
Route::get('/Login_funcionario', [Login_funcionarioController::class, 'login_funcionario_html'])->name('Login_funcionario')->middleware(FuncionarioApiMiddleware::class)->middleware(AdminLogadoMiddleware::class);
Route::get('/Livros', [LivrosController::class, 'livros_html'])->name('Livros');
Route::get('/Leituras', [LeiturasController::class, 'leituras_html'])->name('Leituras');
Route::get('/Login', [LoginController::class, 'mostrarlogin'])->name('Login');
Route ::get('/home', [homeController::class, 'mostraHome'])->name('home')->middleware(LogadoMiddleware::class);
