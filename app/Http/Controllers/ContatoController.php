<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"BENJAMIN","tel"=>5,"nacionalidade"=>"marroquina"],
            (object)["nome"=>"Jose","tel"=>44454513554,"nacionalidade"=>"brasileiro"]
        ];

        // $contato = new App\Contato();
        // $con = $contato->lista();
        // dd($con->nome);


        return view ('telacriada',compact('contatos'));
    }

    public function bla()
    {
        return "Esse é o bla";
    }

    public function store(Request $a)
    {
        return "FOI o POST " .$a;
    }

}
