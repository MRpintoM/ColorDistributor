
@extends('layouts.plantilla')

@section('content')
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

        @if (\Session::has('warning'))
            <div class="alert alert-warning">
                <ul>
                    <li>{!! \Session::get('warning') !!}</li>
                </ul>
            </div>
        @endif

    <div>
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h1>
                        <a href="#" > <img src="https://www.nicepng.com/png/full/402-4024180_01-elegir-el-color-de-marca-color-wheel.png" width="100" height="100"></a>
                        Paleta de Colores
                    </h1>
                </div>
            </div>
        </div>
        <br>
    </div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selector de color</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <center>

    <div class="col-6 offset-1">
        <p align="justify">
            Obtener códigos de color HTML, códigos de color Hex, RGB y HSL
            valores con nuestra selección de colores, tablas de colores y nombres de colores HTML. ¡Vamonos!
        </p>



        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
        Ver Colores
        </button>
    </center>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header"style="background:-webkit-linear-gradient(left top,#E430FD  ,#45B39D);">
                        <h5 class="modal-title" style="align-content: center" id="exampleModalLabel"> colores </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class=" col-10 offset-1">
                        <a href="#" > <img src="https://www.nicepng.com/png/full/402-4024180_01-elegir-el-color-de-marca-color-wheel.png" width="100" height="100"></a>
                        <p align="justify">
                            Utilice el selector de color haciendo clic y arrastrando el cursor dentro
                            del área selector para resaltar un color a la derecha. Entrada Hex, RGB, los
                            valores HSL o CMYK para buscar un color en particular en los campos siguientes la
                            muestra de color; clic en la muestra para añadirlo a su paleta. Después de
                            seleccionar un color, experimentar con diferentes armonías utilizando el
                            menú desplegable a continuación el selector de color.
                        </p>



                    <div class="cont-int" style="align-content: center">
                        <div class="btns"  >
                            <center> <input type="color" id="color"> </center>

                        </div>
                    </div>
                        <form action="{{ route('registrarfoto') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')


                            <div class="row form-group">
                                <label for="" class="col-2">Foto</label>
                                <input type="file" name="foto" class="fotoFile form-control col-md-9 border border-info">
                            </div>


                            <div class="modal-footer">

                                <button type="submit" name="btnEnviar" class="btn btn-primary">Subir Imagen</button>
                            </div>
                        </form>

                </div>
            </div>
            <script src="script.js"></script>



@endsection
