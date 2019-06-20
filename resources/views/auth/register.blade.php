@extends('layouts.site')

@section('conteudo_principal')
    <section class="section section-shaped section-lg-12">
		<div class="shape shape-style-1 bg-gradient-success">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>

        <div class="container pt-lg-md">
		<br>
            <div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card bg-white shadow border-1">
                	
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="cause-wrap  flex-wrap justify-content-between">
								<header class="entry-header  flex-wrap align-items-center">
									@if ($errors->any())
										<div class="alert alert-danger">
											<ul>
												@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
									@if (session('success'))
										<div class="alert alert-success">
											{{ session('success') }}
										</div>
									@endif
									<br>
									<h3 class="entry-title w-100 m-0 text-center">Faça seu cadastro aqui!</h3>
								</header><!-- .entry-header -->
								<div class="card-body">
									<form class="form form-investidor" action="{{route('register')}}" method="POST">
										@csrf
										<div class="form-group">
											<label for="name">Nome completo</label>
											<input type="text" name="name" class="form-control" placeholder="Digite seu nome" required="true" value="{{ old('name') }}">
										</div>
										
										<div class="form-group">
											<label for="tipo_conta">Como você deseja participar do <b class="text-success">XXX</b>?</label>
											<select name="tipo_conta" id="tipo_conta" class="form-control" required>
												<option value=""> ... Selecione uma opção ... </option>
												<option value="osc">Perfil Proponente de Projetos</option>
												<option value="investidor-pf">Perfil Investidor Pessoa Fìsica</option>
												<option value="investidor-pj">Perfil Investidor Pessoa Jurídica</option>
{{--												<option value="empresa">Empresa</option>--}}
											</select>
										</div>


										<div class="form-group">
											<label for="email">E-mail</label>
											<input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail" required="true" value="{{old('email')}}">
										</div>

										<div class="form-group">
											<label for="password">Senha</label>
											<input type="password" name="password" class="form-control" id="password" placeholder="Digite sua senha">
										</div>

										<div class="form-group">
											<label for="password_confirmation">Repita a Senha</label>
											<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Repita sua senha">
										</div>
										<div class="form-group">
											<div class="form-group" style="margin-left: 25px">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" name="termo" value="ACEITO">
													<label class="form-check-label" >Aceito os <a href="{{url('/termo-de-uso')}}" > Termos de Uso </a></label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<center>  <button type="submit" class="btn btn-outline-success">Cadastrar</button> </center>
										</div>
									</form>
								</div>
							</div><!-- .cause-wrap -->
						</div><!-- .col -->
						<div class="col-12 col-lg-6">
						<div class="cause-wrap d-flex flex-wrap justify-content-between">
							<header class="entry-header  flex-wrap align-items-center ">
							<br>
							<h3 class="entry-title w-100 m-0 text-center px-2">Perfis de Acesso</h3>
								
							</header><!-- .entry-header -->
							
							<div class="card-body">
							<div class="form-group">
									<label for="name"><strong class="text-primary"><i class="ni ni-collection"></i> Perfil Proponente de Projetos</strong></label>
									<p class="text-justify" class="sample-text" style="text-indent: 20px;"> Se você é uma organização sem fins lucrativos e produz o bem comum, com alto valor socioambiental agregado.</p>
								</div>
								<hr>
								<div class="form-group">
									<label for="name"><strong class="text-success">  <i class="ni ni-satisfied"></i> Perfil Investidor Pessoa Física</strong></label>
									<p class="text-justify class="sample-text" style="text-indent: 20px;">Se você quer apoiar, investir, trocar informações, divulgar conteúdos por simpatia, afinidade ou estilo de vida.</p>
									 <h5 class="text-center"><span class="badge badge-pill badge-success" style="text-transform: capitalize;"  >Investidor Social</span></a>
									 <span class="badge badge-pill badge-success" style="text-transform: capitalize;" >Volutário Ativo</span></a>
									 <span class="badge badge-pill badge-success" style="text-transform: capitalize;" >Volutário Passivo</span></a></h5>
								</div>
								
								<hr>
								<div class="form-group">
									<label for="name"><strong class="text-warning"><i class="ni ni-istanbul"></i> Perfil Investidor Pessoa Jurídica</strong></label>
									<p class="text-justify" class="sample-text" style="text-indent: 20px;">	Se sua empresa está voltada para resultados sustentáveis de impacto, engajamento e transformação social.</p>
									<h5 class="text-center"><span class="badge badge-pill badge-warning" style="text-transform: capitalize;" >Investidor Social</span></a>
									 <span class="badge badge-pill badge-warning" style="text-transform: capitalize; " >Volutário Ativo</span></a>
									 <span class="badge badge-pill badge-warning" style="text-transform: capitalize; "  >Volutário Passivo</span></a></h5>
								</div>

								
								
							</div>
						</div>
					</div>
				</div><!-- .row -->
				</div>
				</div>
			</div>
		</div>
@stop

@section('js')
	<script>
		$(document).ready(function(){
			let tipoUsuario      = $('#tipo_usuario');
			let boxTipoUsuario   = $('#box-tipo-usuario');
			let radioPJ 		 = $('#radioPJ')

			tipoUsuario.change(function(){

				if(tipoUsuario.val() == 1){
					boxTipoUsuario.css({'display':'block'});

				}else{
					boxTipoUsuario.css({'display':'none'});
					radioPJ.attr('checked', true);
				}
			});
		});
	</script>
@stop
