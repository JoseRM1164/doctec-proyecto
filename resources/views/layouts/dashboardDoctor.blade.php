<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Doctec - Doctor</title>
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
</head>
<body style="background-color:#deebff;">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body bg-light shadow">
                    <nav class="nav nav-pills flex-column flex-sm-row">
                        <a class="flex-sm-fill text-sm-center nav-link text-info" href="#">Citas</a>
                        <a class="flex-sm-fill text-sm-center nav-link text-info" href="#">Horarios</a>
                        <a class="flex-sm-fill text-sm-center nav-link text-info" href="#">Perfil</a>
                        <a class="flex-sm-fill text-sm-center nav-link text-info" href="{{ route('auth.logout') }}">Cerrar Sesión</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    @yield('content')
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
</body>
</html>
