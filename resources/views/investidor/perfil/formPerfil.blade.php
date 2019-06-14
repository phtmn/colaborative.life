{!! Form::open(['route'=>'perfil.store']) !!}

<h4>Dados Pessoais</h4>
<hr>
<div class="row">
    <div class="form-group col-md-8">
        <label for="nome_completo">Nome do Contato</label>
        {!! Form::text('nome_completo',null,['class'=> 'form-control','required'=>'true']) !!}
    </div>
    <div class="form-group col-md-4">
        <label for="data_nascimento">Data Nascimento</label>
        {!! Form::date('data_nascimento',null,['class'=> 'form-control','required'=>'true']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="telefone">Telefone </label>
        {!! Form::text('telefone',null,['class'=> 'form-control', 'id'=>'telefone','required'=>'true','id'=>'telefone']) !!}
    </div>
    <div class="form-group col-md-6">
        <label for="email">Gênero</label>
        {{ Form::select('genero',[
            'Masculino'      => 'Masculino',
            'Feminino'       => 'Feminino',
            'Outro'         => 'Outro'
            ],null,['class'=>'form-control custom-select','placeholder'=> 'selecione um gênero', 'required'=>'true'])
        }}
    </div>
</div>

<div class="row">
    @if(Auth::user()->tipo == 'PF')
        <div class="form-group col-md-6">
            <label for="cpf">CPF</label>
            {!! Form::text('cpf',null,['class'=> 'form-control','required'=>'true','id'=>'cpf']) !!}
        </div>
    @else
        <div class="form-group col-md-6">
            <label for="cnpj">CNPJ</label>
            {!! Form::text('cnpj',null,['class'=> 'form-control','required'=>'true','id'=>'cnpj']) !!}
        </div>
        <div class="form-group col-md-6">
            <label for="razao_social">Razão Social</label>
            {!! Form::text('razao_social',null,['class'=> 'form-control','required'=>'true']) !!}
        </div>
    @endif
</div>


<br>


<h4>Endereço </h4>
<hr>
<div class="row">
    <div class="form-group col-md-3">
        <label for="cep">CEP</label>
        {!! Form::text('cep',null,['class'=> 'form-control','required'=>'true','id'=>'cep']) !!}
    </div>
    <div class="form-group col-md-6">
        <label for="rua">Rua/Logradouro</label>
        {!! Form::text('rua',null,['class'=> 'form-control','required'=>'true','id'=>'endereco']) !!}
    </div>

    <div class="form-group col-md-3">
        <label for="numero">Bairro</label>
        {!! Form::text('bairro',null,['class'=> 'form-control','id'=>'bairro']) !!}
    </div>

</div>

<div class="row">
    <div class="form-group col-md-2">
        <label for="numero">Número</label>
        {!! Form::text('numero',null,['class'=> 'form-control']) !!}
    </div>
    <div class="form-group col-md-5">
        <label for="cidade">Cidade</label>
        {!! Form::text('cidade',null,['class'=> 'form-control','id'=>'cidade']) !!}
    </div>
    <div class="form-group col-md-2">
        <label for="uf">Estado</label>
        {!! Form::text('uf',null,['class'=> 'form-control','id'=>'estado']) !!}
    </div>
    <div class="form-group col-md-3">
        <label for="complemento">Complemento</label>
        {!! Form::text('complemento',null,['class'=> 'form-control']) !!}
    </div>
</div>
<center>  <input type="submit" value="Salvar" class="btn gradient-bg"> </center>
</div>
{!! Form::close() !!}