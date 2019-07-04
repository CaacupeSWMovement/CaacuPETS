<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntariado extends Model
{
    protected $table='voluntariado';

    protected $primaryKey='id';

    public $timestamps = false;

    protected $fillable=[
    	'titulo', 
    	'img1', 
    	'texto'
    ];

    protected $guarded=[

    ];
}
