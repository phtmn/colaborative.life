<section>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Tipo de operação </label>
        <div class="form-group col-md-3">
            <select class="form-control" name="tipo_operacao">
                <option value="Art.26 - [doação]">..Selecione..</option>
                <option value="Art.26 - [doação]">Art.26 - [doação]</option>
                <option value="Art.26 - [patrocínio]">Art.26 - [patrocínio]</option>
                <option value="Art.18 - [doação]">Art.18 - [doação]</option>
                <option value="Art.18 - [patrocínio]">Art.18 - [patrocínio]</option>
            </select>
        </div>
        <div class="form-group col-md-3">
        <input type="text" name="valor_incentivo" class="form-control" value="" placeholder="Valor (R$) do Incentivo">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Dandos bancários </label>
        <div class="col-md-9">
            <div class="row">
                <div class="form-group col-md-4">
                    <input type="text" name="banco" class="form-control" value="" placeholder="Banco">
                </div>
                <div class="form-group col-md-2">
                    <input type="text" name="ag" class="form-control" value="" placeholder="Agência" >
                </div>
                <div class="form-group col-md-2">
                    <input type="text" name="cc" class="form-control" value="" placeholder="Conta" >
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right ">Data <b class="text-blue" data-toggle="tooltip" title="Data do recebimento do incentivo" >°</b></label>
        <div class="form-group col-md-3">
            <input type="date" name="data_incentivo" class="form-control" value="" placeholder="CEP">
        </div>
        <div class="form-group col-md-3">
        <select class="form-control" name="forma_incentivo">
            <option value="Bens">..Forma de Incentivo..</option>
            <option value="Bens">Bens</option>
            <option value="Serviços">Serviços</option>
            </select>
        </div>

    </div>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right ">Especificar a Doação/Patrocínio</label>
        <div class="form-group col-md-6">
        <textarea class="form-control" name="especificacao_doacao_patrocinio" rows="2" resize="none"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right ">Forma de avaliação da Doação/Patrocínio</label>
        <div class="form-group col-md-6">
        <textarea class="form-control"  name="forma_avaliacao_doacao_patrocinio" rows="2" resize="none"></textarea>
        </div>
    </div>
</section>
