@extends('admin.home')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
<span class="mask bg-gradient-default opacity-10"></span>
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
                    <b> Projetos Cadastrados</b>
                </div>
                <div class="table-responsive">        
                   <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="text-left">#</th>                            
                            <th scope="col" class="text-left">Nº do PRONAC</th>
                            <th scope="col" class="text-left">Landing Page</th>
                            <th scope="col" class="text-left">Status</th>
                            <th scope="col" class="text-left">Publicado</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $d)
                            <tr>
                                <td>{{$d->id}}</td>
                                <td><a href="{{route('admin-projetos.show',$d->id)}}" >{{$d->num_pronac}} </a></td>
                                <td> <a href="{{ route('detalhe.projeto', $d->num_pronac) }}" Target=”_blank” data>
                                            <span class="text-primary {{ (($d->status == 'Aprovado para Captação' OR $d->status == 'Captação Finalizada') AND $d->publicado) ? "" : "disabled-link" }}"> Acessar </span>
                                        </a></td> 
                                <td>
                                    
                                @if($d->status == 'Captação em análise' OR $d->status == 'Não Aprovado para Captação')
                                            <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">{{ $d->status }}</span>
                                    </span>
                                             @else
                                            <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>
                                        <span class="status">{{ $d->status }}</span>
                                    </span>       
                                             @endif
                                    </td>
                                    <td>
                                        @if($d->status == 'Aprovado para Captação' OR $d->status == 'Captação Finalizada')
                                                 <label class="custom-toggle custom-toggle-success">
                                                <input type="checkbox" class="js-checkbox" data-id="{{ $d->id }}" data-route="{{ route('projeto.publicate', [ 'id' => $d->id ]) }}" {{ ($d->publicado) ? 'checked' : '' }}>
                                                <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
                                            </label>
                                        @else
                                                                         
                                        @endif
                                </td>                                                                                                                               
                            </tr>
                        @empty
                            <p class="label-red">Nenhum projeto cadastrado</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    </div>
@stop
