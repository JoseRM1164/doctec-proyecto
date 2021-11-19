@extends('layouts.main')

@section('content')

<h1 class="d-flex justify-content-center">Directorio de doctores</h1>
<br>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
            <table class="table table-responsive-sm table-striped">
            <thead>
                <tr>
                    <th>Nombre Doctor</th>
                    <th>Date registered</th>
                    <th>Especialidad</th>
                    <th>Status</th>
                    <th>Cita</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Yiorgos Avraamu</td>
                    <td>2012/01/01</td>
                    <td>Member</td>
                    <td><span class="badge badge-success">Active</span></td>
                    <td><a class="text-info" href="{{ route('auth.login') }}">Agenda aqui</a></td>
                </tr>
            <tr>
            <td>Avram Tarasios</td>
            <td>2012/02/01</td>
            <td>Staff</td>
            <td><span class="badge badge-danger">Banned</span></td>
            </tr>
            <tr>
            <td>Quintin Ed</td>
            <td>2012/02/01</td>
            <td>Admin</td>
            <td><span class="badge badge-secondary">Inactive</span></td>
            </tr>
            <tr>
            <td>Enéas Kwadwo</td>
            <td>2012/03/01</td>
            <td>Member</td>
            <td><span class="badge badge-warning">Pending</span></td>
            </tr>
            <tr>
            <td>Agapetus Tadeáš</td>
            <td>2012/01/21</td>
            <td>Staff</td>
            <td><span class="badge badge-success">Active</span></td>
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
<br>
<br>
@endsection
