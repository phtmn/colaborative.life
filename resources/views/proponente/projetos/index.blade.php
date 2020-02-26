@extends('layouts.dashboard')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-blue opacity-6"></span>
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">
                <h1 class="display-2 text-white"> <i class="ni ni-collection text-white"></i> Projetos</h1>
            </div>
        </div>
    </div>
</div>
@stop

@section('style')
    <style>
        .disabled-link {
            opacity: .35;
            pointer-events: none;
        }
    </style>
@stop

@section('conteudo')
<div class="container mt--7">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header border-0">
                    <a href="{{route('projetos.create')}}" class="btn btn-secondary "><i class="ni ni-fat-add"></i> Adicionar </a>
                </div>
                <div class="table-responsive ">
                    <table class="table align-items-center table-flush "  style="width:100%" id="example" >
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-left">Nº do PRONAC</th>
                                <th scope="col" class="text-left">Landing Page</th>
                                <th scope="col" class="text-left">Status</th>
                                <th scope="col" class="text-left">Publicado</th>
                                <th scope="col" class="text-left">Investimentos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($projetos as $projeto)
                            <tr>

                                <td><i class="fas fa-edit text-primary"></i> <a class="text-primary " href="{{route('projetos.edit',$projeto->id)}}" >{{$projeto->num_pronac}} </a></td>

                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <a href="{{ route('detalhe.projeto', $projeto->num_pronac) }}">
                                            <span class="text-primary {{ (($projeto->status == 'Aprovado para Captação' OR $projeto->status == 'Captação Finalizada') AND $projeto->publicado) ? "" : "disabled-link" }}"> Acessar </span>
                                        </a>
                                    </span>
                                    </td>
                                    <td>
                                        @if($projeto->status == 'Captação em análise' OR $projeto->status == 'Não Aprovado para Captação')
                                            <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">{{ $projeto->status }}</span>
                                    </span>
                                             @else
                                            <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>
                                        <span class="status">{{ $projeto->status }}</span>
                                    </span>       
                                             @endif
                                    </td>

                                    <td>
                                        @if($projeto->status == 'Aprovado para Captação' OR $projeto->status == 'Captação Finalizada')
                                                 <label class="custom-toggle custom-toggle-success">
                                                <input type="checkbox" class="js-checkbox" data-id="{{ $projeto->id }}" data-route="{{ route('projeto.publicate', [ 'id' => $projeto->id ]) }}" {{ ($projeto->publicado) ? 'checked' : '' }}>
                                                <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
                                            </label>
                                        @else
                                                                         
                                        @endif
                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-secondary {{ $projeto->count_investments_without_proof ? '' : 'disabled-link' }}" onclick="mostrarInvestimentos({{ $projeto->id }})">
                                            Visualizar <span style="margin-left: 5px;" class="badge badge-danger">{{ $projeto->count_investments_without_proof }}</span>
                                        </button>
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

<!-- Modal -->
<div class="modal fade" id="modalDeInvestimentos" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Investimentos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
@stop

@section('js')
    <script>
        $('input:checkbox').change(function() {
            const link_span = $(this).closest('tr').find('a span');

            ($(this).is(":checked"))
                ? link_span.removeClass('disabled-link')
                : link_span.addClass('disabled-link');
        })

        function mostrarInvestimentos(projeto_id) {
            const modal = $('#modalDeInvestimentos');
            const url = window.location.origin;
            const url_images = '{{ url('investimentos') }}';
            let modalBody = '';

            $.ajax({
                url: `${url}/dashboard/projetos/${projeto_id}/investimentos`,
                type : 'get'
            })
            .done((investimentos) => {
                modalBody = `<div class="table-responsive ">
                                <table class="table align-items-center table-flush " style="width:100%" id="example" >
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="text-left">Comprovante</th>
                                            <th scope="col" class="text-left">Investidor</th>
                                            <th scope="col" class="text-left">Recibo</th>
                                        </tr>
                                    </thead>

                                    <tbody>`

                investimentos.map((investimento) => {
                        modalBody += `<tr>
                                            <td>
                                                <span class="badge badge-dot mr-4">
                                                    <a href="${url_images}/${investimento.comprovante}" target="_blank">
                                                        <span class="text-primary"> Comprovante </span>
                                                    </a>
                                                </span>
                                            </td>

                                            <td>
                                                <span class="badge badge-dot mr-4">
                                                    ${investimento.investidor}
                                                </span>
                                            </td>

                                            <td>
                                                <a href="${url}/dashboard/recibos/${investimento.id}/create" class="btn btn-secondary"> Gerar</a>
                                            </td>
                                        </tr>`
                    })

                modalBody += `</tbody>
                                </table>
                            </div>`

                $('#modalDeInvestimentos .modal-body').html(modalBody);

                modal.modal();
            })
            .fail((jqXHR, textStatus, msg) => alert('Ocorreu um erro inesperado, contate o administrador'));
        }
    </script>
@stop
