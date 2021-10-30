<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Selector extends Model
{
    protected $table='selector';
    public $timestamps=false;
    protected $fillable=[
        'idselector', 'r','g','b','imagen'

    ];
    protected $primaryKey='idselector';

}
