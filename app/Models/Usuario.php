<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='registro';
    public $timestamps=false;
    protected $fillable=[
        'idcliente', 'nombre','edad','correo','contrasena'

    ];
    protected $primaryKey='idcliente';


}
