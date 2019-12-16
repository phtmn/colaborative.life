@extends('admin.home')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-success opacity-8"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-collection text-white"></i> Projetos</h1>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Investimentos<small>Lista dos últimos Investimentos</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Investidor</th>
                                <th>Instituição</th>
                                <th>Valor</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->usuario()->name}}</td>
                                    <td>{{$d->osc->nome_fantasia}}</td>
                                    <td>{{ number_format($d->valor,2,',','.')}}</td>
                                    <td>
                                        <a href="{{route('admin-investimentos.show',$d->id)}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Detalhes</a>
{{--                                        <a href="{{route('detalhe.osc',$d->id)}}" target="_blank" class="btn btn-warning btn-xs"><i class="fa fa-sitemap"></i></a>--}}
                                    </td>
                                </tr>
                            @empty
                                <h4 class="label label-info">Nenhum registro encontrado</h4>                 
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@stop