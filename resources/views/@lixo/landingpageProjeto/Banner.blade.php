<div class="position-relative">
    <!-- shape Hero -->
    <section class="section section-lg section-shaped pb-250">
        <div class="shape shape-style-1 bg-gradient-success">
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
                        <h1 class="display-2 text-white font-weight-bold">{{$projeto->nome_projeto}} </h1>
                    </div>

                </div>

{{--                <div class="row justify-content-center">--}}
{{--                    <div class="ods">--}}
{{--                        @forelse($metas->unique('objetivo_id') as $obj)--}}
{{--                            <a style="cursor: pointer"><img class="img-thumbnail" style="width:55px; height:55px;" src="{{asset('/vendor/site/images/ods/ods'.$obj->objetivo_id.'.png')}}"></a>--}}
{{--                        @empty--}}
{{--                            <p class="text-danger font-weight-500">Você não selecionou nenhum objetivo da agenda 2030</p>--}}
{{--                        @endforelse--}}
{{--                    </div>--}}
{{--                </div>--}}
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