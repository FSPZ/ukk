@extends('resep.app')

@section('content')

<div class="container">

    
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1><strong>D</strong>ata Fasilitas Yang Tersedia</h1>
        </div>
        <br>
    </div>
</div>
<br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Tipe Kamar</th>
        <th>Nama Fasilitas</th>
    </tr>
    @foreach ($tamfas as $i => $row)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $row->tipe_kamar }}</td>
        <td>{{ $row->nama_fasilitas }}</td>
    </tr>
    @endforeach
</table>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/tamu') }}">Kembali</a>
            </div>

@endsection