<section class="section section-lg bg-default">
<!--<section class="section section-lg bg-default"> -->
<!--<section class="section section-lg bg-success"> -->
<!--<section class="section section-lg bg-success"> -->
      <div class="container pt-lg pb-100 ">
        <div class="row text-center justify-content-center">
         <h2 class="display-3 text-white">Qual problema sua organização resolve?</h2>
		 <p class="lead text-white font-weight-600">{{ $d->resumo ?? 'Aqui todas as instituições com seus respectivos projetos se inscrevem através de um cadastro completo e parametrizado conforme exigências de organismos internacionais de sustentabilidade. '}} </p>
		 
        </div>
        <div class="row row-grid mt-4">
         
          <div class="col-lg-6">
           <div>
               <H3 class="text-white text-center font-weight-900 mt-5"> Missão</h3>
            </div>
            
            <!-- <p style="text-align:justify; text-indent: 25px;"  class="font-weight-500 text-white mt-5">{{$osc->missao ?? 'Aqui todas as instituições com seus respectivos projetos se inscrevem através de um cadastro completo e parametrizado conforme exigências de organismos internacionais de sustentabilidade.'}}</p> -->
			 <hr color="white">
			 <div class="d-flex justify-content-center mb-1 ">
                <div class="p-2 mt-0 bd-highlight text-white font-weight-900 text-center"></div>
                <div class="p-2 mt-0 bd-highlight text-white font-weight-900 text-center"></div>
			 </div>
          </div>
		 
          <div class="col-lg-6">
    
            
            {{-- @if($osc->video_institucional)
                <div class="card shadow mt-5 text-center ">
                    <p>Video Institucional</p>
                    <div class="p-3">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{$osc->video_institucional}}" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            @endif --}}
          </div>
		 
            
        
          </div>
        </div>
      </div>
   
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-success" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
