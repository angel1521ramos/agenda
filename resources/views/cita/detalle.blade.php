@extends('plantilla.base')

@section('titulo')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Cita de {{ $cita->paciente }}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('cita.index') }}">Visualizar</a></li>
        <li class="breadcrumb-item active">Detalle</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('contenido')
    <div class="box">
        <div class="box-body">
            <div class="row">
                <div class="col-sm-6">
                    <label>paciente: </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                    <input name="paciente" class="form-control" value="{{ $cita->paciente }}" readonly>
                    </div>

                    <label>edad: </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                    <input name="edad" class="form-control" value="{{ $cita->edad }}" readonly>
                    </div>
                    
                    <label>telefono: </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                    <input name="telefono" class="form-control" value="{{ $cita->telefono }}" readonly>
                    </div>

                    <label>Doctor: </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-hospital"></i></span>
                        </div>
                    <input name="paciente" class="form-control" value="{{ $cita->user->name }}" readonly>
                    </div>

                </div>

                <div class="col-sm-6">
                    <label>escolaridad: </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                        </div>
                    <input name="escolaridad" class="form-control" value="{{ $cita->escolaridad }}" readonly>
                    </div>

                    <label>horario: </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                        </div>
                    <input name="horario" class="form-control" value="{{ $cita->horario }}" readonly>
                    </div>

                    <label>observaciones: </label>
                    <textarea name="observaciones" class="form-control" rows="4"
                        readonly>{{ $cita->observaciones }}</textarea>
                </div>

            </div>
        </div><br>

        <div class="form-group">
            <a href="javascript: history.go(-1)" class="btn btn-success">Regresar</a>
        </div>
    </div>
@stop
