<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ckout extends Model
{
    protected $quarded = [];
    protected $table ='ckouts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_tamu' ,
        'tgl_in' ,
        'tgl_out' ,
        'jmlh_kmr' ,
        'nama_pemesan' ,
        'no_telp' ,
        'email' ,
        'tipe',
    ];
}
