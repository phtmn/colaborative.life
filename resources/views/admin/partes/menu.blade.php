<ul class="navbar-nav">
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'admin.index') ? 'nav-link active' : 'nav-link ' }}" href="{{route('admin.index')}}">
            <i class="{{ (\Request::route()->getName() == 'admin.index') ? 'ni ni-tv-2 text-blue' : 'ni ni-tv-2   ' }} "></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'admin-users.index') ? 'nav-link active' : 'nav-link ' }}
                  {{ (\Request::route()->getName() == 'admin-users.show') ? 'nav-link active' : 'nav-link ' }}"

                href="{{route('admin-users.index')}}">
            <i class="{{ (\Request::route()->getName() == 'admin-users.index') ? 'ni ni-circle-08 text-blue' : 'ni ni-circle-08   ' }}
                      {{ (\Request::route()->getName() == 'admin-users.show') ? 'ni ni-circle-08 text-blue' : 'ni ni-circle-08   ' }}"></i> Usuários
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'admin-projetos.index') ? 'nav-link active' : 'nav-link ' }}
                  {{ (\Request::route()->getName() == 'admin-projetos.show') ? 'nav-link active' : 'nav-link ' }}  "
                  href="{{ route('admin-projetos.index') }}">
            <i class="{{ (\Request::route()->getName() == 'admin-projetos.index') ? 'ni ni-collection text-blue' : 'ni ni-collection   ' }}
                      {{ (\Request::route()->getName() == 'admin-projetos.show') ? 'ni ni-collection text-blue' : 'ni ni-collection   ' }} "></i> Projetos
        </a>
    </li>
    <li class="nav-item">
        <a class="{{ (\Request::route()->getName() == 'admin-recibos.index') ? 'nav-link active' : 'nav-link ' }}" href="{{route('admin-recibos.index')}}">
            <i class="{{ (\Request::route()->getName() == 'admin-recibos.index') ? 'ni ni-tv-2 text-blue' : 'ni ni-tv-2   ' }} "></i> Recibos
        </a>
    </li>
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
