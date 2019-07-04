<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donaciones extends Model
{
    protected $table='donaciones';

    protected $primaryKey='id';

    public $timestamps = false;

    protected $fillable=[
    	'articulo',
    	'texto'
    ];

    protected $guarded=[

    ];
}
