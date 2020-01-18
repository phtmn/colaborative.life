<section>
    <div class="form-group row">
        <label for="" class="col-sm-3 col-form-label text-right mt-1">Uploads </label>
        <div class="col-md-9">
            <div class="row">
            <div class="form-group col-md-8">
                <a href="{{ url('projetos/'.$projeto->comprovante_captacao) }}" download>  
                  <img src="{{ url('projetos/'.$projeto->comprovante_captacao) }}"  alt="" class="avatar" data-toggle="tooltip" title="Extrato bancário da conta captação"> 
                </a>
                <a href="{{ url('projetos/'.$projeto->imagem_projeto) }}" download>
                  <img src="{{ url('projetos/'.$projeto->imagem_projeto) }}" alt="" class="avatar" data-toggle="tooltip" title="Foto de Destaque">
                </a>
                <a href="{{ url('projetos/'.$projeto->cronograma) }}" download>
                  <img src="{{ url('projetos/'.$projeto->cronograma) }}" alt="" class="avatar" data-toggle="tooltip" title="Cronograma de atividades">
                </a>
                <a href="{{ url('projetos/'.$projeto->contrapartidas) }}" download>
                  <img src="{{ url('projetos/'.$projeto->contrapartidas) }}" alt="" class="avatar" data-toggle="tooltip" title="Plano de contrapartidas">
                </a>
            <!-- <img src="{{ url("{$projeto->imagem_projeto}") }}" style="height: 70px;" alt="" /> -->

            <!-- <img alt=" " src="{{ asset($projeto->imagem_projeto) }}" class="avatar "> -->
            
                <!-- <input type="file" name="imagem_projeto" value="{{$projeto->imagem_projeto}}" class="form-control" value=""> -->
                </div>
            </div>
        </div>
    </div>
</section>


