<section class="section section-lg bg-success">
	<!--<section class="section section-lg bg-default"> -->
	<!--<section class="section section-lg bg-success"> -->
	<!--<section class="section section-lg bg-success"> -->
	<div class="container pt-lg pb-100 ">
		<div class="row text-center justify-content-center">
			<h2 class="display-2 text-white"><i class="ni ni-collection text-white mx-1 my-1"></i> Projetos</h2>
			<p class="lead text-white  mx-2 my-2  font-weight-600">O que você pode fazer hoje para contribuir para um mundo melhor? Conheça as nossas ações e como atuamos para transformar o mundo. </p>

		</div>

		<div class="col-lg-12 mt-4">
			<div class="card card-lift--hover shadow border-0">
				<H1 class="text-left mt-4  mx-3 font-weight-900"> Colabore com nossas ações</h1>
				<div class="card-body py-4  mt-0 d-flex justify-content-center">
					<div class="table-responsive 	">
						<table class="table table-hover ">
							@isset($projetos)
							<thead class="">

							</thead>
							@endisset
							<tbody class="font-weight-900">
								@forelse($projetos as $p)
								<tr>
									<td style="width: 50px;">

										<a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-success"> Quero Investir</a>


									</td>
									<td class="text-left justify-content-center">{{$p->nome_projeto}}
										<h5><span class="badge badge-pill badge-danger"><a href="javascript:void(0)" class="text-dark detalhe-projeto" data-id="{{ $p->id }}"> <i class="ni ni-fat-add"></i><b style="text-transform: capitalize; "> Informações </b></a></span></h5>

									</td>
									</td>
									<td>
									<h5>{{$p->link_vesalic}}		</h5>		
									</td>

								</tr>
								@empty
								<p class="font-weight-900 text-dark">#não há Projetos para exibir!</p>
								@endforelse

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


	</div>

	<div class="separator separator-bottom separator-skew zindex-100">
		<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
		</svg>
	</div>

	<div class="modal fade" id="kalahun-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<h2 class="modal-title  mb-2 text-right " id="nome"> </h2>
					<h3>Resumo </h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="resumo"></p>
						<iframe src="{{$p->link_vesalic}}" id="link_vesalic" scrolling="auto" width="700" height="600" allowfullscreen></iframe>
					<h3>Objetivos</h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="objetivos"></p>

					<h3>Público Alvo</h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="publico_alvo"></p>
					
					<h3>Impactos Esperados</h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="data_dou"></p>

					<h3>Contra Partidas</h3>
					<p class="text-justify mt-3 mx-3" style="text-indent: 15px;" id="contra_partidas"></p>
					<hr>
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="alert alert-secondary text-center" role="alert">
									<strong>Custo (R$)</strong> <b id="valor_projeto"> </b>
								</div>

							</div>
							<div class="col">
								<div class="alert alert-success text-center" role="alert">
									<strong>Meta de Captação (R$)</strong> <b id="valor_meta"> </b>
								</div>

							</div>
						</div>
						<div class="row">

							<div class="col">
								<div class="alert alert-default text-center" role="alert">
									<strong>
									</strong>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>



@section('js')
<script src="{{asset('js/jquery.mask.min.js')}}"> </script>
<script>
	$('body').on('click', '.detalhe-projeto', function() {
		var projeto_id = $(this).data('id');
		$.get("{{ url('sim_eu_quero/projeto') }}" + '/' + projeto_id, function(data) {

			$('#kalahun-modal').modal('show');
			$('#nome').html(data.nome_projeto);
			$('#data_dou').html(data.data_dou);
			$('#objetivos').html(data.objetivos);
			$('#link_vesalic').html(data.link_vesalic);			
			$('#resumo').html(data.resumo);
			$('#publico_alvo').html(data.publico_alvo);
			$('#impactos_esperados').html(data.impactos_esperados);
			$('#contra_partidas').html(data.contra_partidas);
			$('#valor_projeto').html(data.valor_projeto).mask('#.##0,00', {
				reverse: true
			});
			$('#valor_meta').html(data.valor_meta).mask('#.##0,00', {
				reverse: true
			});
		})
	});

	$(document).ready(function() {
		$('#valor').mask('#.##0,00', {
			reverse: true
		});
	})
</script>
@stop