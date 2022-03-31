<?php

namespace App\Http\Controllers;

use App\Kamar;

use Illuminate\Http\Request;

class KamarController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    // public function index()

    // {

    //     $kamar = Kamar::all();

    //     return view('kamar.index',compact('kamar'));

    // }

    public function index()
    {
        $kamar = Kamar::latest()->paginate(4);

        return view('kamar.index',compact('kamar'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    public function search(Request $request)
    {
        $search = Kamar::where('tipe_kamar','like', "%" . $request->search . "%")->paginate(4);
        return view('kamar.index',['kamar' => $search]);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('kamar.create');

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

                'jumlah_kamar' => $request->post('jumlah_kamar')

        );

        Kamar::create($data);

        return redirect()->route('kamar.index');

    }

    /**

     * Display the specified resource.

     *

     * @param  \App\Kamar  $kamar

     * @return \Illuminate\Http\Response

     */

    public function show(kamar $kamar)

    {

        //

    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Kamar  $kamar

     * @return \Illuminate\Http\Response

     */

    public function edit(kamar $kamar)

    {

        return view('kamar.edit',compact('kamar'));

    }

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Kamar  $kamar

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, kamar $kamar)

    {

        $kamar->update($request->all());

        return redirect()->route('kamar.index');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Kamar  $kamar

     * @return \Illuminate\Http\Response

     */

    public function destroy(kamar $kamar)

    {

        $kamar->delete();

        return redirect()->route('kamar.index');

    }

}