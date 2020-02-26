<section>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Nome </label>
        <div class="col-md-9">
            <div class="row">
                <div class="form-group col-md-8">
                        <input type="text" name="projeto_nome" class="form-control" value="@isset($investimento->projeto->nome) {{ $investimento->projeto->nome }} @endisset" @isset($investimento->projeto->nome) readonly @endisset>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right ">Data <b class="text-blue" data-toggle="tooltip" title="Data da publicação da portaria de aprovação no DOU" >°</b></label>
        <div class="form-group col-md-3">
            <input type="date" name="projeto_data" class="form-control" id="cep" placeholder="CEP" value="@isset($investimento->projeto->data_inicio) {{ $investimento->projeto->data_inicio }} @endisset" @isset($investimento->projeto->data_inicio) readonly @endisset>
        </div>
        <div class="form-group col-md-3">
        <!-- <select class="form-control" >
            <option value="volvo">..Forma de Incentivo..</option>
            <option value="saab">Bens</option>
            <option value="mercedes">Serviços</option>
            </select> -->
        </div>

    </div>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Proponente </label>
        <div class="col-md-9">
            <div class="row">
                <div class="form-group col-md-5">
                    <input type="text" name="projeto_responsavel" class="form-control" placeholder="Nome" value="@isset($investimento->projeto->responsavel) {{ $investimento->projeto->responsavel }} @endisset" @isset($investimento->projeto->responsavel) readonly @endisset>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" name="projeto_telefone" class="form-control" placeholder="Telefone/FAX" value="@isset($investimento->projeto->telefone) {{ $investimento->projeto->telefone }} @endisset" @isset($investimento->projeto->telefone) readonly @endisset>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right ">Endereço</label>
        <div class="form-group col-md-2">
            <input type="text" name="projeto_cep" class="form-control" id="cep" placeholder="CEP" value="@isset($investimento->projeto->cep) {{ $investimento->projeto->cep }} @endisset" @isset($investimento->projeto->cep) readonly @endisset>
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="projeto_logradouro" class="form-control" placeholder="Logradouro/Av." value="@isset($investimento->projeto->logradouro) {{ $investimento->projeto->logradouro }} @endisset" @isset($investimento->projeto->logradouro) readonly @endisset>
        </div>
        <div class="form-group col-md-3">

        </div>
        <div class="form-group col-md-3">
            <input type="text" name="projeto_bairro" class="form-control" placeholder="Bairro" value="@isset($investimento->projeto->bairro) {{ $investimento->projeto->bairro }} @endisset" @isset($investimento->projeto->bairro) readonly @endisset>
        </div>
        <div class="form-group col-md-4">
            <input type="text" name="projeto_cidade" class="form-control" placeholder="Cidade" value="@isset($investimento->projeto->cidade) {{ $investimento->projeto->cidade }} @endisset" @isset($investimento->projeto->cidade) readonly @endisset>
        </div>
        <div class="form-group col-md-1">
            <input type="text" name="projeto_uf" class="form-control" maxlength="2" placeholder="UF" value="@isset($investimento->projeto->uf) {{ $investimento->projeto->uf }} @endisset" @isset($investimento->projeto->uf) readonly @endisset>
        </div>
    </div>



</section>
