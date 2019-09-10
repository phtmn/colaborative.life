@extends('layouts.dashboard') 

@section('cabecalho')
    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-success opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                
				<h1 class="display-2 text-white"> <i class="ni ni-collection text-white"></i> Projetos</h1>
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
                                <th scope="col">Nº do PRONAC</th>
                                <th scope="col">Status</th>
                                
                                
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
                                            {{$d->num_pronac}}
                                    </td>
                                    <td>
                                        Em análise... Publicado... Habilitado para captação
                                    </td>
                                    <!-- <td>
                                        
                                    </td> -->
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