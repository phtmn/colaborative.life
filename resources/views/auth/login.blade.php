@extends('layouts.site')

@section('conteudo_principal')
    <section class="section section-shaped section-lg">
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
        <div class="container pt-lg-md">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card bg-white shadow border-1">
                        {{--<div class="card-header bg-white pb-5">--}}
                            {{--<div class="text-muted text-center mb-3">--}}
                                {{--<small>Entre com :</small>--}}
                            {{--</div>--}}
                            {{--<div class="btn-wrapper text-center">--}}
                                {{--<a href="#" class="btn btn-neutral btn-icon">--}}
                                    {{--<span class="btn-inner--icon">--}}
                                      {{--<img src="{{asset('vendor/argon-site/assets/img/icons/common/github.svg')}}">--}}
                                    {{--</span>--}}
                                    {{--<span class="btn-inner--text">Github</span>--}}
                                {{--</a>--}}
                                {{--<a href="#" class="btn btn-neutral btn-icon">--}}
                                    {{--<span class="btn-inner--icon">--}}
                                     {{--<img src="{{asset('vendor/argon-site/assets/img/icons/common/google.svg')}}">--}}
                                    {{--</span>--}}
                                    {{--<span class="btn-inner--text">Google</span>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="card card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <h4>Faça login com sua conta</h4>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form id="form-login" name="form-login" action="{{route('login')}}" method="post" role="form" class="form-validate" novalidate>
                                @csrf
                                <input type="hidden" id="input-login" name="input-login" value="login">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input name="email" class="form-control" placeholder="E-mail" type="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input name="password" class="form-control" placeholder="Senha" type="password" required>
                                    </div>
                                </div>
                                <!--<div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin"><span>Lembrar minha senha</span></label>
                                </div>-->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Acessar</button>
                                </div>
                            </form>
                            <div class="text-center text-muted mb-4">
                                <small><a href="{{route('password.request')}}">Esqueci minha senha</a></small>
                            </div>
                            <div class="text-center text-muted mb-4">
                                <small>Sua primeira vez aqui? <a href="{{route('register')}}"> <b>Cadastre-se</b></a>.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
