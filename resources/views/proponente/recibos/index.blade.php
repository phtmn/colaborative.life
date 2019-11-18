@extends('layouts.dashboard')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-warning opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-single-copy-04 text-white"></i> Recibos</h1>
            </div>
        </div>
    </div>
</div>
@stop
@section('conteudo')
<div class="container mt--7">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <a href="{{route('recibos.create')}}" class="btn btn-warning "><i class="ni ni-fat-add"></i> Adicionar Recibo</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-left">Nº do PRONAC</th>
                                <th scope="col" class="text-left">Landing Page</th>
                                <th scope="col" class="text-left">Status</th>
                                <th scope="col" class="text-left">Publicado</th>
                                <th scope="col" class="text-left">#</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
