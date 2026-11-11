<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class homeController extends Controller
{
    public function mostraHome(request $request){
        $usuario = $request->usuario;
        $admin = $request->admin;
        return view('home')->with('usuario', $usuario)->with('admin', $admin);
        //usuario é o nome da variavel que vai ser usada na view, $request->usuario é o valor que vai ser passado para a view
        
    }
    
}

