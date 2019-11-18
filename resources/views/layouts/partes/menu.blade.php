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
        <a class="nav-link" href="{{ route('recibos.index') }}">
            <i class="ni ni-single-copy-04 text-warning" ></i> Recibos
        </a>
    </li>
</ul>
<hr class="my-3">
<ul class="navbar-nav">    
    <li class="nav-item">
        <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); 
        document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run text-danger"></i> Sair
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>