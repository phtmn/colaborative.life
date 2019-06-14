@extends('layouts.dashboard')


@section('cabecalho')
	<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
		<!-- Mask -->
		<span class="mask bg-gradient-warning opacity-8"></span>
		<!-- Header container -->
		<div class="container-fluid d-flex align-items-center">
			<div class="row">
				<div class="col-lg-12 col-md-10">
					<h1 class="display-2 text-white"> # ODS </h1>
					{{--<h1 class="display-4 text-white">ODS - Objetivos para Desenvolvimento Sustentável</h1> --}}
					{{--<p class="text-white mt-0 mb-2">Participe das transformações para a Agenda 2030 no Brasil. Marque seus objetivos e metas aqui. --}}
					{{--</p> --}}
					{{--<p class="text-white">#SimEuQuero</p> --}}

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
                    <div class="card-body bg-transparent">

						<div class="nav-wrapper">
							<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
								<li class="nav-item">
									<a type="radio"  class=" mb-sm-3 mb-md-0  btn btn-outline-warning active btn-block" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true"><i class="ni ni-fat-add"></i> Adicionar Meta</a>
								</li>
								<li class="nav-item">
									<a type="radio" class=" mb-sm-3 mb-md-0 btn btn-outline-warning btn-block" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false"><i class="ni ni-fat-remove"></i> Remover Meta </a>
								</li>
							</ul>
						</div>
						
						<div class="tab-content" id="myTabContent">
							 <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
								 <center><div class="objetivos">
									 <a href="{{route('metas',1)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods1.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',2)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods2.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',3)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods3.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',4)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods4.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',5)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods5.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',6)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods6.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',7)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods7.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',8)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods8.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',9)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods9.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a><br>
									 <a href="{{route('metas',10)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods10.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',11)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods11.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',12)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods12.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',13)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods13.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',14)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods14.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',15)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods15.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',16)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods16.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="{{route('metas',17)}}" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods17.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 <a href="#" style="cursor: pointer"><img src="{{asset('/vendor/site/images/ods/ods_logo_icon.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
								 </div></center>
							{{ Form::open(['route'=>'metas.salvar']) }}

								 <div class="metas mt-5">
									 @forelse($metas as $meta)
										 <div class="form-check">
											 <label class="form-check-label" for="{{$meta->descricao}}" style="cursor:pointer;">
												 <input class="form-check-input" name="codigos[]" type="checkbox" value="{{$meta->id}}" id="{{$meta->descricao}}" >
												 <p align="justify" class="sample-text" style="text-indent: 5px;"><b >{{$meta->codigo}}</b> - {{$meta->descricao}} </p>
												 <hr>
											 </label>
										 </div>
									 @empty
										 <p>Clique em um dos 17 Objetivos de Desenvolvimento Sustentável</p>
									 @endforelse
								 </div>

								 <div class="text-center col-md-12">
									 @if(isset($metas))

										 <div class="form-group col-md-12">
											 <input class="form-check-input" type="radio" name="opcao" id="osc" value="OSC"  onclick="radioEscolhido()" required>
											 <b><label class="form-check-label" for="osc">Desejo selecionar este objetivo e metas para minha Organização</label> </b>
											 <br>
											 <input class="form-check-input" type="radio" name="opcao" id="projeto" value="PROJETO" onclick="radioEscolhido()" required>
											 <b><label class="form-check-label" for="projeto">Desejo selecionar este objetivo e metas para meu Projeto </label> </b>


											 <div id="projetos" style="display: none;">
												 {!! Form::select('projeto_id',$projetos,null,['class'=>'form-control','placeholder'=>'Selecione seu Projeto']) !!}
											 </div>
											 
										 </div>
								</div>
							
								 
								  <div class="card-footer text-center">
								  
								  {{-- {{ Form::submit('Salvar',['class'=>'btn btn-outline-success ']) !!} --}}
								  <button type="submit" class="btn btn-outline-success"><i class="ni ni-check-bold"></i> Salvar</button>
											@endif
										</div>

						 	{!! Form::close() !!}
						
								  </div>
							 <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
							 <center><div class="metas-escolhidas ">
									 @forelse($metas_osc->unique('objetivo_id') as $obj)
										 <a style="cursor: pointer" ><img src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}" style="width:95px; height:95px;" class="img-thumbnail"></a>
									 @empty
										 <p style="color:red">Você não está em nenhum objetivo ODS</p>
									 @endforelse
										<br>
									<br>
									
									 @forelse($metas_osc as $meta)
									 
										 <p align="justify" class="sample-text" style="text-indent: 5px;"><b> <a href="{{route('meta.remover',$meta->id)}}"><i class="ni ni-fat-remove text-warning"  data-toggle="tooltip" data-placement="left" title="Remover "></i></a>  {{ $meta->meta_codigo }} </b >- {{ $meta->meta_descricao }} </p>
										 
										 <hr>
									 @empty
										 <h4>Você precisa Adicionar suas metas da Agenda 2030 na aba ODS </h4>
									 @endforelse
								 </div></center>
							 </div>

						</div>
					</div>
				</div>
			</div>
		
			</div>
</div>

@stop
@section('js')

@section('js')
    <script>

        function radioEscolhido(){
            let divProjetos = $('#projetos')
            let Opcao = $('input:radio[name=opcao]:checked').val()

            if(Opcao === 'PROJETO'){
                divProjetos.css({'display':'block'})
            }else{
                divProjetos.css({'display':'none'})
            }
            //alert($('input:radio[name=opcao]:checked').val());
        }

    </script>
@stop
@stop


