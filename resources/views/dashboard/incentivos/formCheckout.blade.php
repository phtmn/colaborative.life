@extends('site.master')

@section('content')

    @include('dashboard.menu')

<div class="container" style="margin-top:20px; padding:20px">       
    <div class="row">
            <div class="col-md-3">
            
            
            </div>
 

            <div class="col-md-6">
                <form class="form form-investidor" action="{{route('pagar')}}" method="POST">
                @csrf

                <div class="form-group" id="box-tipo-usuario">
                    <div class="form-group" style="margin-left: 25px">
                        
                    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="radioPJ" value="PROJETO">
                            <label class="form-check-label" for="radioPJ">Desejo realizar uma Doação para OSC {{$osc->nome_fantasia}}</label>
                        </div>
                        <br>
                        <!--  <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="radioPF" value="OSC">
                            <label class="form-check-label" for="radioPF">Meu investimento sera para projetos</label>
                        </div> -->
                        
                    </div>
                </div>

                <div class="form-group">
                    <center>  
                    <label for="name"><strong>VALOR (R$)</strong></label>
                        <input type="text" name="valor" class="form-control form-control-lg" id="valor">
                    </center>

                </div>           

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        
                       
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            
            </div>
                <input type="hidden" name="osc_id" value="{{$osc->id}}">

                        <hr>
                        
                <div class="form-group">
                    <center>  <button type="submit" class="btn gradient-bg">Investir</button>
                    <!--   <a href="{{route('osc.show',$osc->id)}}" class="btn gradient-bg">Voltar</a> -->
                    </center>

                </div>
                
                </form>   
                </div>            
                
    </div>
        


</div>
        
        
   
@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        alert('oi')
        $(document).ready(function(){
            $("#valor").mask('#.##0,00', {reverse: true});
        });

    </script>
@stop