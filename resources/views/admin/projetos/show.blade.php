@extends('admin.home')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-default opacity-7"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-collection text-white"></i> Projetos</h1>
            </div>
        </div>
    </div>
</div>
@stop

@section('conteudo')
    

        <!-- <div class="x_title">
            <a href="{{route('admin-projetos.index')}}"><i class="fa fa-arrow-left " ></i> Voltar para Lista</a>

            
        </div> -->

        <div class="container-mt--7">
            <div class="col-md-12 mt-5">
                <div class="card shadow">
                    <div class="card-body bg-transparent">
                        {{ Form::model($projeto,['route'=>['admin-projetos.update',$projeto->id] ]) }}
                        @method('PUT')
                        @csrf
                        <p class="text-default font-weight-bold mt-2">Dados Gerais</p>
                        <hr>
                        @include('admin.projetos.forms.section1_edit')
                        <p class="text-default font-weight-bold mt-2">Dados do Proponente </p>
                        <hr>
                        @include('admin.projetos.forms.section2_edit')
                        <p class="text-default font-weight-bold mt-2">Dados Bancários </p>
                        <hr>
                        @include('admin.projetos.forms.section3_edit')
                        <hr>
                        @include('admin.projetos.forms.section4_edit')
                        <div data-target="fields-fill-from-ajax" style="display: {{ ($projeto->status == 'Captação em análise' OR $projeto->status == 'Não Aprovado para Captação') ? 'none' : 'block' }}">
                        <p class="text-default font-weight-bold mt-2">Dados do Versalic </p>
                        <hr>
                        @include('admin.projetos.forms.section5_edit')
                            
                        </div>
                        <div class="card-footer text-center">
                        <a class="btn btn-outline-default" href="{{route('admin-projetos.index')}}">
                            <i class="ni ni-bold-left"></i> Voltar
                        </a>
                            @if($projeto->status == 'Captação em análise')
                                <button type="button" class="btn btn-outline-danger" data-target="project-reproved"><i class="ni ni-check-bold"></i> Reprovar</button>
                                <button type="button" class="btn btn-outline-primary" data-target="get-data-from-versalic"><i class="ni ni-check-bold"></i>Capturar dados do VERSALIC</button>
                                <button type="submit" class="btn btn-outline-success"><i class="ni ni-check-bold"></i> Aprovar</button>
                            @endEmpty
                        </div>
                        {{ Form::close() }}

                        <div data-target="form-hidden">
                            {{ Form::model($projeto,['route'=>['admin-projetos.update',$projeto->id]]) }}
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="status" value="Não Aprovado para Captação">
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
@stop

