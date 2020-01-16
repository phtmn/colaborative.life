@extends('layouts.dashboard')
@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-blue opacity-6"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-collection text-white"></i> Projetos </h1>
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
                <form action="{{route('projetos.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="text-blue font-weight-bold mt-2">Dados Gerais</p>
                    <hr>
                    @include('proponente.projetos.forms.section1_create')
                    <p class="text-blue font-weight-bold mt-2">Dados do Proponente </p>
                    <hr>
                    @include('proponente.projetos.forms.section2_create')
                    <p class="text-blue font-weight-bold mt-2">Dados Bancários </p>
                    <hr>
                    @include('proponente.projetos.forms.section3_create')
                    <p class="text-blue font-weight-bold mt-2">Uploads </p>
                    <hr>
                    @include('proponente.projetos.forms.section4_create')
                    <!-- <p class="text-success mt-2">Equipe </p>
                    <hr>
                    @include('proponente.projetos.forms.section5_create') -->
                    <!-- <p class="text-success mt-2">Equipe </p>
                    <hr>                   
                    <p class="text-success mt-2">Upload </p>
                    <hr>
                    <p class="text-success mt-2">Galeria no max 4</p>
                    <hr> -->
                    <div class="card-footer text-center">
                    <a class="btn btn-primary" href="{{ route('projetos.index') }}">
                            <i class="ni ni-bold-left"></i> Voltar
                        </a>
                        <button type="submit" class="btn btn-outline-primary"><i class="ni ni-check-bold"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop