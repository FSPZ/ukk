<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model

{

    protected $table="kamars";

    protected $fillable= [

        'tipe_kamar','jumlah_kamar'

    ];

    public $timestamps      = false;

}