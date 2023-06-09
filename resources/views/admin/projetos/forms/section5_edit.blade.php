<section>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Nome do projeto </label>
        <div class="col-sm-8">
            <input type="text" name="nome" class="form-control" data-target="nome" value="{{ $projeto->nome }}"
                >
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Nome do proponente </label>
        <div class="col-sm-5">
            <input type="text" name="responsavel" class="form-control" data-target="responsavel"
                value="{{ $projeto->responsavel }}" >
        </div>
        <div class="col-sm-3">
            @if($projeto->status == 'Captação em análise')
            <input type="text" class="form-control" data-target="cpf-or-cnpj" readonly>
            @else
            <input type="text" class="form-control" name="{{ ($projeto->cpf) ? 'cpf' : 'cnpj' }}"
                data-target="cpf-or-cnpj" value="{{ ($projeto->cpf) ? $projeto->cpf : $projeto->cnpj }}" readonly>
            @endif
        </div>

    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Segmento </label>
        <div class="col-sm-3">
            <input type="text" name="segmento" class="form-control" data-target="segmento"
                value="{{ $projeto->segmento }}" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Área </label>
        <div class="col-sm-3">
            <input type="text" name="area" class="form-control" data-target="area" value="{{ $projeto->area }}"
                readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Mecanismo </label>
        <div class="col-sm-3">
            <input type="text" name="mecanismo" class="form-control" data-target="mecanismo"
                value="{{ $projeto->mecanismo }}" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Enquadramento </label>
        <div class="col-sm-3">
            <input type="text" name="enquadramento" class="form-control" data-target="enquadramento"
                value="{{ $projeto->enquadramento }}" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Município/UF </label>
        <div class="col-sm-3">
            <input type="text" name="municipio" class="form-control" data-target="municipio"
                value="{{ $projeto->municipio }}" readonly>
        </div>
        <div class="col-sm-1">
            <input type="text" name="uf_projeto" class="form-control" data-target="uf_projeto"
                value="{{ $projeto->uf_projeto }}" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Ano do projeto </label>
        <div class="col-sm-2">
            <input type="text" name="ano_projeto" class="form-control" data-target="ano_projeto"
                value="{{ $projeto->ano_projeto }}" readonly>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Data </label>
        <div class="col-sm-3">

            <input type="text" name="data_inicio" class="form-control" data-target="data_inicio"
                value="{{ date('d/m/Y',strToTime($projeto->data_inicio)) }}  " readonly>
            <label class="form-control-label">Início </label>
        </div>
        <div class="col-sm-3">
            <input type="text" name="data_termino" class="form-control" data-target="data_termino"
                value="{{ date('d/m/Y',strToTime($projeto->data_termino)) }} " readonly>
            <label class="form-control-label">Término </label>
        </div>

    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Valor (R$)</label>
        <div class="col-sm-3">
            <input type="text" name="valor_proposta" class="form-control" data-target="valor_proposta"
                value=" {{$projeto->valor_proposta}} " readonly>
            <label class="form-control-label">Proposta </label>
        </div>
        <div class="col-sm-3">
            <input type="text" name="valor_solicitado" class="form-control" data-target="valor_solicitado"
                value=" {{$projeto->valor_proposta}} " readonly>
            <label class="form-control-label">Solicitado </label>
        </div>
        <div class="col-sm-3">
            <input type="text" name="valor_aprovado" class="form-control" data-target="valor_aprovado"
                value=" {{ $projeto->valor_aprovado }} " readonly>
            <label class="form-control-label">Aprovado </label>
        </div>

        <div class="col-sm-3">

            <label class="form-control-label"> </label>
        </div>
        <div class="col-sm-3">
            <input type="text" name="valor_projeto" class="form-control" data-target="valor_projeto"
                value=" {{ $projeto->valor_projeto }} " readonly>
            <label class="form-control-label">Projeto </label>
        </div>
        <div class="col-sm-3">
            <input type="text" name="valor_captado" class="form-control" data-target="valor_captado"
                value="{{ $projeto->valor_captado}}" readonly>
            <label class="form-control-label">Captado </label>
        </div>
        <div class="col-sm-3">
            <input type="text" name="outras_fontes" class="form-control" data-target="outras_fontes"
                value="{{ $projeto->outras_fontes}} " readonly>
            <label class="form-control-label">Outras fontes </label>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Resumo </label>
        <div class="col-sm-8">
            <textarea name="resumo" class="form-control" data-target="resumo"  rows="2"
                resize="none">{{ $projeto->resumo }} </textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Etapa </label>
        <div class="col-sm-8">
            <textarea name="etapa" class="form-control" data-target="etapa"  rows="2"
                resize="none">{{ $projeto->etapa }} </textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Objetivos </label>
        <div class="col-sm-8">
            <textarea name="objetivos" class="form-control" data-target="objetivos"  rows="2"
                resize="none">{{ $projeto->objetivos }} </textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Sinopse </label>
        <div class="col-sm-8">
            <textarea name="sinopse" class="form-control" data-target="sinopse"  rows="2"
                resize="none">{{ $projeto->sinopse }} </textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Justificativa </label>
        <div class="col-sm-8">
            <textarea name="justificativa" class="form-control" data-target="justificativa"  rows="2"
                resize="none">{{ $projeto->justificativa }} </textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Ficha Técnica </label>
        <div class="col-sm-8">
            <textarea name="ficha_tecnica" class="form-control" data-target="ficha_tecnica"  rows="2"
                resize="none">{{ $projeto->ficha_tecnica }} </textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Especificação Técnica </label>
        <div class="col-sm-8">
            <textarea name="especificacao_tecnica" class="form-control" data-target="especificacao_tecnica" 
                rows="2" resize="none">{{ $projeto->especificacao_tecnica }} </textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Impacto Ambiental </label>
        <div class="col-sm-8">
            <textarea name="impacto_ambiental" class="form-control" data-target="impacto_ambiental"  rows="2"
                resize="none">{{ $projeto->impacto_ambiental }} </textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Democratização </label>
        <div class="col-sm-8">
            <textarea name="democratizacao" class="form-control" data-target="democratizacao"  rows="2"
                resize="none">{{ $projeto->democratizacao }} </textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Acessibilidade </label>
        <div class="col-sm-8">
            <textarea name="acessibilidade" class="form-control" data-target="acessibilidade"  rows="2"
                resize="none">{{ $projeto->acessibilidade }} </textarea>
        </div>
    </div>

</section>