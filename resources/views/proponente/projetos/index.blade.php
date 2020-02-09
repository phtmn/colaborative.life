@extends('layouts.dashboard')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-blue opacity-6"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-collection text-white"></i> Projetos</h1>
            </div>
        </div>
    </div>
</div>
@stop

@section('style')
    <style>
        .disabled-link {
            opacity: .35;
            pointer-events: none;
        }
    </style>
@stop

@section('conteudo')
<div class="container mt--7">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <a href="{{route('projetos.create')}}" class="btn btn-secondary "><i class="ni ni-fat-add"></i> Adicionar </a>
                </div>
                <div class="table-responsive ">
                    <table class="table align-items-center table-flush "  style="width:100%" id="example" >
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-left">Nº do PRONAC</th>
                                <th scope="col" class="text-left">Landing Page</th>
                                <th scope="col" class="text-left">Status</th>                                
                                <th scope="col" class="text-left">Publicado</th>
                                <!-- <th scope="col" class="text-left">Data de Cadastro</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $d)
                            <tr>

                                <td><i class="fas fa-edit text-primary"></i> <a class="text-primary " href="{{route('projetos.edit',$d->id)}}" >{{$d->num_pronac}} </a></td>

                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <a href="{{ route('detalhe.projeto', $d->num_pronac) }}" data>
                                            <span class="text-primary {{ (($d->status == 'Aprovado para Captação' OR $d->status == 'Captação Finalizada') AND $d->publicado) ? "" : "disabled-link" }}"> Acessar </span>
                                        </a>
                                    </span>
                                    </td>
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
                                    {{-- <td>
                                    
                                      
                                        {{ date('d/m/Y',strToTime($d->created_at)) }}
                                        <div class="avatar-group">
                                            <a href="{{ url('projetos/'.$d->comprovante_captacao) }} " class="avatar avatar-sm rounded-circle" download>  
                                                <img src="{{ url('projetos/'.$d->comprovante_captacao) }}"  alt="" class="Image placeholder" data-toggle="tooltip" title="Extrato bancário da conta captação"> 
                                              </a>
                                              <a href="{{ url('projetos/'.$d->imagem_projeto) }} " class="avatar avatar-sm rounded-circle"  download>  
                                                <img src="{{ url('projetos/'.$d->imagem_projeto) }} "  alt="" class="Image placeholder" data-toggle="tooltip" title="Foto de Destaque"> 
                                              </a>
                                              <a href="{{ url('projetos/'.$d->cronograma) }}" class="avatar avatar-sm rounded-circle" download>  
                                                <img src="{{ url('projetos/'.$d->cronograma) }}"  alt="" class="Image placeholder" data-toggle="tooltip" title="Cronograma de atividades"> 
                                              </a>
                                              <a href="{{ url('projetos/'.$d->contrapartidas) }}" class="avatar avatar-sm rounded-circle" download>  
                                                <img src="{{ url('projetos/'.$d->contrapartidas) }}"  alt="" class="Image placeholder" data-toggle="tooltip" title="Plano de contrapartidas"> 
                                              </a>                                             
                                            </div> 
                                        
                                    </td>--}}
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

@section('js')
    <script>
        $('input:checkbox').change(function() {
            const link_span = $(this).closest('tr').find('a span');

            ($(this).is(":checked"))
                ? link_span.removeClass('disabled-link')
                : link_span.addClass('disabled-link');
        })
    </script>
@stop
