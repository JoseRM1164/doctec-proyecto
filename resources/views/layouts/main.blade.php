<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Doctec</title>
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
</head>

<body style="background-color:#deebff;">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body bg-light shadow">
                    <nav class="nav nav-pills flex-column flex-sm-row">
                        <a class="flex-sm-fill text-sm-center nav-link text-info" href="{{ route('homepage') }}">Inicio</a>
                        <a class="flex-sm-fill text-sm-center nav-link text-info" href="{{ route('directorio') }}">Directorio</a>
                        <a class="flex-sm-fill text-sm-center nav-link text-info" href="{{ route('auth.login') }}">Inciar sesión</a>
                        <a class="flex-sm-fill text-sm-center nav-link text-info" href="{{ route('auth.register') }}">Registrate</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    @yield('content')

    <div class="d-flex flex-column">
        <footer class="footer">
            <div>
            <a class="text-info" href="{{ route('homepage') }}">Doctec</a>
            <span>&copy; 2021 LabWeb.</span>
            </div>
            <div class="ml-auto">
            <span>Powered by</span>
            <a class="text-info" href="https://coreui.io">CoreUI</a>
            </div>
        </footer>
    </div>
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
</body>
</html>
