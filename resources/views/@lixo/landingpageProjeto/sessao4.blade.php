<section class="section section-lg bg-success">
<!--<section class="section section-lg bg-default"> -->
<!--<section class="section section-lg bg-success"> -->
<!--<section class="section section-lg bg-success"> -->
      <div class="container-fluid pt-lg pb-100 ">
        <div class="row text-center justify-content-center">
			<h1 class="display-3 text-white font-weight-900 ">Nossos Projetos</h1>
        <div class="col-lg-12">
			 <table class="table table-bordered text-white">
					<thead class="bg-dark">
						<tr>
							<th>Projeto</th>
							<th>Valor Projeto</th>
							<th>Valor Valor Meta</th>
							<th></th>
						</tr>
					</thead>
				 	<tbody class="font-weight-900">
						@forelse($projetos as $p)
						<tr>
							<td>{{$p->nome_projeto}}</td>
							<td>R$ {{ number_format($p->valor_projeto,2,',','.')}}</td>
							<td>R$ {{ number_format($p->valor_meta,2,',','.')}}</td>
							<td>
								<a href="{{route('detalhe.projeto',$p->id)}}" class="btn btn-dark"> Saiba Mais</a>
							</td>
						</tr>
						@empty
							<p>Nenhum projeto Cadastrado</p>
						@endforelse
					</tbody>

			 </table>

        </div>
		<hr color="white">
		
		
		
		</div>
		
		
      </div>
   
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
</section>
	
	
	
	
	
	
	
	
	<div class="modal fade" id="modal-default-projeto" tabindex="-1" role="dialog" aria-labelledby="modal-default-projeto" aria-hidden="true">
                    <div class="modal-dialog-lg-12"  role="document">
                       
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default font-weight-900">Título de Projeto</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
							<!-- <div class="form-group text-center font-weight-900"> -->
                            <!--     <h3 class="font-weight-900"> Título de Projeto </h3> -->
                                <!--</div> -->

                               <h5>Resumo </h5>
							   <p class="description mt-3 "><p align="justify" style="text-indent: 25px;"> 
							   Você sabe o que fazer com o seu lixo? A sociedade como um todo têm se visto diante de um novo dilema: o que fazer com o lixo que produzem. À medida que novas tecnologias são disponibilizadas no mercado, aparelhos são substituídos com uma frequência cada vez maior. Por todo o mundo empresas têm sido responsabilizadas pelo ciclo completo de seus produtos, inclusive após o descarte dos mesmos. Saber o que fazer com o lixo produzido é fundamental para uma sociedade mais próspera e sustentável.
							   Você sabe o que fazer com o seu lixo? A sociedade como um todo têm se visto diante de um novo dilema: o que fazer com o lixo que produzem. À medida que novas tecnologias são disponibilizadas no mercado, aparelhos são substituídos com uma frequência cada vez maior. Por todo o mundo empresas têm sido responsabilizadas pelo ciclo completo de seus produtos, inclusive após o descarte dos mesmos. Saber o que fazer com o lixo produzido é fundamental para uma sociedade mais próspera e sustentável.
							   </p></p>
							   <h5>Público Alvo </h5>
							   <p class="description mt-3"><p align="justify" style="text-indent: 25px;"> 
							   Você sabe o que fazer com o seu lixo? A sociedade como um todo têm se visto diante de um novo dilema: o que fazer com o lixo que produzem. À medida que novas tecnologias são disponibilizadas no mercado, aparelhos são substituídos com uma frequência cada vez maior. Por todo o mundo empresas têm sido responsabilizadas pelo ciclo completo de seus produtos, inclusive após o descarte dos mesmos. Saber o que fazer com o lixo produzido é fundamental para uma sociedade mais próspera e sustentável.
							   </p></p>
							   <h5>Impactos </h5>
							   <p class="description mt-3"><p align="justify" style="text-indent: 25px;"> 
							   Você sabe o que fazer com o seu lixo? A sociedade como um todo têm se visto diante de um novo dilema: o que fazer com o lixo que produzem. À medida que novas tecnologias são disponibilizadas no mercado, aparelhos são substituídos com uma frequência cada vez maior. Por todo o mundo empresas têm sido responsabilizadas pelo ciclo completo de seus produtos, inclusive após o descarte dos mesmos. Saber o que fazer com o lixo produzido é fundamental para uma sociedade mais próspera e sustentável.
							    </p></p>
							   <h5>Contrapartidas </h5>
							   <p class="description mt-3"><p align="justify" style="text-indent: 25px;"> 
							   Você sabe o que fazer com o seu lixo? A sociedade como um todo têm se visto diante de um novo dilema: o que fazer com o lixo que produzem. À medida que novas tecnologias são disponibilizadas no mercado, aparelhos são substituídos com uma frequência cada vez maior. Por todo o mundo empresas têm sido responsabilizadas pelo ciclo completo de seus produtos, inclusive após o descarte dos mesmos. Saber o que fazer com o lixo produzido é fundamental para uma sociedade mais próspera e sustentável.
							   </p></p>
                            </div>

                          <!--  <div class="modal-footer text-center">
                               <button type="submit" class="btn btn-success btn-block">Sim EU QUERO</button>
                            </div> -->

                        </div>
                        
                    </div>
                </div>
