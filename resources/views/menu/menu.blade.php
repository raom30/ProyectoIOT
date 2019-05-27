  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-home"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Aministrador Hogar</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <div class="text-center">
  	<span class="nav-link text-white"><i class="fas fa-user"></i> Bienvenido, {{ Auth::user()->name }}</span>
  </div>
 	
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{url('/')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Inicio</span></a>
  </li>
    @if(Auth::user()->hasRole('admin'))
    <li class="nav-item active">
    <a class="nav-link" href="/configuracionUsuarios">
      <i class="fas fa-cogs fa-fw"></i>
      <span>Configuración Usuarios</span>
    </a>
    </li>
    @endif  
    {{--<li class="nav-item active">
    <a class="nav-link" href="{{url('/temperaturaHumedad')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Control Temperatura y Humedad</span></a>
  </li>--}}
 <div class="dropdown-divider text-white"></div>
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
       <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
       <span class="text-white">Salir</span>
   </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>  
<div class="dropdown-divider"></div>

