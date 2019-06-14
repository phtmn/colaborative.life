@extends('investidor.painel')

@section('conteudo_painel')
    <div class="container" style="margin-top:20px; padding:20px">
        <div class="row row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="display-3">Muito Obrigado(a), {{ auth()->user()->apelido }}</h3>
                        <p>Organização Beneficiada: {{$investimento->osc->nome_fantasia}}</p>
                        <p>Organização Projeto Beneficiado: {{$investimento->projeto->nome_projeto ?? 'não informado'}}</p>
                        <p class="text-success font-weight-900">Valor do Investimento: R$ {{ number_format($investimento->valor,2,',','.')}}
                        <p>Situação: {{$investimento->status_interno}}</p>

                        <a href="{{route('perfil.index')}}" class="btn btn-sm btn-default">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

