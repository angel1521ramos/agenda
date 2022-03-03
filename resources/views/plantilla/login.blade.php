<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @include('plantilla.estilos')
    @stack('styles')
</head>

<body class="hold-transition login-page">



    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1">{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Inicia sesion para ingresar</p>




                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input 
                            name="email" 
                            type="email"
                            value="{{ old('email') }}"
                            class="
                                form-control
                                @error('email')
                                 is-invalid 
                                @enderror
                            " 
                            placeholder="Email"
                            autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="error invalid-feedback" style="display:block">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input 
                            name="password" 
                            type="password" 
                            class="
                                form-control
                                @error('password')
                                    is-invalid 
                                @enderror
                            " 
                            placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text" style="">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="error invalid-feedback" style="display:block">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <label>
                                    <input 
                                        type="checkbox" 
                                        name="recordar">
                                    Recordar sesion
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>






                <p class="mb-1">
                    <a href="forgot-password.html">Olvide mi contraseña</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">registrar una nueva sesion</a>
                </p>
            </div>
        </div>
    </div>
    @include('plantilla.scripts')
    @stack('scripts')
</body>

</html>
