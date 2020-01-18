<section>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right">Conta captação </label>
        <div class="col-md-9">
            <div class="row">
                <div class="form-group col-md-4">                    
                    <input type="text" name="banco" class="form-control" value="{{$projeto->banco}}" placeholder="Banco do Brasil S.A." readonly>
                </div>
                <div class="form-group col-md-3">
                    <input type="text" name="ag" class="form-control" value="{{$projeto->ag}}" placeholder="Agência" readonly>                    
                </div>
                <div class="form-group col-md-3">
                    <input type="text" name="cc" class="form-control" value="{{$projeto->cc}}" placeholder="Conta" readonly>                                       
                </div>
            </div>
        </div>
    </div>
</section>