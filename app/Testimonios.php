<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonios extends Model
{
    protected $table='testimonios';

    protected $primaryKey='id';

    public $timestamps = false;

    protected $fillable=[
    	'testimonio'
    ];

    protected $guarded=[

    ];
}
