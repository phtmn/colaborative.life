@extends('layouts.dashboard') 

@section('cabecalho')
    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-success opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                
				<h1 class="display-2 text-white"> # Projetos</h1>
				{{--<h1 class="display-2 text-white">Olá, {{ auth()->user()->apelido}}</h1> --}}
                {{--    <p class="text-white mt-0 mb-2">Cadastre seus projetos e receba investimentos da nossa rede de investidores (patrocinadores/doadores). #SimEuQuero. </p> --}}
                    

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
                                <th scope="col">Nome </th>
                                <th scope="col">Custo (R$)</th>
                                <th scope="col">Situação</th>
                                <th scope="col"></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                            <a href="{{route('projetos.edit',$d->id)}}"></i>{{$d->nome_projeto}}</a>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        R$ {{ number_format($d->valor_meta,2,',','.') }}
                                    </td>
                                    <td>
                                      <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i> {{$d->status}}
                                      </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                        <button type="submit" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Em breve"><i class="ni ni-cloud-upload-96"></i> Upload .PDF</button>
                                        
                                        </a>
                                            @if($d->arquivo != null)
                                                <a href="{{ $d->arquivo}}" target="_blank"> Visualizar seu Arquivo</a>
                                            @endif
                                           
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <p  class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhum projeto! <span></span></p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
				 </div>
            </div>
     
    </div>
	</div>

@stop