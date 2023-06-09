<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Aqui no XXX, você pode engajar com projetos ou causas que estão de acordo com seus propósitos, de forma planejada, estruturada e transparente">
	<meta name="author" content="XXX">
	<title>.:: XXX ::. </title>

	<link type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" rel="stylesheet">
	<!-- Favicon -->
	<link href="{{asset('vendor/site/images/afavicon.ico')}}" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="{{asset('vendor/argon-site/assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
	<link href="{{asset('vendor/argon-site/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- Argon CSS -->
	<link type="text/css" href="{{asset('vendor/argon-site/assets/css/argon.css?v=1.0.1')}}" rel="stylesheet">
	<!-- Docs CSS -->
	<link type="text/css" href="{{asset('vendor/argon-site/assets/css/docs.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('vendor/argon-site/assets/vendor/toastr/toastr.css')}}" rel="stylesheet">
	<!-- :::fancybox.css::::-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
	<!---:::fancybox.mim.css:::-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110332879-2"></script>

	@yield('css')

</head>

<body>
<header class="header-global">

	<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
		<div class="container">
			<a class="navbar-brand mr-lg-5" href="{{url('/')}}">
				<img src="{{asset('vendor/argon-site/assets/img/brand/')}}" alt="..::  ::.." style="width: 188px; height: auto;">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse" id="navbar_global">
				<div class="navbar-collapse-header">
					<div class="row">
						<div class="col-6 collapse-brand">
							<a href="{{url('/')}}">


							<img src="{{ asset('vendor/site/images/') }}" alt="..::XXX ::.." style="width: 188px; height: auto;">
							</a>
						</div>
						<div class="col-6 collapse-close">
							<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
				<ul class="navbar-nav navbar-nav-hover align-items-lg-center">
					<li class="nav-item dropdown">
						<a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">

							<span class="nav-link-inner--text font-weight-900">Conheça</span>
						</a>
						<div class="dropdown-menu dropdown-menu-xl">
							<div class="dropdown-menu-inner">
								<a href="http://simeuquero.org/" class="media d-flex align-items-center" target="_blank">
									<img src="{{asset('vendor/argon-site/assets/img/brand/SimEuQuero_logo.png')}}" alt="..:: COOPVIVA ::.." style="width: 88px; height: auto;">
									<div class="media-body ml-3">
										<h5 class="heading text-success mb-md-1"> Sim eu Quero</h5>
										<p class="description d-none d-md-inline-block mb-0">Banhe-se em um mundo mais sustentável.Sim, eu quero!</p>
									</div>
								</a>
								<a href="http://www.redeconexao.com.br/" class="media d-flex align-items-center" target="_blank">
								<img src="{{asset('vendor/argon-site/assets/img/brand/rede_c.png')}}" alt="..:: COOPVIVA ::.." style="width: 88px; height: auto;">
									<div class="media-body ml-3">
										<h6 class="heading text-default mb-md-1">Rede de Conexão</h6>
										<p class="description d-none d-md-inline-block mb-0">Inpiramos e geramos conexões sustentáveis.</p>
									</div>
								</a>
								<a href="http://www.agenda2030.com.br/" class="media d-flex align-items-center" target="_blank">
								<img src="{{asset('vendor/argon-site/assets/img/brand/agenda2030.png')}}" alt="..:: COOPVIVA ::.." style="width: 88px; height: auto;">
									<div class="media-body ml-3">
										<h6 class="heading text-warning mb-md-1">Plataforma Agenda 2030</h6>
										<p class="description d-none d-md-inline-block mb-0">Acelerando as transformações para a Agenda 2030 no Brasil.</p>
									</div>
								</a>
							</div>
						</div>
					</li>

					<li class="nav-item dropdown">
						<a href="{{route('projetos_lista')}}" class="nav-link" >

							<span class="nav-link-inner--text font-weight-900">Projetos</span>
						</a>

					</li>

						<li class="nav-item dropdown">
						<a href="{{route('projetos_lista')}}" class="nav-link" >

							<span class="nav-link-inner--text font-weight-900">Proponentes</span>
						</a>

					</li>

					{{--<li class="nav-item dropdown">--}}
					{{--	<a href="{{url('/termo-de-uso')}}" class="nav-link" >--}}

						{{--	<span class="nav-link-inner--text font-weight-900">Termo de Uso</span>--}}
						{{--</a>--}}

					{{--</li> --}}
				</ul>

				<ul class="navbar-nav align-items-lg-center ml-lg-auto">
					<!-- <li class="nav-item">
						<a class="nav-link nav-link-icon" href="https://www.facebook.com/coopviva/" target="_blank" data-toggle="tooltip" title="Facebook">
							<i class="fa fa-facebook"></i>
							<span class="nav-link-inner--text d-lg-none">Facebook</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="https://www.instagram.com/coopviva/" target="_blank" data-toggle="tooltip" title="Instagram">
							<i class="fa fa-instagram"></i>
							<span class="nav-link-inner--text d-lg-none">Instagram</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title=" Whatsapp">
							<i class="fa fa-whatsapp"></i>
							<span class="nav-link-inner--text d-lg-none">Whatsapp</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="mailto:contato@redeconexão.com.br" target="" data-toggle="tooltip" title=" contato@redeconexao.com.br">
							<i class="fa fa-envelope"></i>
							<span class="nav-link-inner--text d-lg-none">E-mail</span>
						</a>
					</li> -->
					{{--<!--<li class="nav-item">--}}
						{{--<a class="nav-link nav-link-icon"  data-toggle="tooltip" title="João Pessoa - Paraíba - Brasil">--}}
							{{--<i class="ni ni-pin-3"></i>--}}
							{{--<span class="nav-link-inner--text d-lg-none">Endereço</span>--}}
						{{--</a>--}}
					{{--</li> -->--}}
					<li class="nav-item ">
						@guest
							<a href="{{route('login')}}"class="btn btn-success btn-icon">
								<span class="nav-link-inner--text">ENTRAR</span>
							</a>
							{{--<button type="button" class="btn btn-success btn-icon mb-3 mb-sm-0" data-toggle="modal" data-target="#modal-login">ENTRAR</button>--}}
							<a href="{{route('register')}}"class="btn btn-neutral btn-icon">
								<span class="nav-link-inner--text">Cadastre-se</span>
							</a>
						@else
                            @php
                                $route = null;

                                switch(auth()->user()->tipo_conta) {
                                    case 'osc': $route = 'osc.index'; break;
                                    case 'admin': $route = 'admin.index'; break;
                                    default: $route = 'perfil.index';
                                }
                            @endphp

                            <a href="{{route($route)}}" class="btn btn-neutral btn-icon">
									<span class="btn-inner--icon">
									  <i class="ni ni-tv-2 mr-2"></i>
									</span>
                                <span class="nav-link-inner--text">Dashboard </span>
                            </a>

							<a href="{{route('logout')}}" target="_blank" class="btn btn-neutral btn-icon"
							   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();" data-toggle="tooltip" title="Sair do Sistema">
								<span class="btn-inner--icon">
								  <i class="fa fa-sign-out"></i>
								</span>
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						@endguest
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<main class="coopviva">
	@yield('conteudo_principal')
