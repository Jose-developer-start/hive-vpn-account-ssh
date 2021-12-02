<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">

            <img class="img-fluid" width="60" src="{{ asset('images/avatar-perfil.png') }}" alt="foto-perfil">

        <div>
            <p class="app-sidebar__user-name"></p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item {{ setActive('mystore.home') }}" href="/mystore"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>

            <li class="treeview"><a class="app-menu__item" href="{{ route('user.index') }}"><i
                        class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Cuentas</span></a>

            </li>

            </li>
            <li class="treeview"><a class="app-menu__item" href="{{ route('rol.index') }}"><i
                        class="app-menu__icon fas fa-key"></i><span class="app-menu__label">Desarrollo</span></a>

            </li>
            
        @endif
    </ul>
</aside>