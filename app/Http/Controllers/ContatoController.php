<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        // $contatos = [
        //     (object)["nome"=>"Maria","tel"=>54455423132354],
        //     (object)["nome"=>"Jose","tel"=>44454513554]
        // ];

        // $contato = new App\Contato();
        // $con = $contato->lista();
        // dd($con->nome);


        return view ('telacriada');
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
