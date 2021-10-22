
@extends('layouts.plantilla')

@section('content')
    <div>
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h1>
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
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
        Ver Colores
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"style="background:-webkit-linear-gradient(left top,#E430FD  ,#45B39D);">
                        <h5 class="modal-title" style="align-content: center" id="exampleModalLabel"> colores </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="cont-int" style="align-content: center">
                        <div class="btns"  >
                            <center> <input type="color" id="color"> </center>
                        </div>
                    </div>
                        <div class="modal-footer" >
                            <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <script src="script.js"></script>



@endsection
