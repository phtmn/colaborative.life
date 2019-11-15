@extends('layouts.dashboard')

@section('cabecalho')

    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-info opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <h1 class="display-2 text-white">Envie seus Documentos</h1>
                    <p class="text-white mt-0 mb-2">Precisamos de algumas informações para incluir o seu projeto, assim que finalizar ele será enviado
                        para aprovação da plataforma.
                    </p>
                    <a href="" class="btn btn-success m-4" data-toggle="modal" data-target="#modal-default"> Enviar um Documento</a>

                </div>
            </div>
        </div>
    </div>
@stop

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <label for="" class="text-center">Seus Documentos aparecerão aqui</label>
                </div>
                <div class="container d-flex">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Tipo</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($data as $d)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{$d->nome}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                      {{$d->descricao}}
                                    </td>
                                    <td class="pull-right">
                                      <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i> {{$d->tipo}}
                                      </span>
                                        <a href="{{$d->aws_url}}" target="_blank">Baixar</a>
                                    </td>
                                </tr>
                            @empty
                                <p style="color:red">Você ainda não enviou nenhum documento! <span></span></p>
                            @endforelse
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"  role="document">
            {!! Form::open(['route'=>'documentos.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Upload</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::text('nome',null,['class'=>'form-control','placeholder'=>'O que é esse documento?']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('descricao',null,['class'=>'form-control','placeholder'=>'Uma breve descrição']) !!}
                    </div>
                    <div class="form-group">
                    {!! Form::select('tipo',[ 'pdf'=>'PDF',
                                              'doc'=>'Documento Texto',
                                              'xls'=>'Planilha Excel']
                         ,null,['class'=>'form-control','placeholder'=>'Selecione um tipo']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::file('file',null,['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