@section('js')
    <script>
      $(document).ready(function() {
        const buttonProjectReproved = $('button[data-target=project-reproved]');
        const buttonVersalic = $('button[data-target=get-data-from-versalic]');
        const buttons = $('.card-footer button');
        const formHidden = $('[data-target=form-hidden] form');

        buttonVersalic.click(function() {
          buttons.css({ 'pointer-events': 'none', 'opacity': '.5' })

          $.ajax({
            url: `http://api.salic.cultura.gov.br/v1/projetos/${"{{ $projeto->num_pronac }}"}`,
            type : 'get'
          })
            .done((response) => {
              $.ajax({
                url: `http://api.salic.cultura.gov.br/v1/proponentes/?nome=${response.proponente}`,
                type : 'get'
              })
                .done(({_embedded}) => {
                  const proponente = _embedded.proponentes[0];
                  const boxFields = $('[data-target=fields-fill-from-ajax]')
                  
                  const inputNome = $('input[data-target=nome]');                 
                  
                  const inputResponsavel = $('input[data-target=responsavel]');
                  const inputCpfOrCnpj = $('input[data-target=cpf-or-cnpj]');
                  
                  const inputPRONAC = $('input[data-target=pronac]');   
                  const inputSegmento = $('input[data-target=segmento]');   
                  const inputArea = $('input[data-target=area]');   

                  const inputMecanismo = $('input[data-target=mecanismo]');   
                  const inputEnquadramento = $('input[data-target=enquadramento]'); 
                  const inputMunicipio = $('input[data-target=municipio]'); 
                  const inputUF = $('input[data-target=uf_projeto]');  

                  const inputAno_projeto = $('input[data-target=20ano_projeto]');
                  const inputData_termino = $('input[data-target=data_termino]');
                  const inputData_inicio = $('input[data-target=data_inicio]');

                  const inputValor_proposta = $('input[data-target=valor_proposta]');
                  const inputValor_aprovado = $('input[data-target=valor_aprovado]');

                  const inputValor_solicitado = $('input[data-target=valor_solicitado]');
                  const inputOutras_fontes = $('input[data-target=outras_fontes]');

                  const inputValor_captado = $('input[data-target=valor_captado]');
                  const inputValor_projeto = $('input[data-target=valor_projeto]');

                  const inputResumo = $('input[data-target=resumo]');

                  const inputEtapa = $('input[data-target=etapa]');

                  const inputObjetivos = $('input[data-target=objetivos]');

                  const inputSinopse = $('input[data-target=sinopse]');

                  const inputJustificativa = $('input[data-target=justificativa]');

                  const inputFicha_tecnica = $('input[data-target=ficha_tecnica]');

                  const inputEspecificacao_tecnica = $('input[data-target=especificacao_tecnica]');

                  const inputimpacto_ambiental = $('input[data-target=impacto_ambiental]');

                  const inputDemocratizacao = $('input[data-target=democratizacao]');

                  const inputAcessibilidade = $('input[data-target=acessibilidade]');

                  // const inputTipoPessoa = $('input[data-target=tipo-pessoa]');                  
                  
                  
                  inputNome.val(response.nome);

                  inputResponsavel.val(proponente.responsavel);
                  inputCpfOrCnpj.val(formatCpfOrCnpj(proponente.cgccpf)).attr('name', (response.cgccpf.legth === 11) ? 'cpf' : 'cnpj');
                  
                  inputPRONAC.val(response.pronac);
                  inputSegmento.val(response.segmento);
                  inputArea.val(response.area);

                  inputMecanismo.val(response.mecanismo);
                  inputEnquadramento.val(response.enquadramento);
                  inputMunicipio.val(response.municipio);
                  inputUF.val(response.UF);

                  inputAno_projeto.val(response.ano_projeto);
                  inputData_termino.val(response.data_termino);
                  inputData_inicio.val(response.data_inicio);
                  
                  inputValor_proposta.val(response.valor_proposta); 
                  inputValor_aprovado.val(response.valor_aprovado); 

                  inputValor_solicitado.val(response.valor_solicitado); 
                  inputOutras_fontes.val(response.outras_fontes); 

                  inputValor_captado.val(response.valor_captado); 
                  inputValor_projeto.val(response.valor_projeto); 

                  inputResumo.val(response.resumo); 

                  inputEtapa.val(response.etapa); 

                  inputObjetivos.val(response.objetivos); 

                  inputSinopse.val(response.sinopse); 

                  inputJustificativa.val(response.justificativa); 

                  inputFicha_tecnica.val(response.ficha_tecnica); 

                  inputEspecificacao_tecnica.val(response.especificacao_tecnica); 

                  inputimpacto_ambiental.val(response.impacto_ambiental); 

                  inputDemocratizacao.val(response.democratizacao); 

                  inputAcessibilidade.val(response.acessibilidade); 
                  
                  // inputTipoPessoa.val(proponente.tipo_pessoa);                  
                  

                  boxFields.css({ display: 'block' });
                  buttons.not($(this)).css({ 'pointer-events': 'visible', 'opacity': '1' })
                })
                .fail((jqXHR, textStatus, msg) => {
                  alert('Projeto não é válido')
                  buttons.css({ 'pointer-events': 'visible', 'opacity': '1' })
                  console.log('ERROR', msg)
                })
            })
            .fail((jqXHR, textStatus, msg) => {
              alert('Projeto não é válido')
              buttons.css({ 'pointer-events': 'visible', 'opacity': '1' })
              console.log('ERROR', msg)
            })
        })

        buttonProjectReproved.click(() => {
          buttons.css({ 'pointer-events': 'none', 'opacity': '.5' })
          formHidden.submit();
        })

        const formatCpfOrCnpj = (value) => {
          if (value.length === 11) {
            return value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4")
          }

          return value.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, "$1.$2.$3/$4-$5")
        }
      });
    </script>
@stop
