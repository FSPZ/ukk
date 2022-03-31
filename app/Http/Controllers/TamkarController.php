<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Data;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;
use Repsonse;
use App\Kamar;
class TamkarController extends Controller
{
    public function index()
    {
        $tamkar = Kamar::all();
        return view('tamkar.index', ['tamkar' => $tamkar]);
    
    }
}
