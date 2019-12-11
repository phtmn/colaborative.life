@extends('admin.home')

@section('content')
    <div class="x_panel">

        <div class="x_title">
            <a href="{{route('admin-projetos.index')}}"><i class="fa fa-arrow-left"></i> Voltar para Lista</a>

            <h3>Informações do Projeto: </h3>
        </div>

        <div class="container-mt--7">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body bg-transparent">
                        {{ Form::model($projeto,['route'=>['admin-projetos.update',$projeto->id] ]) }}
                        @method('PUT')
                        @csrf
                        <p class="text-success mt-2">Dados Gerais</p>
                        <hr>
                        @include('proponente.projetos.forms.section1_edit')
                        <p class="text-success mt-2">Dados do Proponente </p>
                        <hr>
                        @include('proponente.projetos.forms.section2_edit')
                        <p class="text-success mt-2">Dados Bancários </p>
                        <hr>
                        @include('proponente.projetos.forms.section3_edit')
                        <hr>
                        <div data-target="fields-fill-from-ajax" style="display: {{ ($projeto->status == 'Captação em análise' OR $projeto->status == 'Não Aprovado para Captação') ? 'none' : 'block' }}">
                            <p class="text-success mt-2">Dados do proponente </p>
                            <hr>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label text-right">Versalic </label>
                                <div class="form-group col-md-3">
                                    <input type="text" name="tipo_pessoa" class="form-control" data-target="tipo-pessoa" value="{{ $projeto->tipo_pessoa }}" readonly>
                                </div>

                                <div class="form-group col-md-5">
                                    <input type="text" name="responsavel" class="form-control" data-target="responsavel" value="{{ $projeto->responsavel }}" readonly>
                                </div>

                                <div class="form-group col-md-3"></div>

                                <div class="form-group col-md-3">
                                    @if($projeto->status == 'Captação em análise')
                                        <input type="text" class="form-control" data-target="cpf-or-cnpj" readonly>
                                    @else
                                        <input type="text" class="form-control" name="{{ ($projeto->cpf) ? 'cpf' : 'cnpj' }}" data-target="cpf-or-cnpj" value="{{ ($projeto->cpf) ? $projeto->cpf : $projeto->cnpj }}" readonly>
                                    @endif
                                </div>

                                <div class="form-group col-md-4">
                                    <input type="text" name="municipio" class="form-control" data-target="municipio" value="{{ $projeto->municipio }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            @if($projeto->status == 'Captação em análise')
                                <button type="button" class="btn btn-outline-danger" data-target="project-reproved"><i class="ni ni-check-bold"></i> Reprovar</button>
                                <button type="button" class="btn btn-outline-primary" data-target="get-data-from-versalic"><i class="ni ni-check-bold"></i>VERSALIC</button>
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
                  const inputTipoPessoa = $('input[data-target=tipo-pessoa]');
                  const inputResponsavel = $('input[data-target=responsavel]');
                  const inputCpfOrCnpj = $('input[data-target=cpf-or-cnpj]');
                  const inputMunicipio = $('input[data-target=municipio]');

                  inputTipoPessoa.val(proponente.tipo_pessoa);
                  inputResponsavel.val(proponente.responsavel);
                  inputCpfOrCnpj.val(formatCpfOrCnpj(proponente.cgccpf)).attr('name', (response.cgccpf.legth === 11) ? 'cpf' : 'cnpj');
                  inputMunicipio.val(response.municipio);

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
