<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table='slide';

    protected $primaryKey='id';

    public $timestamps = false;

    protected $fillable=[
    	'slide'
    ];

    protected $guarded=[

    ];
}
