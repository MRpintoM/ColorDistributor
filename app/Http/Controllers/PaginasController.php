<?php


namespace App\Http\Controllers;


use App\Models\File;
use App\Models\Hotel;
use App\Models\Usuario;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class PaginasController
{
    public function Welc()
    {
        return \view('welcome');


    }

    public function create()
    {

        return \view('Paginas.create');

    }

    public function registrar(){
        $usuario = Usuario::all();
        return view('Paginas.formulario', compact('usuario'));
    }
    public function guardar(Request $request){


        $data = request()->validate([
            'nombre' => 'required|max:100',
            'edad' => 'required|max:100',
            'correo' => 'required|max:100',
            'contrasena' => 'required|max:100',

        ], [
            'nombre.required' => 'El campo nombre no debe estar vacio.',
            'edad.required' => 'El campo edad no debe estar vacio.',
            'correo.required' => 'El campo correo no debe estar vacio.',
            'contrasena.required' => 'El campo Contraseña no debe estar vacio.',

        ]);
        try{
            $usuario= Usuario::create([
                'nombre' => $data['nombre'],
                'edad' => $data['edad'],
                'correo' => $data['correo'],
                'contrasena' => $data['contrasena'],

            ]);
        }
        catch(QueryException $queryException){ //capturamos el erro en el catch
            return redirect()->route('registrar')->with('warning', 'Ocurrio un error al registrar el producto. ');
        }
        return redirect()->route('registrar')->with('success', 'Registro realizado exitosamente');
    }
    public function colores()
    {
        $selector = \App\Models\Selector::all();
        return view('Paginas.Colores',compact('selector'));

    }

    public function guardarcolor(Request $request){


        $data = request()->validate([
            'R' => 'required|max:100',
            'G' => 'required|max:100',
            'B' => 'required|max:100',
            'imagen' => 'required|max:100',

        ], [
            'R.required' => 'El campo R no debe estar vacio.',
            'G.required' => 'El campo G no debe estar vacio.',
            'B.required' => 'El campo B no debe estar vacio.',


        ]);
        try{
            $selector= Selector::create([
                'r' => $data['r'],
                'g' => $data['g'],
                'b' => $data['b'],
                'imagen' => $data['imagen'],

            ]);
        }
        catch(QueryException $queryException){ //capturamos el erro en el catch
            return redirect()->route('registrarcolor')->with('warning', 'Ocurrio un error al registrar  ');
        }
        return redirect()->route('registrarcolor')->with('success', 'Registro realizado exitosamente');
    }
    public function mostrar()
    {
        $imagenes = File::all();
        return view('Paginas.consultaFotos', compact('imagenes'));
    }
    public function store(Request $request){
        $request->validate([

            'foto' => 'required',

        ]);
        return $request -> file('foto') ->store('');

    }

    public function createfoto(Request $request)
    {
        $data = $request->validate([
            'foto' => 'required',

        ]);

        $foto = new File;
        $foto->foto = $data['foto'];

        $lastItem = File::all()->last();
        if (is_null($lastItem)) {
            $foto->idfotos = 1;
        } else {
            $foto->idfotos  = $lastItem->idfotos + 1;
        }
        $foto->save();
        return redirect()->route('mostrar');
    }



}
