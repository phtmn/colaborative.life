@extends('layouts.dashboard')

@section('cabecalho')
<div class="header pb-5 d-flex align-items-center" style="min-height: 350px; background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-success opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-12 col-md-10">

                <h1 class="display-2 text-white"> <i class="ni ni-collection text-white"></i> Projetos</h1>
              

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
                    <a href="{{route('projetos.create')}}" class="btn btn-success "><i class="ni ni-fat-add"></i> Adicionar Projeto</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nome (retirar)</th>
                                <th scope="col">Nº do PRONAC</th>
                                <th scope="col">URL landingpage</th>
                                <th scope="col" class="text-left">Status</th>
                                <th scope="col" class="text-left">Publicado</th>

                            </tr>
                        </thead>
                      
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@stop
<script>
$('.js-checkbox').on('click', function(e) {
        var route = $(this).data('route');
        $.ajax({
          url : route,
          type : 'get',
        })
        .done(function(msg){
          return true;
        })
      });
      </script>