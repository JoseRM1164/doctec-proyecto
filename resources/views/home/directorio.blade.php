@extends('layouts.main')
@section('css')
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')

<h1 class="d-flex justify-content-center">Directorio de doctores</h1>
<br>
    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-info text-secondary">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Cita</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>Dr. {{$usuario->name}}</td>
                <td>{{$usuario->apellidos}}</td>
                <td>{{$usuario->especialidad}}</td>
                <td><a class="text-info" href="{{ route('auth.login') }}">Agendar cita</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#usuarios').DataTable();
        } );
    </script>
@endsection

@endsection
