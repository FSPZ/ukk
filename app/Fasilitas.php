<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model

{

    protected $table="fasilitas";

    protected $fillable= [

        'tipe_kamar','nama_fasilitas'

    ];

    public $timestamps      = false;

}