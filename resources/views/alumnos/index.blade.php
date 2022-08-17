@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">

    <!--<h1>Dashboard</h1>-->
@stop

@section('content')
<h1>Ventana Agregar Distribuidor</h1>
    <a href="alumnos/create" class="btn btn-primary">Agregar Registro</a>

    <table id="alumnos" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Distribuido Autorizado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $a)
            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->Nombre}}</td>
                <td><a href="/alumnos/{{$a->id}}/edit" class="btn btn-warning">EDITAR</a> 
                <form  style="display:inline;" action="{{route('alumnos.destroy', $a->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            </td>
            </tr>
            @endforeach
                
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop




<!-- DATATABLE --------------------------------------------------------------- -->
@section('js')
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>

<script>
     var alumnos = document.querySelector("#alumnos");

     var dataTable = new DataTable(alumnos);
</script>

@stop
