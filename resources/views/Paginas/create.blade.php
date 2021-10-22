@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Subir Imagenes</h1>
                <form action="{{}}" method="POST">
                    @csrf
                    <input type="file" name="file" id="">
                    <button type="submit">subir imagen </button>

                </form>
            </div>
        </div>

    </div>

@endsection
