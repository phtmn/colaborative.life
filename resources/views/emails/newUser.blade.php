

@component('mail::message')


    <p>Um novo usuário foi cadastrado no sistema</p>

    Nome:           {{$user->nome}}
    Apelido:        {{$user->apelido}}
    Email:          {{$user->email}}
    Tipo Perfil:    {{$user->tipo_pessoa}}
    Perfil :        {{$user->perfil_id}}

    <p>Perfil 1 = Investidor</p>
    <p>Perfil 2 = OSC</p>

@endcomponent



