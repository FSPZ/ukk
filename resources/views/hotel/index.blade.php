@extends('layouts.app')

@include('das.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">Data Fasilitas Hotel
                    <br>
                    <br>
                    <a href="{{route('hotel.create')}}" class="btn btn-dark btn-sm btn-flat pull-right"> Tambah</a>

                </div>

                {{-- <div class="col-md-4">
                    <form action="/search" method="get"><br>
                        <div class="input-group custom-search-form">
                            <input type="search" name="search" class="form-control" placeholder="Cari Tipe Kamar.....'-'">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>
                        </div>
                    </form>
                </div> --}}

                <div class="card-body">                    

                    <table id="tbl_list" class="table table-striped table-bordered" cellspacing="0" width="100%">

                    <thead class="btn-dark">

                        <tr>

                            <th>No</th>

                            <th>Nama Fasilitas</th>

                            <th>Keterangan</th>

                            <th>Gambar Fasilitas</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>  

                        

                        @foreach($hotel as $i =>$row)

                        <tr>

                            <td>{{ ++$i }}</td>

                            <td>{{$row->nama_fasilitas}}</td>

                            <td>{{$row->keterangan}}</td>

                            <td>
                            <img src="{{asset('fotohotel/'.$row->gambar)}}" alt="" style="width:150px; height:90px;">
                            </td>

                            <td><form action="{{route('hotel.destroy',$row->id)}}" method="POST">

                                <a href="{{route('hotel.edit',$row->id)}}" class="btn btn-sm btn-dark">Edit</a>
                                {{-- <a href="{{route('hotel.index',$row->id)}}" class="btn btn-sm btn-dark">lihat</a> --}}

                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#{{ 'modal'.$row->id }}">
                                    Lihat
                                  </button>
                                @csrf 

                                @method('DELETE')

                                </form>

                            </td>

                        </tr>
{{-- Untuk melihat detail --}}
                    <div class="modal fade" id="{{ 'modal'.$row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" style="padding: 30px;">
                                    <label class="h5" for="">Nama Fasilitas :</label>
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">{{$row->nama_fasilitas}}</h5>
                                </div>
                                <label class="h5" for="">Keterangan :</label>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row->keterangan}}</h5>
                                    </div>
                                    <label class="h5" for="">Gambar Fasilitas :</label>
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"><img src="{{asset('fotohotel/'.$row->gambar)}}" alt="" style="width:400px; height:250px;"></h5>
                                   </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
{{-- lihat detail --}}
                        @endforeach

                    </tbody>

                </table>
                <div class="modal-footer">   
                    <a href="{{route('hotel.index')}}" class="btn btn-dark" data-dismiss="modal">Back</a>

                    {!! $hotel->appends(Request::all())->links() !!}
                    {{-- {!! $Search->appends(Request::all())->links() !!} --}}
                    
                    </div>

                </div>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection