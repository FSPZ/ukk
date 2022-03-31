<?php

namespace App\Http\Controllers;

use App\Hotel;

use Illuminate\Http\Request;

class HotelController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    // public function index()

    // {

    //     $hotel = Hotel::all();

    //     return view('hotel.index',compact('hotel'));

    // }

    public function index()
    {
        $hotel = Hotel::latest()->paginate(4);

        return view('hotel.index',compact('hotel'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    public function search(Request $request)
    {
        $search = Hotel::where('tipe_kamar','like', "%" . $request->search . "%")->paginate(4);
        return view('hotel.index',['hotel' => $search]);
    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('hotel.create');

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $data=Hotel::create($request->all());

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('fotohotel/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }

        //         'nama_fasilitas'  => $request->input('nama_fasilitas'),

        //         'keterangan' => $request->post('keterangan'),
        //         'gambar' => $request->post('gambar')


        // );

        // Hotel::create($data);

        return redirect()->route('hotel.index');

    }

    /**

     * Display the specified resource.

     *

     * @param  \App\hotel  $hotel

     * @return \Illuminate\Http\Response

     */

    public function show(hotel $hotel)

    {

        //

    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Hotel  $fasilitas

     * @return \Illuminate\Http\Response

     */

    public function edit(hotel $hotel)

    {

        return view('hotel.edit',compact('hotel'));

    }

    public function detail(hotel $hotel)

    {

        return redirect('hotel.index')->with('success','Modul created successfully.');

    }

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Hotel  $fasilitas

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, hotel $hotel)

    {

        $hotel->update($request->all());

        return redirect()->route('hotel.index');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Hotel  $hotel

     * @return \Illuminate\Http\Response

     */

    public function destroy(hotel $hotel)

    {

        $hotel->delete();

        return redirect()->route('hotel.index');

    }

}