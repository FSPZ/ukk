<?php

namespace App\Http\Controllers;

use App\Fasilitas;

use Illuminate\Http\Request;

class FasilitasController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    // public function index()

    // {

    //     $fasilitas = Fasilitas::all();

    //     return view('fasilitas.index',compact('fasilitas'));

    // }


    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(4);

        return view('fasilitas.index',compact('fasilitas'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    public function search(Request $request)
    {
        $search = Fasilitas::where('tipe_kamar','like', "%" . $request->search . "%")->paginate(4);
        return view('fasilitas.index',['fasilitas' => $search]);
    }
    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('fasilitas.create');

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $data=array(

                'tipe_kamar'  => $request->input('tipe_kamar'),

                'nama_fasilitas' => $request->post('nama_fasilitas')

        );

        Fasilitas::create($data);

        return redirect()->route('fasilitas.index');

    }

    /**

     * Display the specified resource.

     *

     * @param  \App\fasilitas  $fasilitas

     * @return \Illuminate\Http\Response

     */

    public function show(fasilitas $fasilitas)

    {

        //

    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Fasilitas  $fasilitas

     * @return \Illuminate\Http\Response

     */

    public function edit(fasilitas $fasilita)

    {

        return view('fasilitas.edit',compact('fasilita'));

    }

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Fasilitas  $fasilitas

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, fasilitas $fasilita)

    {

        $fasilita->update($request->all());

        return redirect()->route('fasilitas.index');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Fasilitas  $fasilitas

     * @return \Illuminate\Http\Response

     */

    public function destroy(fasilitas $fasilita)

    {

        $fasilita->delete();

        return redirect()->route('fasilitas.index');

    }

}