@extends('admin.home')

@section('content')
    <div class="x_panel">

        <div class="x_title">
            <a href="{{route('admin-projetos.index')}}"><i class="fa fa-arrow-left"></i> Voltar para Lista</a>

            <h3>Informações do Projeto: {{$projeto->nome_projeto}}</h3>
        </div>


        <div class="x_content">
                <h3>Dados Gerais</h3>
                <ul>
                    <li>Responsável: <b>{{$projeto->responsavel_projeto}}</b></li>
                    <li>Valor: <b>{{$projeto->valor_projeto}}</b></li>
                    <li>Inicio: <b>{{$projeto->data_inicio ?? 'n/a'}}</b></li>
                    <li>Termino: <b>{{$projeto->data_final ?? 'n/a'}}</b></li>
                    <li>Lei Incentivo: <b>{{$projeto->lei_incentivo}}</b></li>
                    <li>Ambito:     <b>{{$projeto->ambito ?? 'n/a'}}</b></li>
                    <li>Artigo: <b>{{$projeto->artigo ?? 'n/a'}}</b></li>
                    <li>Segmento: <b>{{$projeto->segmento ??'n/a'}}</b></li>
                </ul>

                <h3>Informações do Site</h3>
                <hr>
                <h3>Resumo</h3>
                <p>{{$projeto->resumo ?? 'Não há informações'}}</p>

                <h3>Objetivos</h3>
                <p>{{$projetos->objetivos ?? 'Não há informações'}}</p>

                <h3>Justificativa</h3>
                <p>{{$projeto->justificativa ?? 'Não há informações'}}</p>

                <h3>Publico Alvo</h3>
                <p>{{$projeto->publico_alvo ?? 'Não há informações'}}</p>

                <h3>Impactos</h3>
                <p>{{$projeto->impactos_esperados ?? 'Não há informações'}}</p>

                <h3>Contra Partidas</h3>
                <p>{{$projeto->contra_partidas ?? 'Não há informações'}}</p>


            </div>

            <div class="col-md-4">
                <div class="buttons d-flex">


                </div>
            </div>
        </div>


    </div>






@stop