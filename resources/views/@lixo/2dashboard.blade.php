@extends('site.master')

@section('content')
    @include('dashboard.menu')





    <div class="container" style="margin-top:20px; padding:20px">


    <div class="row">
        <div class="col-lg-12 col-xlg-3 col-md-5">
                        <div class="card blog-widget">
                            <div class="card-body">
                                <div class="blog-image">
                             
                                
                                </div>
                                <h3>Você Sabia disso?  </h3>
                                
                                <p align="justify" class="m-t-20 m-b-20">
                                    Aqui você tem a oportunidade de participar do maior programa de VOLUNTARIADO  para ações sustentáveis.
                                </p>
                                <div class="d-flex">
                                 
                                 
                                </div>
                            </div>
                        </div>
                    </div>

                              
    </div> 
    </br>

    <div class="row">
    <div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="circular-progress-bar">
                <div class="round round-lg align-self-center round-coopviva"><i class="mdi mdi-cash-usd"></i></div>
                    <div class="m-l-10 align-self-center">
                        <center><h3 class="m-b-0 font-lgiht">TOTAL 1 </h3> </center>
                        <h5 class="text-muted m-b-0"> OCSs Cadastradas</h5>
                    </div> 
                    <hr>
                    <div class="m-l-10 align-self-center">
                        <center><h4 class="m-b-0 font-lgiht">TOTAL 1 </h4> </center>
                        <h5 class="text-muted m-b-0"> Investimentos em OSCs</h5>
                    </div> 
            </div>
        </div>
    </div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="circular-progress-bar">
                <div class="round round-lg align-self-center "><i class="icon-doc text-white"></i></div>
                <div class="m-l-10 align-self-center">
                    <center><h3 class="m-b-0 font-lgiht">TOTAL 1 </h3> </center>
                    <h5 class="text-muted m-b-0"> Projetos Cadastrados</h5>                   
                    </div>
                    <hr>
                    <div class="m-l-10 align-self-center">
                        <center><h4 class="m-b-0 font-lgiht">TOTAL 1 </h4> </center>
                        <h5 class="text-muted m-b-0"> Investimentos em Projetos</h5>
                    </div> 
                    
            </div>
        </div>
    </div>
</div>

<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-body">
        <div class="d-flex flex-row">
                <h3 class="entry-title">Perfil do Usuário</h3>
                <div class="circle" id="loader_1">
                    <strong class="d-flex justify-content-center"></strong>                   
                </div>                
            </div>  
        </div>
    </div>
</div>
    </div>
</br>
    <div class="row">
    <div class="col-lg-8  col-md-12">
                        <div class="card card-inverse card-primary">
                            <div class="card-body">
                            <div class="d-flex no-block">
                                   <h4 class="card-title">Em Destaque</h4> 
                                  <div class="ml-auto">
                                  <ul class="nav nav-tabs justify-content-center ">
                                                <li class="nav-item">
                                                <a class="nav-link active" id="pills-osc-tab" data-toggle="pill" href="#pills-osc" role="tab" aria-controls="pills-osc" aria-selected="true">OSC</a>
                                                </li>
                                                 
                                                <li class="nav-item">
                                                <a class="nav-link " id="pills-projeto-tab" data-toggle="pill" href="#pills-projeto" role="tab" aria-controls="pills-projeto" aria-selected="true">Projeto</a>
                                                </li>
                                             
                                        </ul>
                                      <!--  <select class="custom-select">
                                            <option selected="">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                        </select> -->
                                    </div> 
                                </div> 



                               </br>


                                <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-osc" role="tabpanel" aria-labelledby="pills-osc-tab">
            
                <div class="table-responsive m-t-20">
                                            <table class="table stylish-table">
                                                <thead>
                                                    <tr>
                                                    <!-- <th colspan="2">Investidor</th> -->
                                                    <th>Nome Fantasia</th>                                                                                    
                                                    <th>Resposável Legal</th>                                                    
                                                    <th>Valor Arrecadado (R$) </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <!--<td style="width:50px;"><span class="round">1</span></td> -->
                                                        <td >Cidade VIVA   </td>                                                          
                                                        <td>Pedro Henrique Tolentino </td>                                                    
                                                        <td>R$ 22.000.000,00</td>
                                                    </tr>                                       
                                                
                                                
                                                </tbody>
                                            </table>
                                        </div>
            
      
        </div>

        <div class="tab-pane fade " id="pills-projeto" role="tabpanel" aria-labelledby="pills-projeto-tab">
            
        <div class="table-responsive m-t-20">
                                            <table class="table stylish-table">
                                                <thead>
                                                    <tr>
                                                    <!-- <th colspan="2">Investidor</th> -->
                                                    <th>Nome do Projeto</th>                                                                                    
                                                    <th>Instância </th>                                                    
                                                    <th>Valor Arrecadado (R$)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <!--<td style="width:50px;"><span class="round">1</span></td> -->
                                                        <td >1</td>
                                                        <td>
                                                        <h6>Lei Rouanet</h6></td>
                                                        <!--    <h6>Lei Rouanet</h6><small class="text-muted">Resposável Legal</small></td> -->
                                                                                                           
                                                        <td>R$ 22.000.000,00</td>
                                                    </tr>                                       
                                                
                                                
                                                </tbody>
                                            </table>
                                        </div>
            
        </div>
        </div>


  
                            </div>
                        </div>
                      
                    </div>
        
         
  
@can('osc')      
<div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="d-flex flex-row">
                <h3 class="entry-title">Perfil da OSC</h3>
                <div class="circle" id="loader_2">
                    <strong class="d-flex justify-content-center"></strong>                   
                </div>
                
            </div>  
                            </div>
                        </div>
                    </div>
    </div> 
    @endcan


    

</div>



    




</div>
@stop


