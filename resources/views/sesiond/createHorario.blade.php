@extends('layouts.dashboardDoctor')

@section('content')
    <h2 class="mt-3">Nuevo horario</h2>
    <form action="/horarios" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Dia para cita</label>
            <input id="dia" name="dia" type="text" class="form control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Hora en la que inicia cita</label>
            <input id="inicio" name="inicio" type="text" class="form control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Hora en la que termina la cita</label>
            <input id="fin" name="fin" type="text" class="form control" tabindex="3">
        </div>
        <a href="/horarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Crear</button>
    </form>
@endsection
