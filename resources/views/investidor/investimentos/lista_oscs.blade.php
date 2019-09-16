@extends('layouts.site')


@section('conteudo_principal')
<div class="position-relative">
    <!-- shape Hero -->
    <section class="section section-lg section-shaped pb-250">
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
        <div class="container py-lg-md d-flex">
            <div class="col px-0">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-3  text-white">Realize um investimento agora
                            <span style="line-height: 1.1;">Escolha uma Organização para Investir</span>
                        </h1>
                        <div class="btn-wrapper">
                            <!--  <a href="{{route('register')}}" class="btn btn-success btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="fa fa-handshake-o"></i></span>
                                <span class="btn-inner--text">Seja um investidor</span>
                            </a>
                          <a href="{{route('register')}}" class="btn btn-white btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="fa fa-registered"></i></span>
                                <span class="nav-link-inner--text">Cadastre-se</span>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <!-- 1st Hero Variation -->

</div>

<section class="section section-lg pt-lg-0 mt--300">
<div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-4">
          <!-- Image-Text card -->
          <div class="card">
            <!-- Card image -->
            <img class="card-img-top" src="{{asset('images/2.jpg')}}" alt="Image placeholder">
            <!-- Card body -->
            <div class="card-body">
              <h5 class="h2 card-title mb-0">Get started with Argon</h5>
              <small class="text-muted">by John Snow on Oct 29th at 10:23 AM</small>
              <p class="card-text mt-4">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
              <a href="#!" class="btn btn-link px-0">View article</a>
            </div>
          </div>

          

    <div class="container">




        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                @foreach($data->chunk(3) as $d)
                <div class="row row-grid">
                    @foreach($d as $osc)
                    <div class="col-lg-4">
                        <a href="{{route('detalhe.osc',$osc->id)}}" style="cursor: pointer;">
                            <!-- <div class="card card-lift--hover shadow border-0 bg-white-default"> -->
                            <div class="card">

                                @if(!$osc->logo)
                                <center> <img src="{{asset('vendor/site/images/jacareCoopViva.png')}}" class="card-img-top" style="width:205px; height:205px;"></center>
                                @else
                                <center> <img src="{{$osc->logo}}" class="card-img-top" style="width:205px; height:205px;"> </center>
                                @endif
                                <br>
                                <div class="card-body">




                                    <!-- <h6 class="text-default text-uppercase text-center"><b>{{$osc->num_doc}}</b></h6>
                                    <hr>

                                    <div> -->




                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="row justify-content-center">

                                        <div class="mt-0 d-flex justify-content-center ">


                                            <div class="alert alert-success text-center px-2 py-2" role="alert">
                                                <strong> </strong> Projeto(s)
                                            </div>



                                        </div>
                                    </div>
                                    <!-- <h5><a href="{{route('detalhe.osc',$osc->id)}}"><span class="badge badge-pill badge-default"><b style="text-transform: capitalize;">#SimEuQuero</b></span></a></h5> -->

                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>


        </div>
    </div>
</section>



@endsection