<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item {{request()->is('admin/doctor*') ? 'menu-open' : ''}}">
        <a href="#" class="nav-link {{request()->is('admin/doctor*') ? 'active' : ''}}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Doctores
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item ">
            <a href="{{ route('doctor.index') }}" class="nav-link {{request()->is('admin/doctor') ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Visualizar doctores</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('doctor.create') }}" class="nav-link {{request()->is('admin/doctor/create') ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Agregar doctor</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item {{request()->is('admin/cita*') ? 'menu-open' : ''}}">
        <a href="#" class="nav-link {{request()->is('admin/cita*') ? 'active' : ''}}">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Citas
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('cita.index') }}" class="nav-link {{request()->is('admin/cita') ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Visualizar citas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('cita.create') }}" class="nav-link {{request()->is('admin/cita/create') ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Agregar cita</p>
            </a>
          </li>
        </ul>
      </li>
      <!--<li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Simple Link
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>-->
    </ul>
  </nav>