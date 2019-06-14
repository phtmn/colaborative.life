


<center>
<div class="container">

    @foreach($data as $d)
    <div class="row">
 
	    <div class="col-xs-12 col-xl-12">



        <ul class="list-group list-group-flush">
            <li class="list-group-item">

                <div class="row">
            
                
                <div class="form-group col-md-2">
                <label for=""> <img src="{{ $d->logo ? asset($d->logo) : asset('/uploads/osc/default-logo.png') }}" class=" mr-3 img-responsive rounded" style="width:75px;" alt="...">
                </label>
                </div>   
                <div class="form-group col-md-6">
				
				 
                    <label for=""><b>{{$d->sigla_osc}} - {{$d->nome_fantasia}} </b></label>
                   <p> <label for=""><strong>Ano de Fundação:</strong> {{$d->ano_fundacao}}</label>
                    <label for=""><strong>CNAE:</strong> {{$d->cnae}}</label> </p>
                </div>         
                <div class="form-group col-md-4">
                <a href="{{route('detalhe.osc',$d->id)}}" class="btn gradient-bg mr-2">Saiba Mais</a>
                   
                </div>
                
            </div>

 
  </li>
  <hr>
  
 
</ul>


		   
	   </div>
    </div>
	@endforeach

    </center>
 </div>

@section('css')
    <style>
        .shadow {
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }
        .btn-p{
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 2px solid ;color: #8DDF6A ;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out; background-color :15s ease-in-out;border-color:15s ease-in-out; box-shadow :15s ease-in-out;
        }
        .btn-p- {
            color: #8DDF6A;
            border-color: #8DDF6A;
        }
    </style>

@stop