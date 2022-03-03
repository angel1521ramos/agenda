<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('inicio') }}" class="nav-link">Inicio</a>
        </li>


    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a  href="#"
                class="nav-link dropdown-toggle" 
                data-toggle="dropdown">
                <img 
                    src="{{ URL::asset('adminlte/img/user2-160x160.jpg')}}" 
                    class="user-image img-circle elevation-2" 
                    alt="User Image">
                <span class="d-none d-md-inline">
                    {{ auth()->user()->name }}
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img 
                        src="{{ URL::asset('adminlte/img/user2-160x160.jpg')}}" 
                        class="img-circle elevation-2" 
                        alt="User Image">

                    <p>{{ auth()->user()->name }}
                        <small>Doctor</small>
                    </p>
                </li>
                <li class="user-footer">
                    <form class="d-sm-inline"
                        method="POST" 
                        action="#" 
                        >
                        <a 
                            class="btn btn-default btn-flat">
                            Perfil
                        </a>
                    </form>


                    <form class="d-sm-inline"
                        method="POST" 
                        action="{{ route('logout.post') }}" 
                        >
                        @csrf
                        <a onclick="this.closest('form').submit()"
                            class="btn btn-default btn-flat float-right">
                            Cerrar sesión
                        </a>
                    </form>
                    

                </li>
            </ul>
        </li>
    </ul>
</nav>
