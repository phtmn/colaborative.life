@extends('admin.home')
@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-blue opacity-6"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-single-copy-04 text-white"></i> Recibos </h1>
            </div>
        </div>
    </div>
</div>
@stop
@section('conteudo')
<div class="container-mt--7">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body bg-transparent">
                <form action="{{route('admin-recibos.storeWithInvestimento', request()->route()->parameter('investimento_id'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="text-blue font-weight-bold mt-2">Dados Gerais</p>
                    <hr>
                    @include('proponente.recibos.forms.section1_create')
                    <p class="text-blue font-weight-bold mt-2">Dados da Participação </p>
                    <hr>
                    @include('proponente.recibos.forms.section2_create')
                    <p class="text-blue font-weight-bold mt-2">Dados do Incentivador </p>
                    <hr>
                    @include('proponente.recibos.forms.section3_create')
                    <p class="text-blue font-weight-bold mt-2">Dados do Projeto Beneficiado </p>
                    <hr>
                    @include('proponente.recibos.forms.section4_create')
                    <p class="text-blue font-weight-bold mt-2">Dados do Declarante <b class="text-blue" data-toggle="tooltip" title="NO CASO DE PESSOA JURÍDICA " >°</b> </p>
                    <hr>
                    @include('proponente.recibos.forms.section5_create')

                    <div class="card-footer text-center">
                    <a class="btn btn-primary" href="{{ route('recibos.index') }}">
                        <i class="ni ni-bold-left"></i> Voltar
                    </a>
                    <button type="submit" class="btn btn-outline-primary"><i class="ni ni-check-bold"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
