<section>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Nome </label>
        <div class="col-md-9">
            <div class="row">
                <div class="form-group col-md-6">                    
                    <input type="text" name="banco" class="form-control" value="" >
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="ag" class="form-control" value="" placeholder="CNPJ/CPF" >                    
                </div>               
            </div>
        </div>
    </div>       
       
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right ">Endereço</label>
        <div class="form-group col-md-2">
            <input type="text" name="cep" class="form-control" value="" id="cep" placeholder="CEP">
        </div>
        <div class="form-group col-md-6">
            <input type="text" name="logradouro" class="form-control" value="" placeholder="Logradouro/Av.">
        </div>
        <div class="form-group col-md-3">
            
        </div>
        <div class="form-group col-md-3">
            <input type="text" name="bairro" class="form-control" value="" placeholder="Bairro">
        </div>
        <div class="form-group col-md-4">
            <input type="text" name="cidade" class="form-control" value="" placeholder="Cidade">
        </div>
        <div class="form-group col-md-1">
            <input type="text" name="uf" class="form-control" value="" maxlength="2" placeholder="UF">
        </div>
    </div>  
     <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Telefone/FAX </label>
        <div class="col-sm-3">
            <input type="text" name="telefone" class="form-control" value=" " id="telefone" >
        </div>
        <div class="form-group col-md-3">
        <select class="form-control" >
            <option value="volvo">..Selecione..</option>
            <option value="saab">Empresa [pública]</option>
            <option value="mercedes">Empresa [privada]</option>    
            </select>
           
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right"> Grupo empresarial <b class="text-blue" data-toggle="tooltip" title="Faz parte de algum grupo empresarial? " >°</b></label>
        <!-- Faz Parte De Algum Grupo Empresarial ?  -->
        <div class="form-group col-md-6">
             <input type="text" name="nome_empesa" class="form-control" value="" placeholder="QUAL?" >       
            <!-- <input type="text" name="nome_empesa" class="form-control" value=" " placeholder="CNPJ/CPF" > -->
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Nome do dirigente <b class="text-blue" data-toggle="tooltip" title="Nome do dirigente máximo da empresa incentivadora" >°</b></label>
        <!-- Nome Do Dirigente Máximo Da Empresa Incentivadora -->
        <div class="form-group col-md-4">
            <input type="text" name="nome_dirigente_empresa" class="form-control" value=" "  >
        </div>        
    </div>
</section>