@extends('layouts.dashboard') 
@section('cabecalho')

    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-success opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                     <h1 class="display-2 text-white"> <i class="ni ni-collection text-white"></i> Projetos </h1>
                    
                    
                </div>
            </div>
        </div>
    </div>
@stop



@section('conteudo')



    <div class="container-mt--7">
     
        <div class="col-md-12">
            <div class="card shadow">

            
                      
                    <div class="card-body bg-transparent">
                    <form action="" method="POST" enctype="multipart/form-data" id="wizard">
                                @csrf
                        <p class="text-success mt-2">Dados Gerais</p>
                        <hr>
                        
                        @include('osc.projetos.forms.section1')
                        <p class="text-success mt-2">Dados do Proponente </p>
									<hr>
                        @include('osc.projetos.forms.section2')
                        <p class="text-success mt-2">Dados Bancários  </p>
									<hr>
                        @include('osc.projetos.forms.section3')
                                    <p class="text-success mt-2">Equipe </p>
									<hr>
                        @include('osc.projetos.forms.section4')			
						<p class="text-success mt-2">Upload </p>
                                    <hr>
                                   			
						<p class="text-success mt-2">Galeria no max 4</p>
					    <hr>			
									
													
							
								<div class="card-footer text-center">
                                <a class="btn btn-outline-success" href="{{ route('projetos.index') }}">
                                            <i class="ni ni-bold-left"></i> Voltar
                                        </a>    
									
								</div>
                                </form>
                               
                            </div>
							</div>
                   
                   
                    
                </div>
        
            
     

    

@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <!-- <script src="{{asset('js/caracter_count.js')}}"> </script> -->
    

   
    <script>
        $(document).ready(function(){
            $("#valor_projeto").mask('#.##0,00', {reverse: true});
            $("#valor_meta").mask('#.##0,00', {reverse: true});
            // $("#telefone1").mask('(00)00000-0000');
            // $("#telefone2").mask('(00)00000-0000');
            // $("#cpf").mask('000.000.000-00');
            // $("#cnpj").mask('00.000.000/0000-00');

        });

        $("#cpfcnpj").keydown(function(){
            try {
                $("#cpfcnpj").unmask();
            } catch (e) {}

            var tamanho = $("#cpfcnpj").val().length;

            if(tamanho < 11){
                $("#cpfcnpj").mask("999.999.999-99");
            } else if(tamanho >= 11){
                $("#cpfcnpj").mask("99.999.999/9999-99");
            }

            // ajustando foco
            var elem = this;
            setTimeout(function(){
                // mudo a posição do seletor
                elem.selectionStart = elem.selectionEnd = 10000;
            }, 0);
            // reaplico o valor para mudar o foco
            var currentValue = $(this).val();
            $(this).val('');
            $(this).val(currentValue);
        });



    </script>
    

@stop

