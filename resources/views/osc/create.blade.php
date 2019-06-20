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
                    {{--<h1 class="display-2 text-white">Olá, {{ auth()->user()->apelido}}</h1> --}}
						{{-- <p class="text-white mt-0 mb-2">Nesta etapa será preenchido todos os dados de sua Organização. Preencha com cuidado, pois elas serão enviadas para nossa rede de investidores (patrocinadores/doadores). </p> --}}
                   <!-- <p class="text-white font-weight-300">Campos com * são obrigatórios</p> -->
                    

                </div>
            </div>
        </div>
    </div>
@stop

@section('conteudo')
    <div class="container mt--7">
        <div class="row">
  
                {!! Form::open(['route'=>'osc.store','enctype'=>'multipart/form-data']) !!}
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body bg-transparent">
                                <p class="text-primary mt-2">Dados Gerais</p>
						<hr>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Nome Fantasia <b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                <div class="col-sm-9">
                                    {!! Form::text('nome_fantasia',null,['class'=>'form-control']) !!}
                                    @if ($errors->has('nome_fantasia'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('nome_fantasia') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">
                                    CNPJ
                                </label>
                                <div class="col-sm-3">
                                    {!! Form::text('cnpj',null,['class'=>'form-control','id'=>'ano','id'=>'cnpj']) !!}
                                    @if ($errors->has('cnpj'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('cnpj') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Telefone</label>
                                <div class="col-sm-3">
                                    {!! Form::text('telefone',null,['class'=>'form-control','id'=>'telefone']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cep" class="col-sm-3 col-form-label text-right">CEP</label>
                                <div class="col-sm-3">
                                    {!! Form::text('cep',null,['class'=> 'form-control','id'=>'cep']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rua" class="col-sm-3 col-form-label text-right">Rua/Logradouro</label>
                                <div class="col-sm-9">
                                    {!! Form::text('rua',null,['class'=> 'form-control','id'=>'endereco']) !!}
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="Bairro" class="col-sm-3 col-form-label text-right">Bairro</label>
                                <div class="col-sm-4">
                                    {!! Form::text('bairro',null,['class'=> 'form-control','id'=>'bairro']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="numero" class="col-sm-3 col-form-label text-right">Número</label>
                                <div class="col-sm-2">
                                    {!! Form::text('numero',null,['class'=> 'form-control','id'=>'num']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cidade" class="col-sm-3 col-form-label text-right">Cidade <b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                <div class="col-sm-6">
                                    {!! Form::text('cidade',null,['class'=> 'form-control','id'=>'cidade']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="uf" class="col-sm-3 col-form-label text-right">Estado <b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                <div class="col-sm-3">
                                    {!! Form::text('uf',null,['class'=> 'form-control','id'=>'estado']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="complemento" class="col-sm-3 col-form-label text-right">Complemento</label>
                                <div class="col-sm-2">
                                    {!! Form::text('complemento',null,['class'=> 'form-control']) !!}
                                </div>
                            </div>

                            


                             
										
										
										
										
							

							<div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Espaço Livre</label>
                                <div class="col-md-9">
                                   {!! Form::textarea('espaco_livre',null,['class'=>'form-control contador7',
                                             'style'=>'resize: none', 'rows'=>'5',
                                             'placeholder'=>'Se uma revista internacional muito importante lhe convidasse para escrever uma matéria sobre sua organização, qual seria o título e quais os diferenciais você indicaria para esta matéria? Use no máximo 500 caracteres! ']) !!}
                                    <span class='caracteres7'></span>
									@if ($errors->has('espaco_livre'))
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('espaco_livre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right"> Site <b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                <div class="col-md-7">
                                    {!! Form::url('site',null,['class'=>'form-control','placeholder'=>'exemplo: https://www.coopviva.com.br']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right"> Vídeo Institucional <b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                <div class="col-md-7">
                                    {!! Form::text('video_institucional',null,['class'=>'form-control','placeholder'=>'exemplo: https://youtube.com/urlDoVideo']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Fan Page <b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                <div class="col-md-7">
                                    {!! Form::text('facebook',null,['class'=>'form-control','placeholder'=>'exemplo: https://facebook.com.br/suainstituicao']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Instagram <b class="text-primary" data-toggle="tooltip" data-placement="right" title="Publicado na Landing Page"> * </b></label>
                                <div class="col-md-7">
                                    {!! Form::text('instagram',null,['class'=>'form-control','placeholder'=>'exemplo: https://www.instagram.com/coopviva']) !!}
                                </div>
                            </div>
                      

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-outline-success"><i class="ni ni-check-bold"></i> Salvar</button>
                        </div>
						 </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
       
    </div>
@stop

@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script src="{{asset('js/caracter_count.js')}}"> </script>

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


