<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamhol extends Model
{
    protected $quarded = [];
    public $hotel = 'Hotel';
    protected $primaryKey = 'hotel_id';
}