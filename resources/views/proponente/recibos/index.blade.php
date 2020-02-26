@extends('layouts.dashboard')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-blue opacity-6"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-single-copy-04 text-white"></i> Recibos</h1>
            </div>
        </div>
    </div>
</div>
@stop
@section('conteudo')
<div class="container mt--7">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <a href="{{route('recibos.create')}}" class="btn btn-secondary "><i class="ni ni-fat-add"></i> Adicionar </a>
                </div>
                <div class="table-responsive ">
                    <table class="table align-items-center table-flush "  style="width:100%" id="example" >
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-left">Nº do PRONAC</th>
                                <th scope="col" class="text-left">Nº do Recibo</th>
                                <th scope="col" class="text-left">Incentivador</th>
                                <th scope="col" class="text-left">Proponente</th>
                                <th scope="col" class="text-left">Comprovante</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($recibos as $recibo)
                            <tr>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($recibo->investimento)
                                            {{ $recibo->investimento->projeto->num_pronac }}
                                        @else
                                            {{ $recibo->projeto_nome }}
                                        @endif
                                    </span>
                                </td>

                                <td>
                                    <span class="badge badge-dot mr-4">
                                        {{ $recibo->num_recibo }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        {{ $recibo->incentivador_nome }}
                                    </span>
                                </td>

                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($recibo->investimento)
                                            {{ $recibo->investimento->projeto->responsavel }}
                                        @else
                                            {{ $recibo->projeto_responsavel }}
                                        @endif
                                    </span>
                                </td>

                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($recibo->investimento)
                                            <a class="text-black-50" href="{{ url('investimentos/' . $recibo->investimento->comprovante_transferencia) }}" target="_blank">
                                                Comprovante
                                            </a>
                                        @else
                                            Sem investimento
                                        @endif
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <p class="text-warning font-weight-bold 900" style="text-indent: 25px;">Você ainda não cadastrou nenhum projeto! <span></span></p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
