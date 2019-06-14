@extends('site.master')
@section('content')
    @include('dashboard.menu')

    <div class="container" style="margin-top:20px; padding:20px">
        <div class="row row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Investido: R$ {{ $data->where('mp_status','==','approved')->sum('valor') }}</div>
                    <div class="card-header">Total Investido: R$ {{ number_format(DB::table('investimentos')->sum('valor'),2,',','.')}}</div>                   
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive table-hover m-t-20">
                            <table class="table stylish-table">
                                <thead>
                                    <tr>
                                        <th>Data</th>
                                        <th>Tipo</th>
                                        <th>Valor (R$)</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($data as  $d)
                                    <tr>
                                        <td>{{date('d/m/Y',strtotime($d->created_at))}}</td>
                                        <td>{{ $d->operacao }}</td>
                                        <td>R$ {{ number_format($d->valor_investimento,2,',','.') }} </td>
                                        <td>{{ $d->status ?? 'Cancelado pelo Usuário'}}</td>
                                        <td>
                                            @if( $d->status == null || $d->status == 'Aguardando Pagamento')
                                                <a href="{{ $d->url }}" target="_blank">Novo Pagamento</a>                                        
                                                <a href="{{ route('investimento.cancelar',$d->id) }}"><i class="fa fa-trash"></i></a>
                                            @elseif($d->status == 'Investimento Realizado')
                                                <a href=""><i class="fa fa-print"></i> Recibo</a>

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
