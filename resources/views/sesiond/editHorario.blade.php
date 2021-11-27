@extends('layouts.dashboardDoctor')

@section('content')
<h2 class="mt-3">Editar horario</h2>
    <form action="{{url('sesion/horarios')}}/{{$horario->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Dia para cita</label>
            <input id="dia" name="dia" type="date" class="form control" tabindex="1" value="{{$horario->dia}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Hora en la que inicia cita(formato 24hr): </label>
            <input id="inicio" name="inicio" type="time" class="form control" tabindex="2" value="{{$horario->inicio}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Hora en la que termina la cita (formato 24hr):</label>
            <input id="fin" name="fin" type="time" class="form control" tabindex="3" value="{{$horario->fin}}">
        </div>
        <a href="/" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Editar</button>
    </form>
@endsection
