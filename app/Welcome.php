<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    protected $table='welcome';

    protected $primaryKey='id';

    public $timestamps = false;

    protected $fillable=[
    	'titulo',
    	'subtitulo',
    	'info',
    	'img1',
    	'img2'
    ];

    protected $guarded=[

    ];
}
