<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamfas extends Model
{
    protected $quarded = [];
    public $fasilitas = 'Fasilitas';
    protected $primaryKey = 'fasilitas_id';
}
