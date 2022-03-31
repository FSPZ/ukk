@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">Data Fasilitas Hotel</div>

                <div class="card-body">                    

                    <form name="frm_add" id="frm_add" class="form-horizontal" action="{{route('hotel.update',$hotel->id)}}" method="POST" enctype="multipart/form-data"> 

                            @csrf

                            @method('PUT')

                        <div class="modal-body">             

                                <div class="form-group"><label class="col-lg-3 control-label">Nama Fasilitas</label>

                                    <div class="col-lg-12">
    
                                        <input type="text" name="nama_fasilitas" placeholder="Nama Fasilitas" value="{{$hotel->nama_fasilitas}}" class="form-control">
    
                                    </div>
    
                                </div>         
                                
                                <div class="form-group"><label class="col-lg-3 control-label">Keterangan</label>

                                    <div class="col-lg-12">
    
                                        <input type="text" name="keterangan" placeholder="Keterangan" value="{{$hotel->keterangan}}" class="form-control">
    
                                    </div>
    
                                </div>         

                            {{-- <div class="form-group"><label class="col-lg-3 control-label">Gambar Fasilitas</label>

                                <div class="col-lg-12">

                                    <input type="file" name="gambar" placeholder="Gambar Fasilitas" value="{{$hotel->gambar}}" class="form-control">

                                </div> --}}

                            </div>    
      

                        </div>      

                        <div class="modal-footer">      

                            <a href="{{route('hotel.index')}}" class="btn btn-danger" data-dismiss="modal">Back</a>

                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection