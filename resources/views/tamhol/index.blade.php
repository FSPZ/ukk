@extends('resep.app')

@section('content')

<div class="container">

    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1><strong>D</strong>ata Hotel Yang Tersedia</h1>
        </div>
        <br>
    </div>
</div>
<br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Fasilitas</th>
        <th>Keterangan</th>
        <th>Gambar Fasilitas</th>
        <th>Aksi</th>
    </tr>
    @foreach ($tamhol as $i => $row)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $row->nama_fasilitas }}</td>
        <td>{{ $row->keterangan }}</td>
        <td>
            <img src="{{asset('fotohotel/'.$row->gambar)}}" alt="" style="width:150px; height:90px;">                           
        </td>
        <td>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#{{ 'modal'.$row->id }}">
                        Lihat Lebih Besar
                </button>
        </td>
    </tr>
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
                    <h5 class="modal-title" id="exampleModalLongTitle"><img src="{{asset('fotohotel/'.$row->gambar)}}" alt="" style="width:450px; height:300px;"></h5>
                   </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
    @endforeach
</table>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/tamu') }}">Kembali</a>
            </div>

@endsection