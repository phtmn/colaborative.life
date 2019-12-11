@extends('admin.home')

@section('content')

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Projetos<small>Lista de Projetos</small></h2>
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
                            <th>#ID</th>
                            <th>PRONAC</th>
                            <th>Status</th>
                            <th>Telefone</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $d)
                            <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->num_pronac}}</td>
                                <td>{{$d->status}}</td>
                                <td>{{$d->telefone}}</td>
                                <td>{{$d->uf}}</td>
                                <td>
                                    <a href="{{route('admin-projetos.show',$d->id)}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Detalhes</a>
                                </td>
                            </tr>
                        @empty
                            <p class="label-info">Nenhum registro encontrado</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@stop
