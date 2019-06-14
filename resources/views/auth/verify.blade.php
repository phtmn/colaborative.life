@extends('layouts.site')

@section('conteudo_principal')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Confirme seu endereço de Email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Um novo email de verificação foi enviado para sua conta 
                        </div>
                    @endif

                     Para continuar usando nosso sistema, confira na sua caixa de emails e click no link de confirmação. 
                     Caso não tenha recebido clique no link ao lado,  <a href="{{ route('verification.resend') }}">  Clique aqui para enviar novamente </a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
