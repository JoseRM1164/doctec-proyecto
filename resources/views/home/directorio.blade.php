@extends('layouts.main')

@section('content')

<h1 class="d-flex justify-content-center">Directorio de doctores</h1>
<br>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-flex mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-info text-white" type="button" id="button-addon1">Buscar</button>
                    </div>
                    <input type="text" class="form-control" placeholder="Por nombre o especialidad" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>

                <table class="table table-responsive-sm table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Especialidad</th>
                        <th>Disponibilidad</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dr. Juan</td>
                        <td>Alvares López</td>
                        <td>Medicina general</td>
                        <td><span class="badge bg-success">Alta</span></td>
                        <td><a class="text-info" href="{{ route('auth.login') }}">Agendar cita</a></td>
                    </tr>
                    <tr>
                        <td>Dr. Luis</td>
                        <td>Garcia Galvan</td>
                        <td>Pediatria</td>
                        <td><span class="badge bg-danger">Baja</span></td>
                        <td><a class="text-info" href="{{ route('auth.login') }}">Agendar cita</a></td>
                    </tr>
                    <tr>
                        <td>Dr. Jorge</td>
                        <td>Montoya Paredes</td>
                        <td>Cardiología</td>
                        <td><span class="badge bg-secondary">Sin disponibilidad</span></td>
                        <td><a class="text-info" href="{{ route('auth.login') }}">Agendar cita</a></td>
                    </tr>
                    <tr>
                        <td>Dr. Rashid</td>
                        <td>De la Torre Juarez</td>
                        <td>Oncología</td>
                        <td><span class="badge bg-warning">Media</span></td>
                        <td><a class="text-info" href="{{ route('auth.login') }}">Agendar cita</a></td>
                    </tr>
                    <tr>
                        <td>Dra. Maria</td>
                        <td>Ruiz Torres</td>
                        <td>Ginecología</td>
                        <td><span class="badge bg-success">Alta</span></td>
                        <td><a class="text-info" href="{{ route('auth.login') }}">Agendar cita</a></td>
                    </tr>
                </tbody>
                </table>
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link text-muted" href="#">Prev</a></li>
                    <li class="page-item active"><a class="page-link  bg-info border-info" href="#">1</a></li>
                    <li class="page-item disabled"><a class="page-link text-info" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
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
@endsection
