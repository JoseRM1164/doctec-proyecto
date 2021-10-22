@extends('layouts.main')

@section('content')

<h1>Doctec</h1>
    <p>
        <a href="{{ route('auth.register') }}" class="btn btn-primary">
            Registro aquí
        </a>
    </p>

@endsection

