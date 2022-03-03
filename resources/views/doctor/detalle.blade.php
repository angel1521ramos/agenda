@extends('plantilla.base')

@section('titulo')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Datos de {{$doctor->nombre}}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('doctor.index') }}">Visualizar</a></li>
        <li class="breadcrumb-item active">Detalle</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('contenido')
<div class="box">
    <div class="box-body">

        <label>Nombre: </label>
        <input 
          name="nombre" 
          class="form-control" 
          value="{{$doctor->nombre}}"
          readonly>
      <label>Especialidad: </label>
        <input 
          name="especialidad" 
          class="form-control" 
          value="{{$doctor->especialidad}}"
          readonly>
            
    </div><br>

    <div class="form-group">
        <a href="javascript: history.go(-1)" class="btn btn-success">Regresar</a>
      </div>
</div>
@stop
