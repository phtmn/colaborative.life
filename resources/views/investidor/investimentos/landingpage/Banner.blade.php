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
                <div class="row justify-content-center">
                    <div class="osc">
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->num_pronac}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->nome}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->segmento}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->area}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->mecanismo}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->enquadramento}} </h1>
                        <!-- <h1 class="display-2 text-white font-weight-bold">{{$projeto->num_pronac}} </h1> Municipio -->
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->uf_projeto}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->ano_projeto}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->data_termino}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->data_inicio}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->valor_proposta}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->valor_aprovado}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->resumo}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->etapa}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->objetivos}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->sinopse}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->ficha_tecnica}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->especificacao_tecnica}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->democratização}} </h1>
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->acessibilidade}} </h1>

                    </div>

                </div>

                <div class="row justify-content-center">
                    {{$projeto->telefone}} - {{$projeto->banco}}

                    {{-- TODO - Ajustar o tamanho da imagem --}}
                    <img src="{{ url('projetos/'.$projeto->comprovante_captacao) }}" alt="" width="300px">
                    <img src="{{ url('projetos/'.$projeto->imagem_projeto) }}" alt="" width="300px">
                    <img src="{{ url('projetos/'.$projeto->cronograma) }}" alt="" width="300px">
                    <img src="{{ url('projetos/'.$projeto->contrapartidas) }}" alt="" width="300px">
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


