@extends('layouts.site')
@section('conteudo_principal')
	<div class="swiper-container container-login">
		<div class="swiper-wrapper">
			<div class="swiper-slide hero-content-wrap">
				<img src="/vendor/site/images/about-bg.jpg" alt="">

				<div class="hero-content-overlay position-absolute w-100 h-100">
					<div class="container h-100">
						<div class="row h-100">
							<div class="col-12 col-lg-10 d-flex flex-column justify-content-center align-items-start">
								<header class="entry-header">
									<h4> Acesso ao Sistema</h4>
								</header><!-- .entry-header -->
							</div><!-- .col -->
						</div><!-- .row -->
					</div><!-- .container -->
				</div><!-- .hero-content-overlay -->
			</div><!-- .hero-content-wrap -->
		</div><!-- .hero-slider -->
		<div class="container" id="abc">
			<header class="entry-header">
				<h2 class="entry-title"></h2>
			</header> 
			<div class="featured-cause">
				<div class="container">           
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="cause-wrap  flex-wrap justify-content-between">
								<form action=" {{route('login') }}" class="form form-investidor" method="POST">
									 @csrf
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
										<h3 class="entry-title w-100 m-0">Já tenho cadastro!</h3> 
									</header><!-- .entry-header -->
									<div class="card-body">
										<div class="form-group">
											<div class="label">E-mail</div>
											<input type="email" name="email" class="form-control" placeholder="Digite seu e-mail">
										 </div>
										<div class="form-group">
											<div class="label">Senha</div>
											<input type="password" name="password" class="form-control" placeholder="Digite sua senha">
										</div>
										<div class="form-group">
											<center> <a href="{{url('/password/reset') }}">Esqueceu sua senha?</a> </center>
										</div> 

										<div class="form-group">
											<center> <button type="submit" class="btn gradient-bg">Entrar</button> </center>
										</div>                    
									</div>
								</form>
							</div><!-- .cause-wrap -->
						</div><!-- .col -->
						<div class="col-12 col-lg-6">
							<div class="cause-wrap  flex-wrap justify-content-between">
								<header class="entry-header  flex-wrap align-items-center">
									<h3 class="entry-title w-100 m-0">Participe do COOPVIVA!</h3>
								</header><!-- .entry-header -->
								<div class="card-body">
									<div class="form-group">
										<label class="text-justify" for="name">Faça parte da maior rede de cooperação viva e cidadã.</label>
										<p class="text-justify">Para você que promove ações de sustentabilidade seja com projetos educacionais, ambientais, sociais, esportivos, culturais de saúde, criança e adolescente ou idoso.</p>
										<p class="text-justify">Para empresas ou pessoa fisica, que incentiva, patrocina, move e gera negócios estratégicos, sustentáveis e criativos.</p>
										<p class="text-justify"> Basta se cadastrar no formulário ao lado e assim que validado seu cadastro entraremos em contato. </p>
										<p class="text-justify"> Quaisquer esclarecimentos entre em contato pelo nosso canal de atendimento <strong>contato@redeconexao.com.br</strong> ou pelo telefone <strong>+55 83 3034-1663</strong></p>
									</div>
								</div>              
							</div><!-- .cause-wrap -->
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div>
		</div><!-- .featured-cause -->
	@stop