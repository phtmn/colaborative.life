<ul class="navbar-nav">
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'osc.index') ? 'nav-link active' : 'nav-link ' }}" href="{{route('osc.index')}}">
            <i class="{{ (\Request::route()->getName() == 'osc.index') ? 'ni ni-tv-2 text-blue' : 'ni ni-tv-2   ' }} "></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'osc.create') ? 'nav-link active' : 'nav-link ' }}" href="{{route('osc.create')}}">
            <i class="{{ (\Request::route()->getName() == 'osc.create') ? 'ni ni-circle-08 text-blue' : 'ni ni-circle-08   ' }} "></i> Perfil
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'projetos.index') ? 'nav-link active' : 'nav-link ' }}                  
                  {{ (\Request::route()->getName() == 'projetos.create') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'projetos.edit') ? 'nav-link active' : 'nav-link' }}" href="{{ route('projetos.index') }}">
            <i class="{{ (\Request::route()->getName() == 'projetos.index') ? 'ni ni-collection text-blue' : 'ni ni-collection  ' }} 
                      {{ (\Request::route()->getName() == 'projetos.create') ? 'ni ni-collection text-blue' : 'ni ni-collection  ' }}
                      {{ (\Request::route()->getName() == 'projetos.edit') ? 'ni ni-collection text-blue' : 'ni ni-collection   ' }}"></i> Projetos
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'recibos.index') ? 'nav-link active' : 'nav-link ' }}                  
                  {{ (\Request::route()->getName() == 'recibos.create') ? 'nav-link active' : 'nav-link' }}
                  {{ (\Request::route()->getName() == 'recibos.edit') ? 'nav-link active' : 'nav-link' }}" href="{{ route('recibos.index') }}">
            <i class="{{ (\Request::route()->getName() == 'recibos.index') ? 'ni ni-single-copy-04 text-blue' : 'ni ni-single-copy-04  ' }} 
                      {{ (\Request::route()->getName() == 'recibos.create') ? 'ni ni-single-copy-04 text-blue' : 'ni ni-single-copy-04  ' }}
                      {{ (\Request::route()->getName() == 'recibos.edit') ? 'ni ni-single-copy-04 text-blue' : 'ni ni-single-copy-04  ' }}"></i> Recibos
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