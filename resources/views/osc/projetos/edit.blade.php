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
                    <form action="{{route('projetos.update','$projeto->id')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                        <p class="text-success mt-2">Dados Gerais</p>
                        <hr>
               
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Nome </label>
                                        <div class="col-md-7">
                                        <input type="text" name="nome_projeto" class="form-control" value="{{$projeto->nome_projeto}} "  placeholder="Título do projeto" >                                        
                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Data <b class="text-success" data-toggle="tooltip" data-placement="right" title="DATA DA PUBLICAÇÃO DA PORTARIA DE APROVAÇÃO NO DOU"> * </b></label>
                                        <div class="col-md-3">
                                        <input type="date" name="data_dou" class="form-control" value="{{$projeto->data_dou}} "  >                                                                                    
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Nº do PRONAC </label>
                                        <div class="col-md-2">
                                            <input type="text" name="num_pronac" class="form-control" value="{{$projeto->num_pronac}} "  >                                             
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Segmento Cultural </label>
                                        <div class="col-md-4">
                                        <input type="text" name="segmento" class="form-control" value="{{$projeto->segmento}} "  >                                             
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Tipo da Operação</label>
                                <div class="col-md-3">
                                <select class="form-control" name="tipo_operacao" value="{{$projeto->tipo_operacao}}">
                                        <option>Art. 18 da Lei</option>
                                        <option>Art. 26 da Lei</option>                                        
                                        </select>

                                  
                                </div>
                            </div>

                                    <!-- <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right"> Resumo </label>
                                        <div class="col-md-7">
                                        <textarea class="form-control" name="resumo" value="{{$projeto->resumo}} " rows="5" resize="none" maxlenght="250" placeholder="Descrição resumida do seu projeto. Use no máximo 250 caracteres!"></textarea>
                                        -->
                                            <!-- {!! Form::textarea('descricao_resumida',null,["class"=>"form-control contador8",'required'=>'true','style'=>'resize: none', 'rows'=>'3','maxlenght'=>'250', 'placeholder'=>'Descrição resumida do seu projeto. Use no máximo 250 caracteres!']) !!} -->
											<!-- <span class='caracteres8'></span>                                           
                                        </div>
                                    </div> -->

                                    <!-- <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Meta de Captação (R$)</label>
                                        <div class="col-md-3">
                                        <input type="text" name="valor_meta" class="form-control" value="{{$projeto->valor_meta}} " id="valor_meta"  >                                             
                                           
                                        </div>
                                    </div> -->
									
								    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right">Link VESALIC</label>
                                        <div class="col-md-5">
                                        <input type="text" name="link_vesalic" class="form-control" value="{{$projeto->link_vesalic}} "  >                                             
                                            
                                        </div>
                                    </div>
                                    <p class="text-success mt-2">Dados Bancários </p>
									<hr>
									
									
									<div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label text-right mt-3">Conta <b class="text-success">Captação</b></label>
                                        <div class="col-md-9">
                                            <div class="row">
                                        
                                        <div class="form-group col-md-4">
                                       
                                            {!! Form::label('Banco') !!}
                                            {!! Form::text('banco',null,['class'=>'form-control', 'placeholder'=>'Banco do Brasil S.A.', 'readonly']) !!}
                                        </div>

                                        <div class="form-group col-md-3">
                                       
                                            {!! Form::label('Agência') !!}
                                            {!! Form::text('banco_ag',null,['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group col-md-3">
                                       
                                            {!! Form::label('Conta') !!}
                                            {!! Form::text('banco_cc',null,['class'=>'form-control']) !!}
                                        </div> 
                                        
                                    </div>
                                        </div>
                                    </div>
									
													
							
								<div class="card-footer text-center">
							
									<button type="submit" class="btn btn-outline-success"><i class="ni ni-check-bold"></i> Salvar</button> 
								</div>
                                </form>
                               
                            </div>
							</div>
                   
                   
                    
                </div>
        
            
     

    

@stop

@section('js')
<script src="{{asset('js/jquery.mask.min.js')}}"> </script>
<script src="{{asset('js/caracter_count.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $("#valor_projeto").mask('#.##0,00', {reverse: true});
            $("#valor_meta").mask('#.##0,00', {reverse: true});
            $("#telefone1").mask('(00)00000-0000');
            $("#telefone2").mask('(00)00000-0000');
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
    <script>
        $(document).ready(function(){
            let incentivo        = $('#incentivo');
            let boxLei           = $('#box-lei');
            let boxSegmento      = $('#box-segmento');

            incentivo.change(function(){
                if(incentivo.val() == 1){
                    boxLei.css({'display':'block'});
                    boxSegmento.css({'display':'none'})
                }else{
                    boxLei.css({'display':'none'});
                    boxSegmento.css({'display':'block'})
                }
            });
        });


        $(document).ready(function(){
            let artigo     = $('#artigo');
            let boxArtigo  = $('#box-artigo');

            artigo.change(function(){
                if(artigo.val() == 'Lei Rouanet'){
                    boxArtigo.css({'display':'block'});
                }else{
                    boxArtigo.css({'display':'none'});
                }
            });
        });
    </script>


@stop

