<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model

{

    protected $table="hotels";

    protected $fillable= [

        'nama_fasilitas','keterangan','gambar'

    ];

    public $timestamps      = false;

}