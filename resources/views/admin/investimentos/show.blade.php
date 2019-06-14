@extends('admin.home')

@section('content')
<div class="x_panel">

    <div class="x_title">
        <a href="{{route('admin-investimentos.index')}}"><i class="fa fa-arrow-left"></i> Voltar para Lista</a>

        <h3>Valor do Investimento: R$ {{ number_format($investimento->valor,2,',','.') }}</h3>
    </div>


    <div class="x_content">
        <div class="col-md-8">
            <h3>Dados Gerais</h3>
            <ul>
                <li>FORMA_PGTO: <b>{{$investimento->forma_pagamento}}</b></li>
                <li>MP_STATUS: <b>{{$investimento->mp_status ?? ''}}</b></li>
                <li>STATUS_INTERNO: <b>{{$investimento->status_interno ?? ''}}</b></li>
            </ul>

        </div>


    </div>


</div>
@stop