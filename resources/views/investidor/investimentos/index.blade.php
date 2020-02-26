@extends('investidor.painel')

@section('conteudo_painel')
    <div class="container" style="margin-top:20px; padding:20px">
        <div class="row row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive table-hover m-t-20">
                            <table class="table stylish-table">
                                <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Projeto</th>
                                    <th>Comprovante</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($investimentos as $investimento)
                                    <tr>
                                        <td>{{date('d/m/Y',strtotime($investimento->created_at))}}</td>
                                        <td>{{ $investimento->projeto->nome }} </td>
                                        <td>
                                            <a href="{{ url("investimentos/$investimento->comprovante_transferencia") }}" target="_blank">
                                                Comprovante
                                            </a>
                                        </td>
                                        <td>
                                            @if ($investimento->recibo_id)
                                                Aprovado
                                            @else
                                                Em análise
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <p style="color:red">Não há registros</p>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ $investimentos->links() }}
    </div>
@endsection

