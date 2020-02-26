@extends('admin.home')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
<span class="mask bg-gradient-default opacity-7"></span>
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

    <div class="col-md-12 mt-5">
            <div class="card shadow">
            <div class="card-header border-0">
            <p class="text-default font-weight-bold mt-3"> Projetos Cadastrados</p>
                </div>
                <div class="table-responsive ">
                    <table class="table align-items-center table-flush "  style="width:100%" id="example" >
                        <thead class="thead-light">
                        <tr>

                            <th scope="col" class="text-left">Nº do PRONAC</th>
                            <th scope="col" class="text-left">Landing Page</th>
                            <th scope="col" class="text-left">Status</th>
                            <th scope="col" class="text-left">Publicado</th>
                            <th scope="col" class="text-left">Data de Cadastro</th>
                            <th scope="col" class="text-left">Investimentos</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $d)
                            <tr>

                                <td><i class="fas fa-edit text-primary"></i> <a class="text-primary " href="{{route('admin-projetos.show',$d->id)}}" >{{$d->num_pronac}} </a></td>
                                <td> <a href="{{ route('detalhe.projeto', $d->num_pronac) }}" Target=”_blank” data>
                                            <span class="text-primary {{ (($d->status == 'Aprovado para Captação' OR $d->status == 'Captação Finalizada') AND $d->publicado) ? "" : "disabled-link" }}"> Acessar </span>
                                        </a></td>
                                <td>

                                @if($d->status == 'Captação em análise' OR $d->status == 'Não Aprovado para Captação')
                                            <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">{{ $d->status }}</span>
                                    </span>
                                             @else
                                            <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>
                                        <span class="status">{{ $d->status }}</span>
                                    </span>       
                                             @endif
                                    </td>
                                    <td>
                                        @if($d->status == 'Aprovado para Captação' OR $d->status == 'Captação Finalizada')
                                                 <label class="custom-toggle custom-toggle-success">
                                                <input type="checkbox" class="js-checkbox" data-id="{{ $d->id }}" data-route="{{ route('projeto.publicate', [ 'id' => $d->id ]) }}" {{ ($d->publicado) ? 'checked' : '' }}>
                                                <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
                                            </label>
                                        @else
                                                                         
                                        @endif
                                </td>
                                <td>{{ date('d/m/Y',strToTime($d->created_at)) }}  </td>
                                <td>
                                    <button type="button" class="btn btn-secondary {{ $d->count_investments_without_proof ? '' : 'disabled-link' }}" onclick="mostrarInvestimentos({{ $d->id }})">
                                        Visualizar <span style="margin-left: 5px;" class="badge badge-danger">{{ $d->count_investments_without_proof }}</span>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <p class="label-red">Nenhum projeto cadastrado</p>
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
                                                <a href="${url}/sistema/recibos/${investimento.id}/create" class="btn btn-secondary"> Gerar</a>
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
