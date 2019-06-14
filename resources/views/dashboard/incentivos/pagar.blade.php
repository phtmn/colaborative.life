@extends('site.master')

@section('content')

    @include('dashboard.menu')

    <div class="container">
        <p>Obrigado(a) por apoiar essa causa, para concluir o processo de investimento, por clique no botao abaixo.
        Voce sera redirecionado para um ambiente seguro.
        </p>
        <a href="{{$url}}" target="blank" class="btn btn-success">Investir com Seguranca</a>
    </div>

    @stop