</main>



<!-- Modal Login -->
<div id="modal-login" class="modal fade usuario-login" tabindex="-1" role="dialog" aria-labelledby="modal-login" aria-hidden="true">
	<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body p-0">
				<div class="modal-header bg-white">
					<h3 class="modal-title text-muted text-center">Faça seu login</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body px-lg-5 py-lg-2">
					<div class="text-center text-muted mb-4">
						<small>Entre no sistema preenchendo corretamente os campos abaixo.</small>
					</div>
					<form id="form-login" name="form-login" action="{{route('login')}}" method="post" role="form" class="form-validate" novalidate>
						@csrf
						<input type="hidden" id="input-login" name="input-login" value="login">
						<div class="form-group mb-3">
							<div class="input-group input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-email-83"></i></span>
								</div>
								<input id="login-email" name="email" class="form-control" placeholder="E-mail" type="email" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
								</div>
								<input id="login-senha" name="password" class="form-control" placeholder="Senha" type="password" required>
							</div>
						</div>
						<div class="custom-control custom-control-alternative custom-checkbox">
							<input class="custom-control-input" id=" customCheckLogin" type="checkbox">
							<label class="custom-control-label" for=" customCheckLogin"><span>Lembrar minha senha</span></label>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary my-4">Acessar</button>
						</div>
					</form>
					<div class="text-center text-muted mb-4">
						<small><a href="#">Esqueci minha senha</a></small>
					</div>
					<div class="text-center text-muted mb-4">
						<small>Sua primeira vez aqui? <a href="#"> <b>Cadastre-se</b></a>.</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Modal Login -->
<!-- Core -->
<!-- Global site tag (gtag.js) - Google Analytics -->

<script src="//platform-api.sharethis.com/js/sharethis.js#property=5c9271b572e5930011671391&product=inline-share-buttons"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/popper/popper.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/headroom/headroom.min.js')}}"></script>
<script src="{{asset('vendor/argon-site/assets/vendor/toastr/toastr.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('vendor/argon-site/assets/js/argon.js?v=1.0.1')}}"></script>

<!--:::::::::::::::::::::SHARETHIS::::::::::::::::::::::::-->
<script type = 'text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c92adf98429650013e9d722&product=inline-share-buttons' async = 'async'> </script>
<script src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script>
<script src="//platform-api.sharethis.com/js/sharethis.js#property=5c9271b572e5930011671391&product=inline-share-buttons"></script>
<!--::::::::::::::::::::::::::::fancybox.js::::::::::::::::::::::::::::::::::::-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
<!--::::::::::::::::::::::::::::fancybox.mim.js::::::::::::::::::::::::::::::::-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
    </script>


@include('sweet::alert')
@yield('js')


</body>

</html>
