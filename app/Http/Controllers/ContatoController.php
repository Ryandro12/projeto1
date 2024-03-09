<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    public function index(){
        $contatos = [[ "tema"=>"Interface acessivel", "titulo" =>
        "App mobile com direitos da pessoa deficiente"],
        [ "tema"=>"Pedofilia", "titulo" => "App mobile
        com orientações gerais aos pais" ]];
        return view("contatos.index",
                compact('contatos'));
    }

}
