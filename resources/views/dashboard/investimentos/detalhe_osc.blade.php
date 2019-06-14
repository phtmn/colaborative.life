@extends('layouts.site')

@section('conteudo_principal')

    @include('layouts.menu_lateral')

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8  col-md-12">

            <div class="card-body">
                <div class="d-flex no-block">
                       
                          <div class="ml-auto">
                                <ul class="nav nav-tabs justify-content-center ">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-osc-tab" data-toggle="pill" href="#pills-osc" role="tab" aria-controls="pills-osc" aria-selected="true"><b class="text-dark" >Perfil </b></a>
                                    </li>
                                     <li class="nav-item">
                                        <a class="nav-link " id="pills-projetos-tab" data-toggle="pill" href="#pills-projetos" role="tab" aria-controls="pills-projetos" aria-selected="true"><b class="text-dark" >Projetos</b></a>
                                     </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="pills-ods-tab" data-toggle="pill" href="#pills-ods" role="tab" aria-controls="pills-ods" aria-selected="true"><b class="text-dark" >ODS</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="pills-galeria-tab" data-toggle="pill" href="#pills-galeria" role="tab" aria-controls="pills-galeria" aria-selected="true"><b class="text-dark" >Galeria</b></a>
                                    </li>
                                </ul>
                          </div>
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-osc" role="tabpanel" aria-labelledby="pills-osc-tab">
                    <h1 class="card-title">{{$osc->sigla_osc}} - {{$osc->nome_fantasia}}  </h1>
                        <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>Ano de Fundação:</strong> {{$osc->ano_fundacao}}</p>
                        <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>CNAE:</strong> {{$osc->cnae}}</p>
                        <p align="justify" class="sample-text" style="text-indent: 15px;"><strong>Cidade:</strong> {{ $osc->endereco()->cidade}} - {{ $osc->endereco()->uf}}</p>
                        <hr>

                        <h3>O que a OSC faz?</h3>
                            <p align="justify" class="sample-text" style="text-indent: 15px;">{{$osc->descricao_osc}} </p>
                        <h3>Como surgiu a OSC?</h3>
                            <p align="justify" class="sample-text" style="text-indent: 15px;">{{$osc->descricao_osc}} </p>
                        <h3>Missão da OSC?</h3>
                            <p align="justify" class="sample-text" style="text-indent: 15px;">{{$osc->missao_osc}} </p>
                        <h3>Visão da OSC?</h3>
                            <p align="justify" class="sample-text" style="text-indent: 15px;">{{$osc->visao_osc}} </p>
                   <br>
                    </div>


                    <div class="tab-pane fade " id="pills-ods" role="tabpanel" aria-labelledby="pills-ods-tab">
                        @forelse($metas->unique('objetivo_id') as $obj)
                            <a style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>
                            @empty
                        @endforelse

                        {{--@forelse($metas as $meta)--}}
                            {{--<p align="justify" class="sample-text" style="text-indent: 5px;"><b >{{ $meta->meta_codigo }} </b >- {{ $meta->meta_descricao }}</p>--}}
                            {{--<hr>--}}
                            {{--@empty--}}
                            {{--<p style="color:red">Nenhuma ODS cadastrada </p>--}}
                        {{--@endforelse--}}
                    </div>


                    <div class="tab-pane fade " id="pills-projetos" role="tabpanel" aria-labelledby="pills-projetos-tab">
                       @include('dashboard.investimentos.projetos')
                    </div>

                    <div class="tab-pane fade " id="pills-galeria" role="tabpanel" aria-labelledby="pills-galeria-tab">
                        @forelse($galerias as $galeria)
                            <div class="thumbnail-* wow fadeInLeft ">
                                <img src="{{asset($galeria->url)}}" alt="" />
                            </div>

                            <div class="large-* wow bounceInLeft ">
                               <img src="{{asset($galeria->url)}}" class="img rounded " alt="" />
                               <span class="close"><h1>✕</h1></span>
                            </div>
                        @empty
                          <p style="color:red">Nenhuma galeria cadastrada </p>
                        @endforelse
                    </div>
            </div>
            <br>
        </div>

            <div class="col-lg-4 col-md-12">
                <div class="card-body">
                    <div class="circular-progress-bar">
                        @if($osc->logo != null)
                          <center>  <img src="{{asset($osc->logo)}}" alt="{{$osc->logo}}" class="mr-3 img-responsive rounded" style="width:100px;"> </center>
                         @else
                         <center>  <img src="{{asset('/uploads/osc/default-logo.png')}}" alt="Osc sem logo" style="width:100px;">  </center>
                        @endif

                    </div>
                    
                </div>

                @cannot('osc')
                <div class="card-body mt-4 ">


                        <form action="{{route('pagar')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Desejo Doar para {{$osc->sigla_osc}} - {{$osc->nome_fantasia}} </label>
                                <div class="form-group ">
                                    
                                <center>     <input type="text" class="input-lg" name="valor" placeholder="Valor (R$) " id="valor" required> </center>
                                </div>

                            </div>


                                <input type="hidden" name="osc_id" value="{{$osc->id}}">
                                <input type="hidden"  name="operacao" value="Investimento em OSC">
                             <center>   <button type="submit" class="btn gradient-bg">Investir </button> </center>
                        </form>

                </div>
                @endcannot
            </div>
    </div><!--row-->
</div>
@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $("#valor").mask('#.##0,00', {reverse: true});
        });

        $(document).ready(function(){
            $("[class^='thumbnail-']").click(function(){
                $("[class^='thumbnail-']").slideToggle("fast");
                $(this).next("[class^='large-']").slideToggle();
            });

            $(".close").click(function(){
                $("[class^='large-']:visible").toggle();
                $("[class^='thumbnail-']").fadeToggle("fast");;
            });

        });

        new WOW().init();

    </script>
    @stop

 
<style>  /*---:::::::::: CSS da galeria :::::::::::--*/
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
}


[class*='thumbnail-']{
  
  width: 169px;
  height: 169px;
  float: left;
  cursor: zoom-in;
  margin-left:4px;
 
}

[class*='thumbnail-'] img{
  max-width: 100%;
}

[class*='large-']{
  background: #fff;
  width: 60%;
  margin: 0 auto;
  padding: 20px;
  display: none;
 
}

[class*='large-'] img{
  width: 100%;
  max-width: 100%;
  margin: 0 auto;
}



.close{
  color: #000000;
  font-size: 50px;
  position: absolute;
  top: 100px;
  right: 135px;
  float: right;
  font-size: 14px;
}

[class*='thumbnail-']{
  overflow: hidden;
  padding: 0;
  position: relative;
  cursor: zoom-in;
}

[class*='thumbnail-']:hover img{
  transition: .3s linear;
  transition-delay: 300ms;
  transform: /* rotate(5deg) */ scale(1.1);
}

</style>

<!--::::::::::::: bibliotecas da galeria :::::::::::::::::-->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>