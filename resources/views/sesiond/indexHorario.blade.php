@extends('layouts.dashboardDoctor')

@section('css')
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
    <a href="horarios/create" class="btn btn-primary mt-3">Nuevo horario</a>

    <table class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-info text-black">
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
                    <form action="{{ url('sesion/horarios')}}/{{ $horario->id }}" method="POST">
                        <a href="horarios/{{$horario->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres borrarlo?')" value="Borrar">
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
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
