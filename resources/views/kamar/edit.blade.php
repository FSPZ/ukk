@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">Data Kamar</div>

                <div class="card-body">                    

                    <form name="frm_add" id="frm_add" class="form-horizontal" action="{{route('kamar.update',$kamar->id)}}" method="POST" enctype="multipart/form-data"> 

                            @csrf

                            @method('PUT')

                        <div class="modal-body">             

                            <div class="form-group"><label class="col-lg-3 control-label">Tipe Kamar</label>

                                <div class="col-lg-12">

                                    <input type="text" name="tipe_kamar" placeholder="Tipe Kamar" value="{{$kamar->tipe_kamar}}" class="form-control">

                                </div>

                            </div>                              

                            <div class="form-group"><label class="col-lg-3 control-label">Jumlah Kamar</label>

                                <div class="col-lg-12">

                                    <input type="text" name="jumlah_kamar" placeholder="Jumlah Kamar" value="{{$kamar->jumlah_kamar}}" class="form-control">

                                </div>

                            </div>    
      

                        </div>      

                        <div class="modal-footer">      

                            <a href="{{route('kamar.index')}}" class="btn btn-danger" data-dismiss="modal">Back</a>

                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection