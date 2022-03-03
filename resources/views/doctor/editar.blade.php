@extends('plantilla.base')

@section('titulo')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Editar datos de {{$doctor->nombre}}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('doctor.index') }}">Visualizar</a></li>
        <li class="breadcrumb-item active">Editar</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('contenido')
<form method="POST" action="{{ route('doctor.update', $doctor->id) }}"> 
    @csrf
    @method('PUT')

    <div class="box">
        <div class="box-body">
            <label>Nombre</label>
            <input 
                name="nombre" 
                class="form-control" 
                value="{{$doctor->nombre}}"
                placeholder="ingresa aqui el nombre doctor" required>
                {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
            <!--div del titulo del post------------------------------------------------------------------------------>
            <label>especialidad</label>
            <input 
                name="especialidad" 
                class="form-control" 
                value="{{$doctor->especialidad}}"
                placeholder="ingresa aqui la especialidad del doctor" required>
                {!! $errors->first('especialidad', '<span class="help-block">:message</span>') !!}
                
        </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="javascript: history.go(-1)" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</form>
@endsection
