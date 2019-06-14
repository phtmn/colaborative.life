@extends('site.master')


@section('content')

<div class="swiper-container ">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="/vendor/site/images/about-bg.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-10 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h4> Tipo de Acesso</h4>
                                    
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
                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        
                            <header class="entry-header d-flex flex-wrap align-items-center">

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
                                <h3 class="entry-title w-100 m-0">Olá, {{ Auth::user()->name }}</h3>  
                                
                                                  
                            </header><!-- .entry-header -->

                  
                            <div class="card-body">  

        <form class="form form-investidor" action="{{route('perfil.store')}}" method="POST">
              @csrf  
              

              <div class="form-group">
                  <label for="name">Como deseja utilizar o COOPVIVA?</label>
                  <select name="tipo_perfil" id="" class="form-control">
                      <option value="#">Selecione...</option>  
                      <option value="Investidor">Perfil investidor</option> 
                      <option value="Osc">Perfil Organização Social Civil (OSC)</option>                      
                  </select>
                  
              </div>
              <!--  <p>Criar os campos aqui abaixo \/\/\/\/\ </p> -->
              <!-- TODO Criar o campos de acordo com as informações da base-->  
                  

              
              <!-- Fim TODO -->
        
              <div class="form-group d-flex justify-content-center ">
                  <button type="submit" class="btn gradient-bg">Cadastrar</button>
              </div>
              </form>
                           
    </div>
              
                       
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
             
                                   <!--::::::::::::::: cards_Perfil::::::::::::::::::::::::::::-->
    
                    <div class="col-12 col-lg-6" ">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between"> 


                    <header class="entry-header  flex-wrap align-items-center">

                    <h3 class="entry-title w-100 m-0">Formas de Acesso</h3>  

                                    
                    </header><!-- .entry-header -->


                    <div class="card-body">  


                        <div class="form-group">
                        <label for="name"><strong>Perfil Investidor</strong></label>
                        <p class="text-justify">

                    O cadastro como investidor é possivel realizar investimentos (doação/patrocínio) em instituições cadastradas em nossa base...
                    </p>

                    </div>

                    <div class="form-group">
                    <label for="name"><strong>Perfil OSC</strong></label>
                    <p class="text-justify">

                    Com esse cadastro sua instituição terá a possibilidade de receber investimentos (doação/patrocinio) de pessoa física e jurídica em seus projetos cadastrados e aprovados...
                    </p>

                    </div>






</div>




                       
                    </div>
                    </div> 

                     
                              
            </div><!-- .row -->
        </div><!-- .container -->
        </div>
        </br>
    </div><!-- .featured-cause -->
@stop

