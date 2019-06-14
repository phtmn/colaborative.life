<section class="section section-lg pt-lg-0 mt--300">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row row-grid">
                    <div class="col-lg-7">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5  mt-3 mx-3">
                                
                                <h5 class="text-primary text-uppercase">{{$projeto->osc->nome_fantasia}}</h5>
								
                                <p class="description mt-3"><p align="justify" style="text-indent: 25px;">{{$projeto->resumo ?? ''}}</p></p>
                                <div>
									<hr>
									
{{--									<div class="d-flex justify-content-center mb-2 ">--}}
{{--						--}}
{{--										<a href="{{ $osc->site ?? 'https://coopviva.com.br' }}" class="nav-link nav-link-icon" target="_blank"  >--}}
{{--										<i class="ni ni-world-2  text-Primary"></i>--}}
{{--										</a>--}}
{{--										--}}
{{--										<a href="{{ $osc->facebook ?? '#' }}" class="nav-link nav-link-icon"  target="_blank" >--}}
{{--										<i class="fa fa-facebook  text-Primary"></i>--}}
{{--										</a>--}}
{{--										--}}
{{--										<a href="{{ $osc->instagram ?? '#' }}" class="nav-link nav-link-icon"  target="_blank" >--}}
{{--										<i class="fa fa-instagram  text-Primary"></i>--}}
{{--										</a>--}}
{{--										--}}
{{--										<a href="{{ $osc->mapa ?? '#' }}" class="nav-link nav-link-icon"  target="_blank"  >--}}
{{--										<i class="ni ni-square-pin text-Primary"></i>--}}
{{--										</a>--}}
{{--									--}}
{{--									</div>	--}}
                                                                      
                                </div>
                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-5">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-4 mt-4 d-flex justify-content-center mb-4">
                                                               
								    @if(!$projeto->imagem)
                                        <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="thumbnail" style="width:205px; height:205px;">
                                    @else
                                        <img src="{{$projeto->imagem ?? ''}}" class="" style="width:205px; height:205px;">
                                    @endif
								
                                <div>
                                    
                                </div>
								
								
                                
                            </div>
							
							<div class="botao mx-2 mb-4 mt-0">
                                @guest
                                    <div class="text-center">
                                        <a href="{{route('login')}}" class="btn btn-default btn-round">Realize login para Investir</a>
                                    </div>
                                @else
                                    <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-success btn-block">Quero Investir</a>
                                @endguest
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog"  role="document">
                        {!! Form::open(['route'=>'pagar']) !!}
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default"></h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    {!! Form::text('valor',null,['class'=>'form-control form-control-lg','required'=>'true','placeholder'=>'Quanto gostaria de Investir (R$)','id'=>'valor']) !!}
                                </div>

{{--                                <input type="hidden" name="osc_id" value="{{$osc->id}}">--}}
                            </div>

                            <div class="modal-footer text-center">
                               <button type="submit" class="btn btn-success btn-block">Sim EU QUERO</button>
                            </div>

                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>