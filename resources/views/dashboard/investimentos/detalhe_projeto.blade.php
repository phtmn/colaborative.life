@extends('layouts.site')

@section('conteudo_principal')

    @include('dashboard.menu')
    <div class="container mt-4 ">
        <div class="row">
            <div class="col-lg-8  col-md-12">
                    <div class="card-body">
                        <div class="d-flex no-block">
                           
                            <div class="ml-auto">
                                <ul class="nav nav-tabs justify-content-center ">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-osc-tab" data-toggle="pill" href="#pills-osc" role="tab" aria-controls="pills-osc" aria-selected="true"><b class="text-dark" >Descrição </b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="pills-ods-tab" data-toggle="pill" href="#pills-ods" role="tab" aria-controls="pills-ods" aria-selected="true"><b class="text-dark" >ODS</b></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                            

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-osc" role="tabpanel" aria-labelledby="pills-osc-tab">
                            <h1 class="card-title"> {{$projeto->descricao}}  </h1>
                                <div class="table-responsive m-t-20">
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>Valor (R$):</strong> R$ {{ number_format($projeto->valor_meta,2,',','.') }}</p>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>Instância:</strong> {{ $projeto->instancia}}</p>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>Segmento:</strong> {{ $projeto->segmento_cultural}} </p>

                                    <hr>
                                    <h3>Objetivo Geral</h3>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$projeto->objetivo_geral}} </p>
                                    <h3>Objetivos Específicos</h3>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$projeto->objetivos_esp}} </p>
                                    <h3>Justificativa</h3>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$projeto->justificativa}} </p>
                                    <h3>Público Alvo</h3>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$projeto->publico_alvo}} </p>
                                    <h3>Impactos Esperados</h3>
                                    <p align="justify" class="sample-text" style="text-indent: 15px;">{{$projeto->publico_alvo}} </p>
                                </div>
                                <br>
                            </div>

                            <div class="tab-pane fade " id="pills-ods" role="tabpanel" aria-labelledby="pills-ods-tab">
                                <div class="table-responsive m-t-20">
                                    @forelse($metas->unique('objetivo_id')->where('projeto_id',$projeto->id) as $obj)
                                            <a style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>
                                        @empty
                                    @endforelse

                                    @forelse($metas->where('projeto_id',$projeto->id) as $meta)
                                        <p align="justify" class="sample-text" style="text-indent: 5px;">
                                            <b >{{ $meta->meta_codigo }} </b > - {{ $meta->meta_descricao }}
                                        </p>
                                        <hr>
                                    @empty
                                        <p style="color:red">Nenhuma ODS cadastrada </p>
                                    @endforelse

                                </div>
                            </div>
                        </div>
                    </div>
            </div> <!--fim-coluna-col-9-->

            <div class="col-lg-4 col-md-12">
            <div class="card-body">
                            <div class="circular-progress-bar">
                                @if( $osc->logo != null)
                                    <center>  <img src="{{ asset($osc->logo) }}" alt="{{$osc->logo}}" class="mr-3 img-responsive rounded" style="width:100px;"> </center>
                                @else
                                    <center>  <img src="{{asset('/uploads/osc/default-logo.png')}}" alt="Osc sem logo" style="width:100px;">  </center>
                                @endif

                            </div>
                        </div>






                    @cannot('osc')
                    <div class="card-body mt-4">
                     
                            <form action="{{route('pagar')}}" method="POST">
                                @csrf

                                <div class="form-check ml-5">
                                    <input class="form-check-input" type="radio" name="tipo" id="exampleRadios1" value="Patrocinio" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                         Desejo Patrocinar o projeto
                                     
                                    </label>
                                </div>

                                <div class="form-check ml-5">
                                    <input class="form-check-input" type="radio" name="tipo" id="exampleRadios2" value="Doacao">
                                    <label class="form-check-label" for="exampleRadios2">
                                         Desejo Doar para o projeto
                                          
                                    </label>
                                </div>


            <div class="col-lg-3 col-md-12">
                <div class="">
                    <div class="card-body">
                        <div class="circular-progress-bar">
                       

                                <div class="form-group">
                                <center>   <input type="text" class=" input-lg" name="valor" placeholder="Valor (R$)" id="valor" required>   </center>  
                                </div>

                                <input type="hidden" name="projeto_id" value="{{$projeto->id}}">
                                <input type="hidden" name="osc_id" value="{{$projeto->osc_id}}">
                                <input type="hidden" name="operacao"  value="Investimento em Projeto">
                              <center>  <button type="submit" class="btn gradient-bg" >Investir </button> </center>
                            </form>                     
                        </div>
                    </div>
                        @endcannot                      


            </div>
        </div>


    </div>

    </div>





@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $("#valor").mask('#.##0,00', {reverse: true});
        });

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@stop


