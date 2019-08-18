<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('osc.index')}}">
            <i class="ni ni-tv-2 text-default"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('osc.create')}}">
            <i class="ni ni-circle-08 text-blue"></i> Perfil
        </a>
    </li>

    

    <li class="nav-item">
        <a class="nav-link" href="{{ route('projetos.index') }}">
            <i class="ni ni-collection text-success"></i> Projetos
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('galeria.index')}}">
            <i class="ni ni-album-2 text-red"></i> Galeria
        </a>
    </li>
    
    {{--    <li class="nav-item"> --}}
        {{--   <a class="nav-link" href="{{ route('osc.objetivos') }}"> --}}
        {{--       <i class=""><img src="{{asset('vendor/site/images/agenda_ico.png')}}" class="navbar-brand-img" alt="..."></i> --}}
        {{--             ODS --}}
            {{--  </a> --}}
                {{--  </li> --}}
   
	
	
	
	
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="{{route('documentos.index')}}">--}}
{{--            <i class="ni ni-archive-2 text-info"></i> Documentos--}}
{{--        </a>--}}
{{--    </li>--}}
    
	<!-- <li class="nav-item">
        <a class="nav-link" >
            <i class="fas fa-chart-bar text-yellow" data-toggle="tooltip" data-placement="right" title="Em breve"></i> Relatórios
        </a>
    </li> -->
</ul>
<!-- Divider -->
<hr class="my-3">
<ul class="navbar-nav">
<li class="nav-item">

<a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
<i class="ni ni-user-run text-warning"></i> Sair
        </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
   
    </li>
    </ul>
<!-- Heading -->

<!-- Navigation -->
