@extends('admin.home')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
<span class="mask bg-gradient-default opacity-10"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-circle-08 text-white"></i> Usuários</h1>
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
                     
                        <hr>
                        <div data-target="fields-fill-from-ajax" >
                            <p class="text-success mt-2">Dados do usuário </p>
                            <hr>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Versalic </label>
                                <div class="form-group col-md-3">
                                    <input type="text" name="tipo_pessoa" class="form-control" data-target="tipo-pessoa" value=" " readonly>
                                </div>

                                <div class="form-group col-md-5">
                                    
                                </div>

                                <div class="form-group col-md-3"></div>

                                

                                <div class="form-group col-md-4">
                                    
                                </div>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>

<div class="x_panel">

    <div class="x_title">
        <a href="{{route('admin-users.index')}}"><i class="fa fa-arrow-left"></i> Voltar para Lista</a>

        <h3>Informações de: {{$user->name}}</h3>
    </div>


    <div class="x_content">
        <h3>Dados da Conta</h3>
        <ul>
            <li>Nome: <b>{{$user->name}}</b></li>
            <li>Email: <b>{{$user->email}}</b></li>
            <li>Tipo de Conta: <b>{{ strtoupper($user->tipo_conta) }}</b></li>
        </ul>


    </div>
</div>



@stop