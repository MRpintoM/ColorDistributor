@extends('layouts.plantilla')
@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: cornflowerblue;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref ">


    <div class="content">

        <img src="{{asset('imagenes/Logo.png')}}" width="500" height="300">

        <div class="title m-b-md">
            Bienvenido a Color Distributor

        </div>

        <div class="links">
            <a href=#>Caracteristicas</a>
            <a href=#>Ventajas y Desventajas</a>
            <a href="https://www.kali.org/docs/">Información Adicional</a>
            <a href="https://drive.google.com/drive/u/1/folders/1qq-mES_td1CHDyohnjWo74jIRIWZZ_YO">Documentación</a>
            <a href="https://us-east-2.console.aws.amazon.com/ec2/v2/home?region=us-east-2#Instances:" > <img src="https://assets.ubuntu.com/v1/83ff4203-awshp-strip-customers.png" width="100" height="100"></a>

        </div>
    </div>

</div>


</body>
</html>



@endsection
