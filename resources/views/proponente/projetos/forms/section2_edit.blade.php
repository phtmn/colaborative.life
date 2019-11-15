<section>        
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Telefone </label>
        <div class="col-sm-3">
            <input type="text" name="telefone" class="form-control" value="{{$projeto->telefone}} " id="telefone" >
        </div>
    </div>    
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right ">Endereço</label>
        <div class="form-group col-md-2">
            <input type="text" name="cep" class="form-control" value="{{$projeto->cep}}" id="cep" placeholder="CEP">
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="logradouro" class="form-control" value="{{$projeto->logradouro}}" placeholder="Logradouro/Av.">
        </div>
        <div class="form-group col-md-3">
            
        </div>
        <div class="form-group col-md-3">
            <input type="text" name="bairro" class="form-control" value="{{$projeto->bairro}}" placeholder="Bairro">
        </div>
        <div class="form-group col-md-4">
            <input type="text" name="cidade" class="form-control" value="{{$projeto->cidade}}" placeholder="Cidade">
        </div>
        <div class="form-group col-md-1">
            <input type="text" name="uf" class="form-control" value="{{$projeto->uf}}" maxlength="2" placeholder="UF">
        </div>
    </div>  
</section>