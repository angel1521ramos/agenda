@extends('plantilla.base')

@section('titulo')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Lista de citas</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('inicio') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Visualizar</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('contenido')
  <div class="box">
    <div class="box-body">
      <table id="tabla-reportes" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Doctor</th>
            <th>Paciente</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Escolaridad</th>
            <th>Horario</th>
            <th>Acciones</th>
          </tr>
        </thead>
        
        <tbody>
            @foreach ($cita as $x)<!-- la variable post debe ser creada en el post controler--->
                <tr>
                    <td>{{$x->user->name}}</td>
                    <td>{{$x->paciente}}</td>
                    <td>{{$x->edad}}</td>
                    <td>{{$x->telefono}}</td>
                    <td>{{$x->escolaridad}}</td>
                    <td>{{$x->horario}}</td>
                    <td>
                      <form method="GET" action="{{ route('cita.show', $x->id) }}" style="display: inline">
                        @csrf
                          <button class="btn btn-sm btn-success" ><i class="fa fa-eye"></i></button>
                      </form>
                      <form method="GET" action="{{ route('cita.edit', $x->id) }}" style="display: inline">
                        @csrf
                        @method('UPDATE')
                        <button class="btn btn-sm btn-primary" ><i class="fa fa-pen"></i></button>
                      </form>
                      <form method="POST" action="{{ route('cita.destroy', $x) }}" style="display: inline">
                        @csrf
                        @method('DELETE')
                          <button class="btn btn-sm btn-danger" ><i class="fa fa-times"></i></button>
                      </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>

      </table>
    </div>
    <!-- /.box-body -->
  </div>
@stop

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@push('scripts')

<script src="{{ URL::asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
  $(function () {
    $("#tabla-reportes").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabla-reportes_wrapper .col-md-6:eq(0)');
  });
</script>
@endpush