@extends('site.master')

@section('content')
    @include('dashboard.menu')
    
    <div class="container" style="margin-top:20px">


            <div class="row row justify-content-center">
                        
                @csrf
            <div class="col-md-12">

            <ul class="nav nav-tabs justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><b class="text-dark" > Dados Gerais </b></a>
                </li>
                {{--<li class="nav-item"> --}}
                    {{--<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><b class="text-dark" > Dados Financeiros </b></a> --}}
                        {{--</li> --}}
         
                {{--<li class="nav-item"> --}}
                    {{--<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><b class="text-dark" >Responsável </b></a> --}}
                        {{--</li> --}}

                    <li class="nav-item">
                    <a class="nav-link " id="pills-resumo-tab" data-toggle="pill" href="#pills-resumo" role="tab" aria-controls="pills-resumo" aria-selected="true"><b class="text-dark" >Descrição </b></a>
                </li> 
                
         
            </ul>
            <br>
                {{ Form::open(['route'=>'projetos.store']) }}
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                {{--TabDadosGerais--}}
                    <div class="row"> <!--row-1-->
                        <div class="form-group col-md-6">
                            {!! Form::label('Nome do Projeto') !!}
                            {!! Form::text('nome',null,["class"=>"form-control",'required'=>'true']) !!}
                        </div>

                        <div class="form-group col-md-2 pull-right">
                                    {!! Form::label('Valor (R$)') !!}
                                    {!! Form::text('valor_meta',null,['class'=>'input input-lg form-control','required'=>'true', 'placeholder'=>'R$','id'=>'project_value']) !!}
                                </div>

                        <div class="form-group col-md-2">
                            {!! Form::label('Nº de Registro 1') !!}
                            {!! Form::text('num_registro1',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-2">
                            {!! Form::label('Nº de Registro 2') !!}
                            {!! Form::text('num_registro2',null,['class'=>'form-control']) !!}
                        </div>

                      

                        
                    </div><!--endOfRow1-->

                    <div class="row"><!--row-2-->
                    <div class="form-group col-md-3">
                            {!! Form::label('Instância') !!}
                            {!! Form::select('instancia',[
                                            'Rouanet'   =>  "Lei Rouanet",
                                            'Esporte'  => "Lei Incentivo ao Esporte",
                                            'Criaca_Adolescente' => "Lei Incentivo a Criança e Adolescente"
                                            ],null,
                            ['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Âmbito') !!}
                            {!! Form::select('ambito',[
                                            'Federal'   =>  "Federal",
                                            'Estadual'  => "Estadual",
                                            'Municipal' => "Municipal"
                                            ],null,
                            ['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Segmento ') !!}
                            {!! Form::select('segmento_cultural',[
                                            'Educação'  => "Educação (Crianças/Jovens)",
                                            'Meio'  => "Meio Ambiente",
                                            'Idosos'   => "Idosos",
                                            'Saúde'     => "Saúde",
                                            'Esportes'  => "Esportes",
                                            'Cultura'  => "Cultura"
                                            ],null,
                            ['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-3">
                            {!! Form::label('Artigo de Enquadramento') !!}
                            {!! Form::text('artigo',null,['class'=>'form-control']) !!}
                        </div>
                    </div>


                 
                {{--FimDadosGerais--}}

              

                     

                <br>
        <h4>Responsável </h4>
            <hr>  

             
                    {{--DadosResponsavel--}}
                        <div class="row"><!--row-4-->
                            <div class="form-group col-md-6">
                            {!! Form::label('Nome do Proponente') !!}
                            {!! Form::text('nome',null,['class'=>'form-control']) !!}
                            </div>

                             <div class="form-group col-md-3"> 
                                {!! Form::label('Documento') !!} 
                                {!! Form::select('tipo_documento',[
                                     'CPF'  => "CPF",                                          
                                     'CNPJ' => "CNPJ"],null,
                                 ['class'=>'form-control', 'id'=>'tipo-perfil','placeholder'=> 'selecione']) !!}
                            </div>

                            <div class="form-group col-md-3" id="tipo-perfil">
                            {!! Form::label('Nº do Documento') !!}
                            {!! Form::text('documento',null,['class'=>'form-control','id'=>'cpfcnpj']) !!}
                            </div>
                                                 
                            

                           
                        </div><!--end-of-row-4-->

                        <div class="row"><!--row-5-->
                            <div class="form-group col-md-2">
                            {!! Form::label('Telefone 1') !!}
                            {!! Form::text('telefone_1',null,['class'=>'form-control','id'=>'phone_number']) !!}
                            </div>

                            <div class="form-group col-md-2">
                            {!! Form::label('Telefone 2') !!}
                            {!! Form::text('telefone_2',null,['class'=>'form-control','id'=>'phone_number2']) !!}
                            </div>

                            <div class="form-group col-md-4">
                            {!! Form::label('E-mail Principal') !!}
                            {!! Form::email('email_1',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-md-4">
                            {!! Form::label('E-mail Secundário') !!}
                            {!! Form::email('email_2',null,['class'=>'form-control']) !!}
                            </div>                    


                        </div><!--end-of-row-5-->

                        
                    {{--fimDadosResponsavel--}}
              
              
                    <br>
        <h4>Dados Financeiros </h4>
            <hr>  

              
              
                        
                    
                            <div class="row">
                            
                            <div class="form-group col-md-4">
                 <br><h5 class="text-right">Conta para receber Doações</h5>
                      </div>

                            <!--row-3-->
                                <div class="form-group col-md-3">
                                {!! Form::label('Banco') !!}
                                {!! Form::select('banco_doacao',[
                                'CEF'   =>  "Caixa Economica Federal",
                                'BB'    =>  "Banco do Brasil",
                                'SA'    =>  "Banco Santander",
                                'IT'    =>  "Banco Itaú"
                                ],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-md-2">
                                {!! Form::label('Agência') !!}
                                {!! Form::text('agencia_doacao',null,['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-md-2">
                                {!! Form::label('Conta') !!}
                                {!! Form::text('conta_doacao',null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group col-md-1">
                                    {!! Form::label('DV') !!}
                                    {!! Form::text('contaDv_doacao',null,['class'=>'form-control']) !!}
                                </div>
                            </div><!--end-of-row-3-->

                            
                    <div class="row"><!--row-3-->

                    <div class="form-group col-md-4">
                 <br><h5  class="text-right">Conta para receber Patrocínios</h5>
                      </div>
                        <div class="form-group col-md-3">
                            {!! Form::label('Banco') !!}
                            {!! Form::select('banco_patrocinio',[                       
                            'BB'    =>  "Banco do Brasil"                         
                            ],null,['placeholder'=>'Escolha uma opção','class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-2">
                            {!! Form::label('Agência') !!}
                            {!! Form::text('agencia_patrocinio',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-md-2">
                            {!! Form::label('Conta') !!}
                            {!! Form::text('conta_patrocinio',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-md-1">
                            {!! Form::label('DV') !!}
                            {!! Form::text('contaDv_patrocinio',null,['class'=>'form-control']) !!}
                        </div>
                    </div><!--end-of-row-3-->

                           

                        {{--FimDadosFinaneiros--}}
                </div>

                <div class="tab-pane fade" id="pills-resumo" role="tabpanel" aria-labelledby="pills-resumo-tab">                                    
                                             
                <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Objetivo Geral</label>
                    {!! Form::textarea('objetivo_geral',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                </div>
                <div class="form-group col-md-12">
                    <label for="">Objetivos Específicos</label>
                    {!! Form::textarea('objetivos_esp',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                </div>
                <div class="form-group col-md-12">
                    <label for="">Justificativa</label>
                    {!! Form::textarea('justificativa',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                </div>
                <div class="form-group col-md-12">
                    <label for="">Público Alvo</label>
                    {!! Form::textarea('publico_alvo',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                </div>
                <div class="form-group col-md-12">
                    <label for="">Impactos Esperados</label>
                    {!! Form::textarea('impactos_esperados',null,['class'=>'form-control', 'style'=>'resize: none', 'rows'=>'5']) !!}
                </div>
                

            </div>
                                             
                                             
                </div>

                <div class="tab-pane fade" id="pills-upload" role="tabpanel" aria-labelledby="pills-upload-tab">                                    
                                               upload
                </div>
            </div>
         <center>   <button type="submit" class="btn gradient-bg">Salvar</button> </center>
                {!! Form::close() !!}
            </div>
        </div>
        <br>
    </div>
@stop


@section('js')
    <script src="{{asset('js/jquery.mask.min.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $("#project_value").mask('#.##0,00', {reverse: true});
            $("#phone_number").mask('(00)00000-0000');
            $("#phone_number2").mask('(00)00000-0000');
            $("#cpf").mask('000.000.000-00');
            $("#cnpj").mask('00.000.000/0000-00');
             
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