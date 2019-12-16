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

@section('conteudo')


<div class="row">

<div class="col-md-12">
        <div class="card shadow">
        <div class="card-header border-0">
                <b> Usuários Cadastrados</b>
            </div>
            <div class="table-responsive">        
               <table class="table align-items-center table-flush">
                    <thead>
                    <tr>
                        <th scope="col" class="text-left">#</th>                            
                        <th scope="col" class="text-left">Nome</th>
                        <th scope="col" class="text-left">E-mail</th>
                        <th scope="col" class="text-left">Perfil</th>
                        <th scope="col" class="text-left">Data de Cadastro</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td><a href="{{route('admin-users.show',$d->id)}}" >{{$d->name}} </a></td>
                            <td>{{$d->email}} </td> 
                            <td>{{$d->tipo_conta}}  </td> 
                            <td>{{ date('d/m/Y',strToTime($d->created_at)) }}  </td>  
                            <td>@if($d->verified == 0)
                                        <a href="{{route('users.active',$d->id)}}" class="btn btn-sm-success btn-xs"><i class="fa fa-eye"></i> Ativar</a>
                                        @endif   
                                        </td>                                                                                                                          
                        </tr>
                    @empty
                        <p class="label-red">Nenhum usuário cadastrado</p>
                    @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
</div>



@stop