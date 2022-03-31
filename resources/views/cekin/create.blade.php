@extends('layouts.app')

{{-- @include('das.app') --}}

@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Pesan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('resepkmr.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('cekin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Tamu:</strong>
                    <input type="text" name="nama_tamu" class="form-control" placeholder="Nama Tamu">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Masuk:</strong>
                    <input type="date" name="tgl_in" class="form-control" placeholder="Tanggal Masuk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Keluar:</strong>
                    <input type="date" name="tgl_out" class="form-control" placeholder="Tanggal Keluar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    
    </form>
    
    
    
    
    @endsection