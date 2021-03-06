<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}} ">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-synagogue"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Parroquias<sup></sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{route('home')}} ">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colllapsetemple" aria-expanded="true" aria-controls="colllapsetemple">
      <i class="fas fa-synagogue"></i>
      <span>Temples</span>
    </a>
    <div id="colllapsetemple" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{route('temples')}} ">Lista</a>
        <a class="collapse-item" href="{{route('temples.create')}} ">Crear</a>
        <a class="collapse-item" href="{{route('userstemples.index')}} ">Templos Asignados</a>
        <a class="collapse-item" href="{{route('userstemples.create')}} ">Asignar Templo</a>
      </div>
    </div>
  </li>
  @if (Auth::user()->admin)
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-tasks"></i>
      <span>Utilerias</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{route('props.index')}}">Lista</a>
        <a class="collapse-item" href="{{route('props.create')}}">Crear</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Manager</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom manager:</h6>
        <a class="collapse-item" href="{{route('managers.index')}} ">Lista</a>
        <a class="collapse-item" href="{{route('managers.create')}} ">Crear</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Categorias</span>
    </a>
    <div id="collapseCategory" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom category:</h6>
        <a class="collapse-item" href="{{route('categories.index')}} ">Lista</a>
        <a class="collapse-item" href="{{route('categories.create')}} ">Crear</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Addons
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Folders</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">folder </h6>
        <a class="collapse-item" href="{{route('folders.index')}}">Lista</a>
        <a class="collapse-item" href="{{route('folders.create')}}">Crear</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Charts -->
  <!--<li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li>-->

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  @endif

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
