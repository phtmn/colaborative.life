<section class="py-6 mt-4">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-md-2">
          <img src="{{asset('vendor/argon-site/assets/img/theme/team-4-800x800.jpg')}}" class="img-fluid">
          <img src="{{ url('projetos/'.$projeto->foto_destaque) }}" alt="" width="300px"  class="img-fluid">

          </div>
          <div class="col-md-6 order-md-1">
            <div class="pr-md-5">
            <p>proposto por</p>
            <h1>{{$projeto->responsavel}}</h1>

              <ul class="list-unstyled mt-5">
              <li class="py-1">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-caps-small"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0"><b>PRONAC:</b> {{$projeto->num_pronac}} </h6>
                    </div>
                  </div>
                </li>
                <li class="py-1">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-tie-bow"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0"><b>Segmento:</b> {{$projeto->segmento}} </h6>
                    </div>
                  </div>
                </li>
                <li class="py-1">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-bullet-list-67"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0"><b>Área:</b> {{$projeto->area}} </h6>
                    </div>
                  </div>
                </li>
                <li class="py-1">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-book-bookmark"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0"><b>Mecanismo:</b>  {{$projeto->mecanismo}} - {{$projeto->enquadramento}}</h6>
                    </div>
                  </div>
                </li>
                <li class="py-1">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-square-pin"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0"><b>Município/UF:</b>  {{$projeto->municipio}} - {{$projeto->uf_projeto}}</h6>
                    </div>
                  </div>
                </li>
                <li class="py-1">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-calendar-grid-58"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0"><b>Período:</b>  {{ date('d/m/Y',strToTime($projeto->data_inicio)) }} ~~ {{ date('d/m/Y',strToTime($projeto->data_termino)) }}</h6>
                    </div>
                  </div>
                </li>
                <li class="py-1">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="badge badge-circle badge-success mr-3">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                    <div>
                      <h6 class="mb-0"><b>Valor aprovado:</b> R$ {{ number_format($projeto->valor_aprovado,2,',','.') }}   </h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

<section class="py-6 pb-9 bg-gradient-success">
      <div class="row justify-content-center text-center">
        <div class="col-md-6">
          <h2 class="display-3 text-white">Investir </h2>

            {{-- TODO - Adicionar essa lógica em um lugar mais correto --}}
            @if (auth()->user() && \Illuminate\Support\Str::contains(auth()->user()->tipo_conta, 'investidor'))
                <form action="{{route('investimentos.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-right ">Comprovante de tranferência </label>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="form-group col-md-7">
                                    <input type="file" name="comprovante_tranferencia" class="form-control" value="">
                                </div>
                                <button class="btn btn-neutral btn-icon">
                                    <span class="nav-link-inner--text">Investir</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" value="{{ $projeto->id }}" name="projeto_id" />
                </form>
            @endif

          <div class="alert alert-default alert-dismissible fade show" role="alert">
    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text"><strong>Default!</strong> INVESTIefault alert—check it out!</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
        </div>
      </div>
    </section>
    <section class="section section-lg pt-lg-0 mt--7">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-3">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">

                    <h4 class="h3 text-primary text-uppercase">Etapas</h4>
                    <p class="description mt-3">{{substr ($projeto->etapa, 0,200)}} </p>
                    <div>
                      <span class="badge badge-pill badge-primary">saiba mais</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">

                    <h4 class="h3 text-success text-uppercase">Objetivos</h4>
                    <p class="description mt-3">{{substr ($projeto->objetivos, 0,200)}}</p>
                    <div>
                      <span class="badge badge-pill badge-success">saiba mais</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <h4 class="h3 text-warning text-uppercase">Sinopse</h4>
                    <p class="description mt-3">{{ substr ($projeto->sinopse, 0,200)}}...</p>
                    <div>
                    <span class="badge badge-pill badge-success">saiba mais</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">

                    <h4 class="h3 text-warning text-uppercase">Justificativa</h4>
                    <p class="description mt-3">{{substr ($projeto->justificativa, 0,200)}}</p>
                    <div>
                    <span class="badge badge-pill badge-success">saiba mais</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="py-6 pb-9 bg-default">
      <div class="row justify-content-center text-center">
        <div class="col-md-6">
          <h2 class="display-3 text-white mt-5">A complete HTML solution</h3>
            <p class="lead text-white">
              Argon is a completly new product built on our newest re-built from scratch framework structure that is meant to make our products more intuitive,
              more adaptive and, needless to say, so much easier to customize. Let Argon amaze you with its cool features and build tools and get your project to a whole new level.
            </p>
        </div>
      </div>
    </section>


<section class="section section-lg">
	<div class="container">
		<div class="row row-grid justify-content-center">
			<div class="col-lg-12 text-center">

				<div class="text-center">
					<h3 class="display-4 mb-5 mt-5">Uploads</h3>
					<div class="row justify-content-center">
						<div class="col-lg-3 col-3">
							<button  class="btn btn-sm btn-white">
							<img src="{{asset('vendor/site/images/amazons3.png')}}" class="img-fluid">
							</button>
						</div>
						<div class="col-lg-3 col-3">
						<button  class="btn btn-sm btn-white" >
							<img src="{{asset('vendor/site/images/mercadopago.png')}}" class="img-fluid">
							</button>
						</div>
						<div class="col-lg-3 col-3">
						<button  class="btn btn-sm btn-white">
							<img src="{{asset('vendor/site/images/hostgator.png')}}" class="img-fluid">
							</button>
						</div>

						<div class="col-lg-3 col-3">
						<button  class="btn btn-sm btn-white">
							<img src="{{asset('vendor/site/images/hyb.png')}}" class="img-fluid">
							</button>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>

</section>


