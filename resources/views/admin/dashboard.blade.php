@extends('admin.home')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
<span class="mask bg-gradient-default opacity-7"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-tv-2 text-white"></i> Dashboard</h1>
            </div>
        </div>
    </div>
</div>
@stop

@section('conteudo')

<div class="container mt--7">
<div class="row">

<div class="col-md-12">
        <div class="">
        <div class="row">
            <div class="col-xl-4 mt-5">
              <div class="card ">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Usuários</h5>
                      <span class="h2 font-weight-bold mb-0">{{$users}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                        <i class="ni ni-circle-08"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-4  mt-5 ">
              <div class="card ">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Projetos</h5>
                      <span class="h2 font-weight-bold mb-0">{{$projetos}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                        <i class="ni ni-collection"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            
            <div class="col-xl-4  mt-5">
              <div class="card ">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Investimentos</h5>
                      <span class="h2 font-weight-bold mb-0">R$ {{ number_format($investimentos,2,',','.') }}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
          </div>
        
    
           

        </div>
    </div>
</div>
</div>
</div>


   
@stop