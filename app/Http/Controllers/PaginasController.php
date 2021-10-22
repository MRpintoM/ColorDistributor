<?php


namespace App\Http\Controllers;


class PaginasController
{
    public function Welc()
    {
        return \view('welcome');


    }
    public function colores()
    {
        return \view('Paginas.Colores');

    }
    public function creare()
    {
        return \view('Paginas.create');

    }
}
