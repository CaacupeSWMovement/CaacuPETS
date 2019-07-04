<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nosotros extends Model
{
    protected $table='nosotros';

    protected $primaryKey='id';

    public $timestamps = false;

    protected $fillable=[
    	'titulo1',
        'img1',
        'texto1',
        'titulo2',
        'texto2',
        'titulo3',
        'texto3'
    ];

    protected $guarded=[

    ];
}
