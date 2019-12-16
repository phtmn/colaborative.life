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

@section('content')
<div class="x_panel">

    <div class="x_title">
        <a href="{{route('admin-osc.index')}}"><i class="fa fa-arrow-left"></i> Voltar para Lista</a>

        <h3>Informações de: {{$osc->nome_fantasia}}</h3>
    </div>


    <div class="x_content">
        <div class="col-md-8">
            <h3>Dados Gerais</h3>
            <ul>
                <li>Fantasia: <b>{{$osc->nome_fantasia}}</b></li>
                <li>Telefone: <b>{{$osc->telefone}}</b></li>
                <li>Responsável: <b>{{$osc->responsavel_legal}}</b></li>
                <li>Email: <b>{{$osc->email}}</b></li>
                <li>Site: <b>{{$osc->site}}</b></li>
                <li>Fansatisa: <b>{{$osc->nome_fantasia}}</b></li>
            </ul>
            <h4>Metas ODS</h4>
            @foreach($metas as $meta)
                <ul>
                    <li><b class="text-dark">{{$meta->meta_codigo}}</b> - {{$meta->meta_descricao}}</li>
                </ul>

            @endforeach
        </div>

        <div class="col-md-4">
            <div class="buttons d-flex">
                @if($osc->ativa !=1)
                    <a href="{{route('oscs.active',$osc->id)}}" class="btn btn-info btn-block">Autorizar Esse Cadastro</a>
                @else
                    <a href="#" class="btn btn-success btn-block">Instituição Ativa na plataforma</a>
                @endif

            </div>
        </div>
    </div>


</div>

<div class="x_panel">
    <div class="x_title">
        <h3>Projetos Enviados</h3>
    </div>

    <div class="x_content">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME DO PROJETO</th>
                    <th>VALOR META</th>
                    <th>VALOR PROJETO</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($projetos as $p)
                <tr>
                    <td>{{$p->uui ? $p->uuid : $p->id }}</td>
                    <td>{{$p->nome_projeto}}</td>
                    <td>{{$p->valor_meta}}</td>
                    <td>{{$p->valor_projeto}}</td>
                    <td>
                        <a href="{{route('projetos.active',$p->id)}}" class="btn btn-xs btn-success">Autorizar Projeto</a>
                    </td>

                </tr>
                    @empty
                <p>Não foram enviados projetos</p>
                @endforelse
            </tbody>
        </table>
    </div>

</div>




@stop