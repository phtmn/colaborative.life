@extends('layouts.dashboard')


@section('cabecalho')

    <div class="header pb-5 d-flex align-items-center" style="min-height: 350px;  background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-10">
					<h1 class="display-2 text-white"> <i class="ni ni-circle-08 text-white"></i> Perfil</h1>
                    <!-- <h1 class="display-2 text-white">Olá, {{ auth()->user()->name}}</h1>  -->
						<!-- {{-- <p class="text-white mt-0 mb-2">Nesta etapa será preenchido todos os dados de sua Organização. Preencha com cuidado, pois elas serão enviadas para nossa rede de investidores (patrocinadores/doadores). </p> --}} -->
                   <!-- <p class="text-white font-weight-300">Campos com * são obrigatórios</p> -->
                    

                </div>
            </div>
        </div>
    </div>
@stop

@section('conteudo')
    <div class="container mt--7">
          
               
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body bg-transparent">
                        <form action="{{route('osc.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <p class="text-primary mt-2">Dados Gerais</p>
						<hr>
                          
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">Nome </label>
                                    <div class="col-sm-7">
                                        <input type="text" name="nome_fantasia" class="form-control" value="{{ auth()->user()->name}}" readonly>                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">E-mail</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nome_fantasia" class="form-control" value="{{ auth()->user()->email}}" readonly >                                        
                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">Nº do documento <b class="text-primary" data-toggle="tooltip" data-placement="right" title="CPF ou CNPJ"> * </b></label>
                                    <div class="col-sm-3">
                                        <input type="text" name="num_doc" class="form-control" value=" " id="cpfcnpj" placeholder="CPF ou CNPJ" >                                        
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">Telefone </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="telefone" class="form-control" value=" " id="telefone" placeholder="" >                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">CEP</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="cep" class="form-control" value="" id="cep" >                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">Endereço</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="logradouro" class="form-control" value="" >                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">Bairro </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="bairro" class="form-control" value="" >                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">Cidade</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="cidade" class="form-control" value="" >                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">UF</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="uf" class="form-control" value="" maxlength="2">                                        
                                    </div>
                                </div> -->
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-outline-success"><i class="ni ni-check-bold"></i> Salvar</button>
                        </div>
                        </form>
						 </div>
                    </div>
                </div>
            </div>
            
       

@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
 

    <script>
        $(document).ready(function(){
            $('#telefone').mask('(99) 9 9999-9999');
            $("#cpf").mask('000.000.000-00');
            $("#cnpj").mask('00.000.000/0000-00');
            $("#cep").mask('00.000-000');
            $("#ano").mask('0000');
            $("#num").mask('0000');
            $("#op").mask('000');

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#endereco").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#estado").val("");
                $("#ibge").val("");
            }

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

            //Quando o campo cep perde o foco.
            $("#cep").blur(function () {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alertify.error("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alertify.error("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });





        });




    </script>
    

@stop


