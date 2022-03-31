<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;
use Repsonse;
use App\Fasilitas;
class TamfasController extends Controller
{
    public function index(){
    $tamfas = Fasilitas::all();
    return view('tamfas.index', ['tamfas' => $tamfas]);
    }
}
