@extends('admin.home')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Lista de Osc <small>Lista dos últimos cadastros</small></h2>
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
                                <th>Codigo Interno</th>
                                <th>Nome Fantasia</th>
                                <th>Fundação</th>
                                <th>Data Cadastro</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->nome_fantasia}}</td>
                                    <td>{{$d->ano_fundacao}}</td>
                                    <td>{{ date('d/m/Y',strtotime($d->created_at))}}</td>
                                    <td>
                                        <a href="{{route('admin-osc.show',$d->id)}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Detalhes</a>
                                        <a href="{{route('detalhe.osc',$d->id)}}" target="_blank" class="btn btn-warning btn-xs"><i class="fa fa-sitemap"></i></a>
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