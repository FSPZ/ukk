@extends('resep.app')

{{-- @include('das.app') --}}

@section('content')

<div class="container">

    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1><strong>D</strong>ata Chek in</h1>
        </div>
        <br>
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('home') }}">kembali ke Home</a>
        </div>
            {{-- <div class="col-md-4">
                <form action="/search" method="get"><br>
                    <div class="input-group custom-search-form">
                        <input type="search" name="search" class="form-control" placeholder="Search Judul Modul.....'-'">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </form>
            </div> --}}
    </div>
</div>
<br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Tamu</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Keluar</th>
        <th>Aksi</th>
    </tr>
    @foreach ($resepkmr as $i => $row)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $row->nama_tamu }}</td>
        <td>{{ $row->tgl_in }}</td>
        <td>{{ $row->tgl_out }}</td>
        <td>
                <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#{{ 'modal'.$row->id }}">
                    Lihat konfirm
                </button>
        </td>
    </tr>

    {{-- Untuk melihat detail --}}
    <div class="modal fade" id="{{ 'modal'.$row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   
   
        <div class="modal-dialog modal-dialog-centered p-3" role="document">
                <div class="modal-content" style="padding: 30px;">
                    <center><label class="h3" for="">Hotel HEBAT <br><SMall>Jalan Gunung Sitoli,Provinsi Sumatera Utara</small> </label></center>
                <div class="modal-header">
                  {{-- <h5 class="modal-title" id="exampleModalLongTitle">{{$row->nama_tamu}}</h5> --}}
                </div>

                <label class="h5" for="">Nama Tamu :</label>
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row->nama_tamu}}</h5>
                   </div>
                <label class="h5" for="">Tanggal Masuk :</label>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row->tgl_in}}</h5>
                    </div>
                    <label class="h5" for="">Tanggal Keluar :</label>
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row->tgl_out}}</h5>
                   </div>
                   <label class="h5" for="">Jumlah Kamar :</label>
                   <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row->jmlh_kmr}}</h5>
                   </div>
                   <label class="h5" for="">Nama Pemesan :</label>
                   <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row->nama_pemesan}}</h5>
                   </div>
                   <label class="h5" for="">No Telepon :</label>
                   <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row->no_telp}}</h5>
                   </div>
                   <label class="h5" for="">Email :</label>
                   <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row->email}}</h5>
                   </div>
                   <label class="h5" for="">Tipe Kamar :</label>
                   <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row->tipe}}</h5>
                   </div>
                <div class="modal-footer">
                    <a href="/resepkmr/{{$row->id}}" class="btn btn-sm  btn-success mb-4">Cetak</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
{{-- lihat detail --}}

    @endforeach
</table>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/tamu') }}">Kembali</a>
            </div>

@endsection