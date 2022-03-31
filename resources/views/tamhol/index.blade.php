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
    </tr>
    @foreach ($tamhol as $i => $row)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $row->nama_fasilitas }}</td>
        <td>{{ $row->keterangan }}</td>
        <td>
            <img src="{{asset('fotohotel/'.$row->gambar)}}" alt="" style="width:150px; height:90px;">                           
        </td>

    </tr>
    @endforeach
</table>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/tamu') }}">Kembali</a>
            </div>

@endsection