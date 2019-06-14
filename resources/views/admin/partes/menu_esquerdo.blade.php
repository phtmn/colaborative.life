<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>Principal</h3>
        <ul class="nav side-menu">

            <li><a><i class="fa fa-edit"></i> Coopviva <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('admin-osc.index')}}">Oscs</a></li>
                    <li><a href="{{route('admin-users.index')}}">Usuarios</a></li>
                    <li><a href="{{route('admin-projetos.index')}}">Projetos</a></li>
                    <li><a href="{{route('admin-investimentos.index')}}">Investimentos</a></li>
                    {{--<li><a href="#">Form Upload</a></li>--}}
                    {{--<li><a href="#">Form Buttons</a></li>--}}
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->