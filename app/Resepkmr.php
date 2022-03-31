<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resepkmr extends Model
{
    protected $quarded = [];
    public $cekin = 'Cekin';
    protected $primaryKey = 'cekin_id';
}