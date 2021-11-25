@extends('layouts.main')

@section('content')
<h1 class="d-flex justify-content-center">Bienvenido a Doctec</h1>
<br>
    <div class="card">
        <div class="card-body">
            <div class="carousel slide" id="carouselExampleSlidesOnly" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="d-block w-100" src="https://picsum.photos/400/200"></div>
                    <div class="carousel-item"><img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c9269%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c9269%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22247.3203125%22%20y%3D%22217.75625%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"></div>
                    <div class="carousel-item"><img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160549c926a%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160549c926a%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277.0078125%22%20y%3D%22217.75625%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-white bg-info">
        <div class="card-body">
            <div class="jumbotron">
                <h1 class="display-3">DOCTEC!</h1>
                <p class="lead">Somos una empresa que busca mejorar la comunicación y la experienciaentre los doctores y sus pacientes</p>
                <hr class="my-4">
                <p>Uno de nuestros objetivos es apoyar a nuestros doctores a poder administrar de una mejor manera su tiempo disponible
                    para citas, las citas agendando sus pacientes y poder notificiarle a el o a sus paciente en caso de que cualquiera
                    de ellos llegué a cancelar la cita y asi liberar ese horario para una nueva cita.</p>
                <p class="lead"><a class="btn btn-lg bg-light text-info shadow" href="{{ route('auth.register') }}" role="button">Registrate</a></p>
            </div>
        </div>
    </div>
@endsection
