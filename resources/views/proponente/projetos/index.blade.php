@extends('layouts.dashboard')

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
@section('conteudo')
<div class="container mt--7">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <a href="{{route('projetos.create')}}" class="btn btn-success "><i class="ni ni-fat-add"></i> Adicionar Projeto</a>
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
                            @forelse($data as $d)
                            <tr>
                                <td>
                                     {{$d->num_pronac}}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">                                        
                                        <span class="text-primary"> Acessar </span> 
                                        <!-- acessar só se tiver aprovado -->
                                    </span>
                                </td>
                                <td>
                                    @if($d->ativo == '0')
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">Em análise</span>
                                    </span>
                                     @else
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>
                                        <span class="status">Aprovado</span>
                                    </span>       
                                     @endif
                                </td>
                                <td>
                                    @if($d->ativo == '1')
                                         <label class="custom-toggle custom-toggle-success">
                                        <input type="checkbox" class="js-checkbox" data-id="{{ $d->id }}" data-route="{{ route('projeto.publicate', [ 'id' => $d->id ]) }}" {{ ($d->publicado) ? '' : 'checked' }}>
                                        <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
                                    </label>
                                    @else
                                                                 
                                    @endif
                                </td>
                                <td>
                                <div class="media align-items-center">
                                        <div class="media-body">
                                            <a class="text-success" href="{{route('projetos.edit',$d->id)}}"> Editar</i></a>
                                        </div>
                                    </div>                                
                                </td>
                            </tr>
                            @empty
                            <p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhum projeto! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
