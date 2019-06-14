@extends('layouts.dashboard')

@section('cabecalho')


    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-danger opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10 col-xs-12">
                    <h1 class="display-2 text-white"># Galeria</h1>
                   {{-- <p class="text-white mt-0 mb-2">Precisamos de algumas informações para incluir o seu projeto, assim que finalizar ele será enviado
				   para aprovação da plataforma.</p> --}}
                   
                    {{--<a href="" class="btn btn-success m-4" data-toggle="modal" data-target="#modal-default"> Upload Galeria</a>--}}
                                               
                </div>
            </div>
        </div>
    </div>
@stop

@section('conteudo')
<div class="container mt--7">
    <div class="row">
        
		    <div class="col-md-8 ">
				<div class="card shadow ">
						<div class=" card-header border-0 text-center  ">
							 <a href="" class="btn btn-danger m-4" data-toggle="modal" data-target="#modal-default"> <i class="ni ni-cloud-upload-96"></i> Upload Galeria</a>
						</div>
					
							<div class="row justify-content-center ">
							@forelse($galerias as $g)
										
                            <div class="col-xs-12 ">
                                <div class="" style="width:200px;">
                                    <span class="spanx"><a href="{{route('galeria.show',$g->id)}}"><i class="fas fa-trash-alt spanx"></i> Excluir</a></span>
                                    <!-- <span class=""><a href="{{route('galeria.show',$g->id)}}"><i class="fas fa-edit"></i> Editar </a></span>    -->
                                </div>
                                    <a href="#" class="">
                                    <img src="{{asset($g->aws_url)}}" alt="" class=" img-thumbnail " data-toggle="tooltip" data-placement="top" title="{{$g->legenda}}" style="width:200px; height:150px;">   
                                    
                                </a>
                          
                                
                            </div>
                            
							@empty

							@endforelse
							</div><!--:::/row::::-->
				</div>            
			</div>
		
		
			<div class="col-md-4">
				<div class="card shadow">
					<div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
						<div class="row justify-content-center">
							<div class="col-lg-3 order-lg-2">
								<div class="card-profile-image">
									<a href="#">
										@if(!$osc->logo)
											<img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="rounded-circle">
										@else
											<img src="{{$osc->logo}}" class="">
										@endif
									</a>
								</div>
							</div>
						</div>
						<div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
							<div class="d-flex justify-content-between">
								<a href="#" class="btn btn-sm btn-danger float-right" data-toggle="modal" data-target="#modal-default-logo" title="Abrir modal para ulpoad de logo"><i class="ni ni-cloud-upload-96"></i> Upload Logo</a>
							</div>
						</div>
						
					</div>
				
				</div>
			</div>
    </div>
	 
    </div>
	
	<div class="modal fade" id="modal-default-logo" tabindex="-1" role="dialog" aria-labelledby="modal-default-logo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"  role="document">
                {!! Form::open(['route'=>'osc.uploadFoto','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Upload Logo</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::file('file',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"><i class="ni ni-check-bold"></i> Enviar</button>
                        <button type="button" class="btn btn-link-danger  ml-auto" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
    </div>


        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered"  role="document">
                {!! Form::open(['route'=>'galeria.store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">Upload Galeria</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::file('file',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group"> 
                            {!! Form::text('legenda',null,['class'=>'form-control','placeholder'=>'Insira uma legenda para essa foto']) !!}
							<!--<p> teste </p> -->
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="submit" class="btn btn-danger "><i class="ni ni-check-bold"></i> Enviar</button>
                        <button type="button" class="btn btn-link-danger  ml-auto" data-dismiss="modal">Cancelar</button>  
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
@stop
<style>
/*::::::::::: classe de efeito de imagem/excluir::::::::::*/
.spanx a:hover{
    width: 190px;
    position: absolute;
    color: rgb(255, 255, 255);
    text-align: center;
    text-shadow: 1px 1px 1px #000000; 
    background-color:rgba(0, 0, 0, .6);
    opacity: 4;
    transition: .3s;   
}

.spanx  a{
    width: 190px;
    margin-left: 5px;
    margin-top: 104px;
    padding: 10px;
    position: absolute;
    /* color: rgb(255, 255, 255); */
    text-align: right;
    font-size: 10pt;
    text-decoration: none;
    opacity: 0;
}
 .spanx i{
    
     color:#da2c2c;

 }



</style>