<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('osc.index')}}">
            <i class="ni ni-tv-2 text-default"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin-users.index')}}">
            <i class="ni ni-circle-08 text-default"></i> Usuarios
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin-projetos.index') }}">
            <i class="ni ni-collection text-default"></i> Projetos
        </a>
    </li>  
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-chart-bar-32 text-default"></i> Investimentos
        </a>
    </li> 
    <!-- <li class="nav-item">
        <a class="nav-link" href=" ">
            <i class="ni ni-single-copy-04 text-warning" ></i> Recibos
        </a>
    </li> -->
</ul>
<hr class="my-3">
<h3>{{auth()->user()->name}}</h3>
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