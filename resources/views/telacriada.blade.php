@extends('template')

@section('titulo','TELA CRIADA')

@section('conteudo')

@foreach($contatos as $contato)
    
    <p>{{$contato->nome}}</p>
    <p>{{$contato->tel}}</p>
    <p>{{$contato->nacionalidade}}</p>

@endforeach

Mensaje de parabens

@endsection




