    <div class="container" >
        <ul class="nav nav-tabs justify-content-center  ">
                <li class="nav-item"><a class="nav-link {{ $tab == 'perfil' ? 'active' : ''}}"  href="{{route('perfil.create')}}">
                    <b class="text-dark" >Perfil do Usuário</b></a>
                </li>
            @can('osc')

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $tab == 'osc' ? 'active' : ''}}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <b class="text-dark"> Perfil da OSC</b>
                    </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item {{ $tab == 'osc' ? 'active' : ''}}"  href="{{route('osc.create')}}">
                                <b class="text-dark">Cadastro</b>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ $tab == 'landing' ? 'active' : ''}}"  href="{{route('osc.landingPage')}}">
                                <b class="text-dark">Landing Page</b>
                            </a>
                        </div>
                </li>

                <li class="nav-item"> <a class="nav-link {{ $tab == 'lista-projetos' ? 'active' : ''}}"  href="{{route('projetos.index')}}">
                        <b class="text-dark">Projetos</b></a>
                </li>

                <li class="nav-item"> <a class="nav-link {{ $tab == 'ods' ? 'active' : ''}}"  href="{{route('osc.objetivos')}}" >
                        <b class="text-dark">ODS</b></a>
                </li>

                <li class="nav-item"> <a class="nav-link {{ $tab == 'galeria' ? 'active' : ''}}"  href="{{route('galeria.index')}}">
                        <b class="text-dark">Galeria</b></a>
                </li>

                <li class="nav-item"> <a class="nav-link {{ $tab == 'investimentos' ? 'active' : ''}}"  href="{{ route('investimentos') }}">
                        <b class="text-dark">Investimentos</b></a>
                </li>
            @endcan

            @cannot('osc')
                <li class="nav-item"><a class="nav-link {{ $tab == 'investir' ? 'active' : ''}}" href="{{ route('listar.oscs') }}"  >
                        <b class="text-dark" > Investir</b></a>
                </li>
                <li class="nav-item"><a class="nav-link {{ $tab == 'investimentos' ? 'active' : ''}}" href="{{ route('investimentos.index') }}"  >
                        <b class="text-dark" > Investimentos</b></a>
                </li>
            @endcannot
        </ul>
    </div>

    
   