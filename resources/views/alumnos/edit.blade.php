@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cambios</h1>
@stop

@section('content')
    <form action="/alumnos/{{$alumno->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="num_control" class="form-label">Numero de Control</label>
            <input id="num_control" name="NumCtrl" type="text" class="form-control" value="{{$alumno->NumCtrl}}">

            <label for="num_control" class="form-label">Nombre</label>
            <input id="num_control" name="Nombre" type="text" class="form-control" value="{{$alumno->Nombre}}">

            <label for="num_control" class="form-label">Primer Apellido</label>
            <input id="num_control" name="Primer_Ap" type="text" class="form-control" value="{{$alumno->Primer_Ap}}">

            <label for="num_control" class="form-label">Segundo Apellido</label>
            <input id="num_control" name="Segundo_Ap" type="text" class="form-control" value="{{$alumno->Segundo_Ap}}">

            <label for="num_control" class="form-label">Edad</label>
            <input id="num_control" name="Edad" type="number" class="form-control" value="{{$alumno->Edad}}">

            <label for="num_control" class="form-label">Semestre</label>
            <input id="num_control" name="Semestre" type="number" class="form-control" value="{{$alumno->Semestre}}">

            <label for="num_control" class="form-label">Carrera</label>
            <input id="num_control" name="Carrera" type="text" class="form-control" value="{{$alumno->Carrera}}">

        </div>

        <a href="/alumnos" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Agregar</button>

    </form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
