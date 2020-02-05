@extends('layouts.site')


@section('conteudo_principal')
<div class="position-relative">
    <!-- shape Hero -->
    <section class="section section-lg section-shaped pb-250">
        <div class="shape bg-gradient-success">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container py-lg-md d-flex">
            <div class="col px-0">
                <div class="row">
                    <div class="col-lg-10">

                        <div class="form-group row">
                            <input type="text" name="filter" class="form-control col-md-10" value="" required data-target="projects-filter" placeholder="faça sua busca por projetos"/>
                            <button class="btn btn-success btn-icon" style="margin-left: 20px" data-target="projects-filter-btn">
                                <span class="nav-link-inner--text">Buscar</span>
                            </button>
                        </div>

                        <h1 class="display-3  text-white">Realize um investimento agora
                            <span style="line-height: 1.1;">Escolha uma Organização para Investir</span>
                        </h1>
                        <div class="btn-wrapper">
                            <!--  <a href="{{route('register')}}" class="btn btn-success btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="fa fa-handshake-o"></i></span>
                                <span class="btn-inner--text">Seja um investidor</span>
                            </a>
                          <a href="{{route('register')}}" class="btn btn-white btn-icon mb-3 mb-sm-0">
                                <span class="btn-inner--icon"><i class="fa fa-registered"></i></span>
                                <span class="nav-link-inner--text">Cadastre-se</span>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <!-- 1st Hero Variation -->

</div>

<section class="section section-lg pt-lg-0 mt--300">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row row-grid">
                    @foreach($projetos as $projeto)
                        <div class="col-lg-4" style="margin-bottom: 50px">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body py-5">
                                    <h5 class="text-primary text-uppercase">{{ $projeto->nome }}</h5>
                                    <div>
                                        <a href="{{ route('detalhe.projeto', $projeto->num_pronac) }}" class="btn btn-outline-primary">
                                            Ver mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{ $projetos->links() }}
        </div>
    </div>
</section>



@endsection

@section('js')
    <script>
      $(document).ready(() => {
        const filter = $('input[data-target=projects-filter]');
        const buttonFilter = $('button[data-target=projects-filter-btn]');

        const buildUrlToFilter = () => `${$(location).attr('href').split('?')[0]}?query=${filter.val()}`;

        filter.keydown(({keyCode}) => {
          if (keyCode === 13) {
            window.location.href = buildUrlToFilter();
          }
        });

        buttonFilter.click(function() {
          if (!$.isEmptyObject(filter.val().trim())) {
            window.location.href = buildUrlToFilter();
          }
        });
      });
    </script>
@endsection
