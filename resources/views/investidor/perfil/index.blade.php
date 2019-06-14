@extends('investidor.painel')

@section('conteudo_painel')
    <div class="text-center mt-5">
        <h3>Olá, {{ auth()->user()->apelido }}
            <span class="font-weight-light"></span>
        </h3>
       
        <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i> {{auth()->user()->email}} </div>
		
    </div>
	
	@if(Auth::user()->tipo_conta == 'investidor-pf')
	<div class="col-lg-12 mt-5 mt-lg-0">
              <!-- Menu -->
              <div class="mb-3">
                
              </div>
              <div class="nav-wrapper">
                
				
				
              </div>
			  
			  <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                              
                                <h5 class="text-success text-center"><b>Investidor Social</b></h5>
								
                                <p class="description mt-3 text-justify class="sample-text" style="text-indent: 20px;">Como investidor social você pode realizar investimentos (doação ou patrocínio) em instituições ou projetos cadastrados em nossa base. </p>
                                <div>

                                   
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                                
                                <h5 class="text-success text-center"><b>Voluntário Ativo</b></h5>
                                <p class="description mt-3 text-justify class="sample-text" style="text-indent: 20px;">
								Como voluntário ativo você pode contabilizar suas horas dedicadas a instituição, registrar sua ações e resultados, consultar instituições que comunguem com seus valores e necessitam de suas habilidades, participar do banco de ações positivas e fazer doações de bens e serviços.</p>
                                <div>

                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                                
                                <h5 class="text-success text-center"><b>Voluntário Passivo</b></h5>
                                <p class="description mt-3 text-justify class="sample-text" style="text-indent: 20px;">
								Como voluntário passivo você pode pesquisar Organizações no mundo inteiro, contribuir  com uma causa sem sair de casa e que encaixe com seu tempo disponível, contabilizar sua dedicação a organização ou projeto especifico, trocar experiências e expertise, gerar uma rede de relacionamento para o bem, divulgar para seus familiares, amigos, empresas e pontuar por engajamento.</p>
                                <div>

                                  
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	   
            </div>
          </div>
	 @else
			<div class="col-lg-12 mt-5 mt-lg-0">
              <!-- Menu -->
              <div class="mb-3">
                
              </div>
              <div class="nav-wrapper">
                
				
				
              </div>
			  
			  <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row row-grid">
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                              
                                <h5 class="text-warning	 text-center"><b>Investidor Social</b></h5>
								
                                <p class="description mt-3 text-justify class="sample-text" style="text-indent: 20px;">
								Como investidor social você pode realizar investimentos (doação ou patrocínio) em instituições ou projetos cadastrados em nossa base. 
								
								</p>
                                <div>

                                   
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                                
                                <h5 class="text-warning text-center"><b>Voluntário Ativo</b></h5>
                                <p class="description mt-3 text-justify class="sample-text" style="text-indent: 20px;">
																
								Aqui seu colaborador, pares e parceiros podem engajar em causas que sua empresa comunga dos valores, contabilizar suas horas dedicadas a instituição, fazer campanhas de adesão, registrar sua ações e resultados, consultar instituições que comunguem com seus valores e necessitam de suas habilidades, criar um  banco de ações positivas próprio bem como fazer doações de bens e serviços.
								</p>
                                <div>

                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body py-5">
                                
                                <h5 class="text-warning text-center"><b>Voluntário Passivo</b></h5>
                                <p class="description mt-3 text-justify class="sample-text" style="text-indent: 20px;">
								
								Sua emprsa por pesquisar organizações e causas no mundo inteiro, seus colaboradores, pares e parceiro podem dedicar e engajar a uma causa de forma on-line, contabilizar sua dedicação a organização ou projeto especifico, trocar experiências e expertise, gerar uma rede de relacionamento para o bem, divulgar para seus familiares, amigos, empresas bem como pontuar por engajamento.
								</p>
                                <div>

                                  
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	   
            </div>
          </div>
 @endif		
			  
         
@endsection