@extends('site.master')
@section('content')
    @include('dashboard.menu')

    <div class="container mt-3">
        <h4>Total investimentos confirmados: R$ {{ number_format($data->where('mp_status','==','approved')->sum('valor_investimento'),2,',','.') }}</h4>
    </div>
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
                                    <th>Tipo</th>
                                    <th>Valor (R$)</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($data as  $d)
                                    <tr>
                                        <td>{{date('d/m/Y',strtotime($d->created_at))}}</td>
                                        <td>{{ $d->operacao }}</td>
                                        <td>R$ {{ number_format($d->valor_investimento,2,',','.') }} </td>
                                        <td>{{$d->status}}</td>
                                    </tr>
                                @empty
                                    <p style="color:red">Não há registros</p>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $data->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
