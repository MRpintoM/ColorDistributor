
@extends('layouts.plantilla')

@section('content')


    <body>

    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Inicio de Sección

                    </h4>
                </div>
            </div>
        </div>
        <div class="p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

            @if(\Session::has('warning'))
                <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('warning') !!}</li>
                    </ul>
                </div>
            @endif

            <form action="validar.php" method="POST">
                @csrf



                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" name="correo" id="correo" maxlength="45" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" id="contrasena" name="contrasena" class="form-control" >
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="#" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection

