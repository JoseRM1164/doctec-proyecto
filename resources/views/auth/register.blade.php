@extends('layouts.main')

@section('title')
    Registro
@endsection

@section('layout_body_class_append')
align-items-center
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mx-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body p-4">
                <h1>Registrate</h1>
                <p class="text-muted">
                    Crea tu cuenta aquí
                </p>
                <form action="{{ route('auth.save-user') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input class="form-control" name="name" type="text" placeholder="Nombre de usuario">
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" name="email" type="text" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" name="password" type="password" placeholder="Contraseña">
                    </div>
                    <div class="input-group mb-4">
                        <input class="form-control" name="password_confirmation" type="password" placeholder="Confirma la contraseña">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Tipo de usuario </label>
                        <div class="col-md-9">
                            <select class="form-control" name="type">
                                <option value="0" class="text-">Seleccionar tipo de usuario</option>
                                <option value="1">Doctor</option>
                                <option value="2">Paciente</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-block bg-info shadow text-white" type="submit">
                        Registrarse
                    </button>
                </form>
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

