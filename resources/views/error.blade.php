@extends('plantilla.base')

@section('contenido')
<div class="container">
    <div class="row">
        <form method="GET" action="{{ route('doctor.create') }}" style="display: inline">
        @csrf
        <h5>No hay doctores en el sistema</h5>
        <br>
            <button class="btn btn-primary" >Agregar doctor</button>
        </form>
    </div>
</div>
@stop