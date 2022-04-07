<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Cekin;
use App\Kamar;
use App\ckout;

use Illuminate\Http\Request;

class CekinController extends Controller
{
    public function index()
    {
        $cekin = Cekin::latest()->paginate(5);

        return view('cekin.index',compact('cekin'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function rekap(){
        $ckout = ckout::latest()->paginate(5);
        return view('rekap.index',compact('ckout'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('cekin.create');
    }

    public function store(Request $request)
    {
        // $awal = DB::table('kamars')->where('tipe_kamar', $request->tipe_kamar)->value('jumlah_kamar');

        // DB::table('kamars')->where('tipe_kamar', $request->tipe_kamar)->update([
        //     'jumlah_kamar' => $awal - $request->jumlah_kamar
        // ]);
        // dd($request);

    //         $request->validate([
    //             'jumlah_kamar' => 'required|numeric|gt:0',
    //         ]);

    //     $data=array(

    //         'nama_tamu'  => $request->input('nama_tamu'),

    //         'tgl_in' => $request->post('tgl_in'),

    //         'tgl_out'  => $request->input('tgl_out'),

    //         'jmlh_kmr'  => $request->input('jumlah_kamar'),

    //         'nama_pemesan'  => $request->input('nama_pemesan'),

    //         'no_telp'  => $request->input('no_telp'),

    //         'email'  => $request->input('email'),

    //         'tipe'  => $request->input('tipe')

    // );

    // Cekin::create($data);
        $validasiData = $request->validate([
            'nama_tamu' => 'required',
            'tgl_in' => 'required|date',
            'tgl_out' => 'required|date|after_or_equal:tgl_in',
            'jumlah_kamar' => 'required',
            'nama_pemesan' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'tipe' => 'required',

        ]);
        Cekin::create([
            'nama_tamu'=>$request['nama_tamu'],
            'tgl_in'=>$request['tgl_in'],
            'tgl_out'=>$request['tgl_out'],
            'jmlh_kmr'=>$request['jumlah_kamar'],
            'nama_pemesan'=>$request['nama_pemesan'],
            'no_telp'=>$request['no_telp'],
            'email'=>$request['email'],
            'tipe'=>$request['tipe'],

        ]);
        ckout::create([
            'nama_tamu'=>$request['nama_tamu'],
            'tgl_in'=>$request['tgl_in'],
            'tgl_out'=>$request['tgl_out'],
            'jmlh_kmr'=>$request['jumlah_kamar'],
            'nama_pemesan'=>$request['nama_pemesan'],
            'no_telp'=>$request['no_telp'],
            'email'=>$request['email'],
            'tipe'=>$request['tipe'],

        ]);

        $awal = DB::table('kamars')->where('tipe_kamar', $request->tipe)->value('jumlah_kamar');
                // dd($request->jumlah_kamar);
        DB::table('kamars')->where('tipe_kamar', $request->tipe)->update([
            'jumlah_kamar' => $awal - $request->jumlah_kamar
        ]);
        return redirect('/tamu')->with('success','Modul created successfully.');
    }

    public function search(Request $request)
    {
        // dd($request->nama_tamu);
        // $search = Cekin::where('nama_tamu','like', "%" . $request->search . "%")->paginate(4);
        // return view('cekin/index',['cekin' => $search]);

        $cekin = DB::table('cekin')->where('nama_tamu', $request->nama_tamu)->get();
        return view('cekin.index', ['cekin' => $cekin]);
    }
    public function searching(Request $request)
    {
        // dd($request->nama_tamu);
        // $search = Cekin::where('nama_tamu','like', "%" . $request->search . "%")->paginate(4);
        // return view('cekin/index',['cekin' => $search]);

        $cekin = DB::table('ckouts')->where('nama_tamu', $request->nama_tamu)->get();
        $ckout = ckout::latest()->paginate(5);

        return view('rekap.index', ['cekin','ckout' => $cekin]);
    }
   public function show(Cekin $cekin)
    {
        return view('cekin.show',compact('cekin'));
    }

    public function edit(Cekin $cekin)
    {
        return view('cekin.edit', compact('cekin'));
    }

    public function update($id)
    {
        dd($id);
        $request->validate([
            'jmlh_kmr' => 'required',
        ]);
        $awal = DB::table('kamars')->where('tipe_kamar', $request->tipe)->value('jumlah_kamar');
        // dd($request->jumlah_kamar);
        DB::table('kamars')->where('tipe_kamar', $request->tipe)->update([
    'jumlah_kamar' => $awal - $request->jumlah_kamar
]);

        return redirect()->route('cekin.index')
                        ->with('success','Cekin updated successfully');
    }

    public function destroy($id)
    {
        $cekin= cekin::find($id);
                //   dd($cekin->tipe);

        // $output = [];
        // $kmr =[];
        // foreach($cekin as $entry) {
        //     $output= $entry->tipe;
        //     $kmr= $entry->jmlh_kmr;
        // }
        //   dd($kmr);

        $kat = kamar::where('tipe_kamar', $cekin->tipe)->value('jumlah_kamar');
        //   dd( $kat->jumlah_kamar)

        $jml = $kat + $cekin->jmlh_kmr;
                    //  dd($jml);
         $updt = kamar::where('tipe_kamar', $cekin->tipe)->update(['jumlah_kamar' =>  $jml]);
        // $kat->update(['jumlah_kamar' =>  $jml]);

        $cekin->delete();
        return redirect()->route('cekin.index')
                        ->with('success','Cekin deleted successfully');
    }

    // public function cari(Request $request){
    //     // dd($request);

    //     $search = Cekin::where('tgl_in','like', "%" . $request->filter . "%")->paginate(4);
    //     return view('cekin/index',['cekin' => $search]);

    //     // $cekin = DB::table('cekin')->where('tgl_in', $request)->get();

    //     // return view('cekin.index');
    // }


    public function filter(Request $request)
    {

        // dd($request->tgl_checkin);
        $cekin = DB::table('cekin')->where('tgl_in', $request->tgl_checkin)->get();

        return view('cekin.index', ['cekin' => $cekin]);
    }
    public function filterin(Request $request)
    {
        $ckout = ckout::latest()->paginate(5);

        // dd($request->tgl_checkin);
        $cekin = DB::table('ckouts')->where('tgl_in', $request->tgl_checkin)->get();
        return view('rekap.index', ['cekin','ckout' => $cekin]);
    }

}
