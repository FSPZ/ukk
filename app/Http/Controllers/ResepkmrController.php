<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Data;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;
use Repsonse;
use App\Cekin;

class ResepkmrController extends Controller
{
    public function index()
{
    $resepkmr = Cekin::all();
    return view('resepkmr.index', ['resepkmr' => $resepkmr]);

}

// public function cetak($id)
// {
//     $resepkmr = DB::table('cekin')->where('id', $id)->get();

//     return view('resepkmr.cetak', ['resepkmr' => $resepkmr]);

// }


public function show($id)
{
    $resepkmr = DB::table('cekin')->where('id', $id)->get();

    return view('resepkmr.cetak', ['resepkmr' => $resepkmr]);

}



// public function export(){
//     //mengambil data dan tampilan dari halaman laporan_pdf
//     //data di bawah ini bisa kalian ganti nantinya dengan data dari database
//     $data = Cekin::loadview('laporan_pdf', ['data' => 'ini adalah contoh laporan PDF']);
//     //mendownload laporan.pdf
//     return $data->download('laporan.pdf');
// }
// public function search(Request $request)
//     {
//         $search = Cekin::where('nama_tamu','like', "%" . $request->search . "%")->paginate(5);
//         return view('resepkmr.index',['resepkmr' => $search]);
//     }
 
    //   function getFile($filename){
    //   	$file=Storage::disk('public')->get($filename);
        
	//   	return (new Response($file, 200))
    //             ->header('Content-Type', 'file,doc,docx,rar,xlsx,PDF,pdf,jpg,jpeg,png');

    //       $files = Storage::files("public");
    //   	$a=array();
    //   	foreach ($files as $key => $value) {
    //   		$value= str_replace("public/assets/","",$value);
    //   		array_push($tabel,$value);
    //   	}
	//   return view('tabel.index', ['file_elektronik' => $a]);
    //   }

    //    public function download()
    //    {
    //        try{
    //            return Storage::disk('local')->download('public/assets',$filenameSimpan);
    //        }catch(\Exception $e){
    //            return $e->getMessage();
    //        }
    //    }

    //  public function download()
    // {
    // 	$myFile = storage_path("public/assets");


    // 	return response()->download($myFile);
    // }

    //   public function downfunc(){

    //       $downloads=DB::table('bukus')->get();
    //       return view('welcome',compact('downloads'));
    //     // dd($url);
    //   }


    // public function download()
    // {
    //     $path=public_path('public/assets',$filenameSimpan);
    //     return response()->download($path);
    // }



    // public function download_public(Request $request)
    // {
    //     if (Storage::disk('public')->exists("assets/$request->file")){
    //         $path = Storage::disk('public')->path("assets/$request->file");
    //         $content = file_get_contents($path);
    //         return response($content)->withHeaders([
    //             'content-Type' => mime_content_type($path)
    //         ]);
    //     }
    // }

}