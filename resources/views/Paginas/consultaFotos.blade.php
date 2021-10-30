@extends('layouts.plantilla')

@section('content')

    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Consulta de Fotos
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered border-primary">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Foto</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($imagenes as $foto)
            <tr>

                <th scope="row">{{ $foto->idfotos }}</th>
                <td>
                    <img src="{{asset($foto->foto)}}" class="img-fluid" width="100px" >

                </td>



            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
