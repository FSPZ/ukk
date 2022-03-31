@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-12">

        <div class="card">

            <div class="card-header">Data Fasilitas</div>

            <div class="card-body">                    

                <form name="frm_add" id="frm_add" class="form-horizontal" action="{{route('fasilitas.update',$fasilita->id)}}" method="POST" enctype="multipart/form-data"> 

                        @csrf

                        @method('PUT')

                    <div class="modal-body">             

                        <div class="form-group"><label class="col-lg-3 control-label">Tipe Kamar</label>

                            <div class="col-lg-12">

                                <input type="text" name="tipe_kamar" placeholder="Tipe Kamar" value="{{$fasilita->tipe_kamar}}" class="form-control">

                            </div>

                        </div>                              

                        <div class="form-group"><label class="col-lg-3 control-label">Nama Fasilitas</label>

                            <div class="col-lg-12">

                                <input type="text" name="nama_fasilitas" placeholder="Nama Fasilitas" value="{{$fasilita->nama_fasilitas}}" class="form-control">

                            </div>

                        </div>    
  

                    </div>      

                    <div class="modal-footer">      

                        <a href="{{route('fasilitas.index')}}" class="btn btn-danger" data-dismiss="modal">Back</a>

                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</div>
@endsection