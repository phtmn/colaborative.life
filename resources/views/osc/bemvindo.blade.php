@extends('layouts.dashboard')


@section('cabecalho')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Olá, {{auth()->user()->apelido}}</h1>
                    <p class="text-white">Para que possamos viabilizar melhor seus recursos, vamos precisar colher dados importantes. Quanto mais dados e informações inserir, mais chances de sucesso com patrocinadores/doadores terá.</p>
                    <p class="text-white">Engajamento está diretamente ligado a transparência.</p>
                    <p class="text-white">Mostre aqui todo o seu talento e força e vamos construir essa rede de cooperação viva e cidadã.</p>
                    <p class="text-white font-weight-500">Boa sorte!</p>
                    <a href="{{ route('osc.create') }}" class="btn btn-outline-success">Preencher Perfil</a>
                </div>
            </div>
        </div>
    </div>
@stop



