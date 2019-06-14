@extends('site.master')


@section('content')

    @include('dashboard.menu')

    <div class="container">
        <form action="{{route('galeria.store')}}" method="POST" enctype="multipart/form-data" class="dropzone" id="dropzone">
            @csrf

        </form>

        <form class="form form-investidor" action="{{route('galeria.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6">
                <label for="name">Informe uma Legenda para essa Foto</label>
                <input type="text" name="legenda" class="form-control" id="name" aria-describedby="emailHelp" required="true">
            </div>

            <div class="form-group col-md-6">
                {!! Form::file('img',null,['class'=>'form-control','required'=>'true']) !!}
            </div>

                  



             <div class="form-group col-md-6"> 
              <label for="email">Escolha um Album</label> 
               {!! Form::select('tipo',[  
                  'osc'   => 'Album da Osc',
                  'projetos'  => 'Album de Projetos' 
              ],null,['class'=>'form-control']) !!} 
           </div> 





            <div class="form-group">
                <center>  <button type="submit" class="btn gradient-bg">Cadastrar</button> </center>
            </div>
        </form>
    </div>
@stop
