<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamkar extends Model
{
    protected $quarded = [];
    public $kamar = 'Kamar';
    protected $primaryKey = 'kamar_id';
}