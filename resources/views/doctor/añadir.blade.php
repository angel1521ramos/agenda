@extends('plantilla.base')

@section('titulo')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Añadir un nuevo doctor</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Añadir</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('contenido')
<form method="POST" action="{{ route('doctor.store') }}"> 
@csrf
    <div class="box">
        <div class="box-body">
                <label>Nombre</label>
                <input 
                    name="nombre" 
                    class="form-control" 
                    value="{{old('nombre')}}"
                    placeholder="ingresa aqui el nombre completo del doctor" required>
                {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                <label>especialidad</label>
                <input 
                    name="especialidad" 
                    class="form-control" 
                    value="{{old('especialidad')}}"
                    placeholder="ingresa aqui la especialidad del doctor" required>
                {!! $errors->first('especialidad', '<span class="help-block">:message</span>') !!}
                
        </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="javascript: history.go(-1)" class="btn btn-secondary">Cancelar</a>
        </div>
    </div>
</form>
@stop