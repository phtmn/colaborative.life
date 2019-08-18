	<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-image: url({{asset('vendor/argon-dash/assets/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-dark opacity-0"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
					<h1 class="display-2 text-white"> <i class="ni ni-tv-2 text-white"></i> Dashboard</h1>
				</div>		
            </div>
        </div>
    </div>



	
	
<div class="header bg-gradient-dark pb-4 pt-4 pt-md-4">
    
       
        <div class="container-fluid d-flex align-items-center mt--9">
            <div class="row">
                <div class="col-lg-12 col-md-10">

                    
					 
					<div class="ods">
                        <h1 class="display-4 text-white " style="text-indent: 20px;">Olá, {{ auth()->user()->name}}</h1> 
						<h2 class="text-white mt-0 mb-5 text-justify" style="text-indent: 20px;">Aqui no <strong><b>XXX</b></strong>, você pode engajar com projetos ou causas que estão de acordo com seus propósitos de forma planejada, estruturada e transparente. <a href="{{route('quero_investir')}}" class="text-white"> <strong><b><u>#SimEuQuero</u></b></strong></h2>
                    </div>
					

					 
                </div>
            </div>
        </div>
</div>

<div class="header bg-gradient-dark pb-4 pt-4 pt-md-4">
    
       
        <div class="container-fluid d-flex align-items-center mt--6">
            <div class="row">
                <div class="col-lg-12 col-md-10">

                    
					 
                
					

					 
                </div>
            </div>
        </div>
</div>

<div class="header bg-gradient-dark pb-6 pt-5 pt-md-0">
      <div class="container-fluid ">
       
                         <div class="row">
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 ">
                <div class="card-body ">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total</h5>
                      <span class="h2 font-weight-bold mb-0"></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape text-white shadow ">
                        <i class=""><img src="{{asset('vendor/site/images/agenda2030ODS2.ico')}}" class="navbar-brand-img" alt="..."></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    
                    <span class="text-nowrap text-dark font-weight-900">  ODS <b class="text-danger">(Objetivos)</b> cadastradas</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total</h5>
                      <span class="h2 font-weight-bold mb-0"> </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape text-white shadow ">
                        <i class=""><img src="{{asset('vendor/site/images/agenda2030ODS2.ico')}}" class="navbar-brand-img" alt="..."></i>
                      </div>
                    </div>
                  </div>
                 <p class="mt-3 mb-0 text-muted text-sm">
                    
                    <span class="text-nowrap text-dark font-weight-900">  ODS <b class="text-danger">(Metas)</b> cadastradas</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total</h5>
                      <span class="h2 font-weight-bold mb-0">{{ $projetos ?? '0'}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-white text-success rounded-circle shadow">
                        <i class="ni ni-collection "></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    
                    <span class="text-nowrap text-success font-weight-900">  Projetos <b class="text-dark"> cadastrados</b></span>
                  </p>
                </div>
              </div>
            </div>
            
</div>
              	 
                </div>
             
      <div class="container-fluid mt-3">
       
                         <div class="row">
            <div class="col-xl-6 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0 ">
                <div class="card-body ">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">TOTAL (R$)</h5>
                      <span class="h2 font-weight-bold mb-0"> R$ </span>
                    </div>
                    <div class="col-auto">
						<div class="icon icon-shape bg-white text-yellow rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
					
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    
                    <span class="text-nowrap text-dark font-weight-900">  Investimentos recebidos em <b class="text-primary"> </b></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">TOTAL (R$)  </h5>
                      <span class="h2 font-weight-bold mb-0"> </span>
                    </div>
                    <div class="col-auto">
                       <div class="icon icon-shape bg-white text-yellow rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                 <p class="mt-3 mb-0 text-muted text-sm">
                    
                    <span class="text-nowrap text-dark font-weight-900">  Investimentos recebidos em <b class="text-success">Projetos</b></span>
                  </p>
                </div>
              </div>
            </div>
            
            
</div>
              	 
                </div>
            
      <div class="container-fluid mt-3">
       
                         <div class="row">
            <div class="col-xl-12 col-lg-6 ">
              <div class="card card-stats mb-4 mb-xl-0 bg-info">
                <div class="card-body ">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title text-uppercase text-muted mb-0 text-white font-weight-900">Leon Tolstoi</h5>
                      <h2 class="h2 font-weight-bold mb-0 text-white" style="text-indent: 20px;"> “A alegria de fazer o bem é a única felicidade verdadeira” </h2>
                    </div>
                    <div class="col-auto">
						<div class="icon icon-shape bg-white text-info rounded-circle shadow">
                        <i class="ni ni-air-baloon"></i>
                      </div>
					
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            
            
            
</div>
              	 
                </div>
            </div>





 



