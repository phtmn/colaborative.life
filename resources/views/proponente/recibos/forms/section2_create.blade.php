<section>        
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Tipo de operação </label>       
        <div class="form-group col-md-3">
        <select class="form-control" >
            <option value="volvo">..Selecione..</option>
            <option value="saab">Art.26 - [doação]</option>
            <option value="mercedes">Art.26 - [patrocínio]</option>
            <option value="audi">Art.18 - [doação]</option>
            <option value="audi">Art.18 - [patrocínio]</option>
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
        <select class="form-control" >
            <option value="volvo">..Forma de Incentivo..</option>
            <option value="saab">Bens</option>
            <option value="mercedes">Serviços</option>           
            </select>
        </div>
        
    </div>  
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right ">Especificar a Doação/Patrocínio</label>
        <div class="form-group col-md-6">
        <textarea class="form-control" name="especificar" rows="2" resize="none"></textarea>
        </div>
    </div> 
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right ">Forma de avaliação da Doação/Patrocínio</label>
        <div class="form-group col-md-6">
        <textarea class="form-control"  name="forma_av" rows="2" resize="none"></textarea>
        </div>
    </div>
</section>