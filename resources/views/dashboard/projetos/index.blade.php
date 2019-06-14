
@extends('layouts.site')

@section('conteudo_principal')
    
    @include('layouts.menu_lateral')




    <div class="container" style="margin-top:20px; padding:20px">
    <div class="row row justify-content-center">

        <div class="com-md-4">
            <div class="card-outline-success" style="width: 18rem;">   
                    
                <div class="card-body text-center">
                <a href="{{route('projetos.create')}}" class="btn gradient-bg">Novo Projeto</a>
                  <!--  <h4 class="card-title"> {{ Auth::user()->name }}</h4>
                    <h4><small>{{ Auth::user()->email }}</small> </h4>
                    <h5><small>{{ Auth::user()->tipo_usuario ?? '' }}</small> </h5> -->
                </div>
            </div>
        </div>


       


        <div class="col-md-8">
       
          
          
                <h4>Projetos Cadastrados </h4>
                <hr>
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                             <div class="card-body">
                            
                                <div class="table-responsive m-t-20">
                                    <table class="table stylish-table">
                                        <thead>
                                            <tr>
                                               <!-- <th colspan="2">Investidor</th> -->
                                               <th>Nome do Projeto</th>
                                               <th>Valor (R$)</th>                                              
                                               <th> </th>      
                                               <th> </th>                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($data as $d)
                                            <tr>
                                                <td>{{$d->descricao}}</td>
                                                <td>R$ {{ number_format($d->valor_meta,2,',','.') }} </td>
                                                <td class="text-center ">
                                                        <a href="{{route('projetos.edit',$d->id)}}"><i class="fa fa-pencil" style="color:red"></i> Editar </a>                                
                                                     <!--    <a href="{{route('projeto.inativo',$d->id)}}"><i class="fa fa-trash" style="color:red"></i> Remover </a> -->
                                                </td>                        
                                            </tr>
                                            @empty
                                                <p style="color:red">Você ainda não cadastrou nenhum Projeto! <span></span></p>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    </div>

               
                    <br>

          
    
                    </div>
                
        </div>
    </div>
</div>












   
    

@endsection