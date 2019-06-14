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
                                    <th>Valor (R$)</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($data as  $d)
                                    <tr>
                                        <td>{{date('d/m/Y',strtotime($d->created_at))}}</td>
                                        <td>R$ {{ number_format($d->valor,2,',','.') }} </td>
                                        <td>{{ $d->status_interno ?? 'Cancelado pelo Usuário'}}</td>
                                        <td>
                                            @if( $d->status_interno == null || $d->status_interno == 'Aguardando Pagamento')
                                                <div class="pull-right">
                                                    <a href="{{ $d->mp_url }}" class="btn btn-outline-success btn-sm" target="_blank">Novo Pagamento</a>
                                                    <a href="{{ route('investimento.cancelar',$d->id) }}" class="btn btn-sm btn-danger ml-3"><i class="fa fa-trash"></i></a>
                                                </div>
                                            @elseif($d->status_interno == 'Investimento Realizado')
                                                <div class="pull-right">
                                                    <a href="#"  class="btn btn-info btn-sm" data-toggle="tooltip" title="Solicitar Recibo"><i class="fa fa-print"></i> Recibo</a>
                                                    <a href="{{route('investimento.detalhe',$d->id)}}"  class="btn btn-sm btn-outline-success" data-toggle="tooltip" title="Ver Detalhes"><i class="fa fa-eyes"></i> Detalhes</a>
                                                </div>
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
    </div>
@endsection

