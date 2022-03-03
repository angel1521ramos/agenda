@extends('plantilla.base')

@section('titulo')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Editar cita de {{ $cita->paciente }}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('cita.index') }}">Visualizar</a></li>
        <li class="breadcrumb-item active">Editar</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('contenido')
    <form method="POST" action="{{ route('cita.update', $cita->id) }}">
        @csrf
        @method('PUT')

        <div class="box">
            <div class="row">
                <div class="col-sm-6">

                    <label>Paciente</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                    <input name="paciente" class="form-control" value="{{ $cita->paciente }}"
                        placeholder="ingresa aqui el nombre del paciente" required>
                    </div>


                    <label>edad</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                    <input name="edad" class="form-control" value="{{ $cita->edad }}"
                        placeholder="ingresa aqui la edad del paciente" required>
                    </div>

                    <label>telefono</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                    <input name="telefono" class="form-control" value="{{ $cita->telefono }}"
                        placeholder="ingresa aqui el telefono del paciente" required>
                    </div>

                    <label>Doctores</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-hospital"></i></span>
                        </div>
                        <input type="hidden" name="user_id" class="form-control" value="{{ auth()->user()->id }}" readonly>
                        <input class="form-control" value="{{ auth()->user()->name }}" readonly>
                        
                    </div>
                </div>

                <div class="col-sm-6">
                    <label>escolaridad</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                        </div>
                        <select name="escolaridad" class="form-control" required>
                            <option value="{{ $cita->escolaridad }}">{{ $cita->escolaridad }}</option>
                            <option value="Preescolar">Preescolar</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Preparatoria">Preparatoria</option>
                            <option value="Universitaria">Universitaria</option>
                            <option value="Postgrado">Postgrado</option>
                        </select>
                    </div>

                    <label>horario</label>
                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fas fa-clock"></i></div>
                        </div>
                        <input 
                            name="horario"
                            value="{{$cita->horario}}"
                            type="text" 
                            class="form-control datetimepicker-input" 
                            data-target="#timepicker"
                            data-toggle="datetimepicker"/>
                    </div>

                    <label>observaciones</label>
                    <textarea name="observaciones" class="form-control"
                        placeholder="ingresa aqui las observaciones de la cita" rows="4" required>{{ $cita->observaciones }}</textarea>
                </div>
            </div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="javascript: history.go(-1)" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>
@endsection


@push('styles')
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
@endpush

@push('scripts')
<!-- InputMask -->
<script src="{{ URL::asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script>
        $(function() {
            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })
        });
    </script>
@endpush