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

                    <form action="{{ route('registrarfoto') }}" method="POST">
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


@endsection
