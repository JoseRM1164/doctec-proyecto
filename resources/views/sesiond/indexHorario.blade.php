@extends('layouts.dashboardDoctor')

@section('content')
    <a href="horarios/create" class="btn btn-primary mt-3">Nuevo horario</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Dia</th>
                <th scope="col">Inicio</th>
                <th scope="col">Fin</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($horarios as $horario)
            <tr>
                <td>{{$horario->id}}</td>
                <td>{{$horario->dia}}</td>
                <td>{{$horario->inicio}}</td>
                <td>{{$horario->fin}}</td>
                <td>
                    <a class="btn btn-info">Editar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

@endsection
