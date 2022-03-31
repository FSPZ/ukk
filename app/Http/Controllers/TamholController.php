<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;
use Repsonse;
use App\Hotel;
class TamholController extends Controller
{
    public function index()
    {
        $tamhol = Hotel::all();
        return view('tamhol.index', ['tamhol' => $tamhol]);
    
    }
}
