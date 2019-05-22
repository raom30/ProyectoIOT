<!-- Topbar Navbar -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
<ul class="navbar-nav ml-auto">
<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
  </a>
  <!-- Dropdown - User Information -->
  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
    <a class="dropdown-item" href="#">
      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
      Perfil
    </a>
    @if(Auth::user()->hasRole('admin'))
    <a class="dropdown-item" href="/configuracionUsuarios">
      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
      Configuración Usuarios
    </a>
    @endif
    <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Salir
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
  </div>
</li>
</ul>

</div>