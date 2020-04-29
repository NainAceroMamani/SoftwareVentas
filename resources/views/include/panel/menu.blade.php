<!-- Navigation -->
<h6 class="navbar-heading text-muted">
    @if (auth()->user()->role == 'Admin') Gestionar Datos
    @else Menú
    @endif
</h6>
<ul class="navbar-nav">
    @include(
        'include.panel.menu.' . auth()->user()->role
    )
    <li class="nav-item">
        <a class="nav-link"  href="javascript:void" onclick="$('#logout-form').submit();">
            <i class="ni ni-key-25"></i> Cerrar Sesión
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>