@extends('layouts.site')


@section('conteudo_principal')
<div class="position-relative">
    <!-- shape Hero -->
    <section class="section section-lg section-shaped pb-250">
        <div class="shape bg-gradient-info">
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

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 ">
                <div class="row row-grid ">
                    <div class="col-lg-2">
                        
                    </div>
                    <div class="col-lg-8 ">
</br>
</br>
                    <h2 class="text-white text-center ">Portfólio de Projetos Culturais</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                       
                    </div>
                    </div>
                    </div>

        <div class="container py-lg-md d-flex mt-4 ">
            
            <div class="col px-0 ">
                <div class="row">
                    
                <div class="col-lg-2">
                    
                </div>

                    <div class="col-lg-10">
                    
                        <div class="form-group row " >
                                <input type="text" name="filter" class="form-control col-md-8" value="" required
                                        data-target="projects-filter" placeholder="Pesquisa por (nome do projeto, PRONAC ou nome do proponente)" />
                                    <button class="btn btn-success btn-icon" style="margin-left: 25px"
                                        data-target="projects-filter-btn">
                                        <span class="nav-link-inner--text">Buscar</span>
                                    </button>
                                </div>             
                            
                            </div>
                    
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <!-- <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div> -->
    </section>
    <!-- 1st Hero Variation -->

</div>

<section class="section section-lg pt-lg-0 mt--200">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row row-grid">
                    @foreach($projetos as $projeto)
                    <div class="col-lg-4" >
                        <div class="card">
                            <!-- Card image -->

                            @if(!$projeto->imagem_projeto)
                            <img src="{{asset('vendor/site/images/img-1-1000x600.jpg')}}" class="card-img-top" style="width: 100%; height: 150px;">
                            @else
                            <img src="{{ url('projetos/'.$projeto->imagem_projeto) }} " alt="" class="card-img-top" style="width: 100%; height: 150px;">
                            @endif
                            <!-- Card body -->
                            <div class="card-body" align="right">
                            <a href="{{ route('detalhe.projeto', $projeto->num_pronac) }}"
                                    class="btn btn-link px-0 text-success ">PRONAC {{ $projeto->num_pronac }}</a>
                                <h5 align="right"  class="h6 card-title mb-0" >{{ $projeto->nome }}</h5>
                                <small class="text-muted" >proposto por <b >{{ $projeto->responsavel }}</b></small>
                                <!-- <p class="card-text mt-4">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p> -->
                               
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

    filter.keydown(({
        keyCode
    }) => {
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