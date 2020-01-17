@extends('admin.home')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
<span class="mask bg-gradient-default opacity-7"></span>
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

<div class="container mt--7">
<div class="row">
    <div class="col-md-12 mt-5">
        <div class="card shadow">
            <div class="card-body bg-transparent">                
                    <p class="text-default font-weight-bold mt-2">Dados Gerais</p>
                    <hr>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Nome completo </label>
                        <div class="col-sm-7">
                            <input type="text" name="nome_fantasia" class="form-control" value="{{$user->name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">E-mail</label>
                        <div class="col-sm-5">
                            <input type="text" name="nome_fantasia" class="form-control" value="{{$user->email}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Perfil  </label>
                        <div class="col-sm-3">
                            <input type="text" name="num_doc" class="form-control" value="{{ strtoupper($user->tipo_conta) }} " readonly>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label text-right">Telefone </label>
                        <div class="col-sm-3">
                            <input type="text" name="telefone" class="form-control" value=" " id="telefone" placeholder="">
                        </div>
                    </div> -->
                    <div class="card-footer text-center">
                    <a class="btn btn-outline-default" href="{{route('admin-users.index')}}">
                            <i class="ni ni-bold-left"></i> Voltar
                        </a>
                       
                    </div>              
            </div>
        </div>
    </div>
</div>
</div>




@stop