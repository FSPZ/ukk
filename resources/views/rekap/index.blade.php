@extends('layout.app')

{{-- @include('das.app') --}}

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">Data Cek In
                    <br>
                    <br>
                    <a href="{{url('/tamu')}}" class="btn btn-dark btn-sm btn-flat pull-right">Kembali ke Tamu</a>
                </div>

                {{-- <div class="col-md-4">
                    <form action="/cekin/search" method="post">
                        @csrf
                        <br>
                        <div class="input-group custom-search-form">
                            <input type="search" name="search" class="form-control" placeholder="Cari Nama Tamu.....'-'">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>
                        </div>
                    </form>

                <form action="/cekin/filter" method="post">
                    @csrf
                    <br>
                        <div class="input-group custom-search-form">
                            <input type="date" name="filter" class="form-control" placeholder="Cari Nama Tamu.....'-'">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </span>
                        </div>
                    </form> --}}
                    {{-- <form action="/search" method="get"><br>
                        <div class="input-group custom-search-form">
                            <input type="date" name="search" class="form-control" placeholder="Cari Nama Tamu.....'-'">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>
                        </div>
                    </form> --}}
                    <form class="d-flex" action="{{ route('cekinsearching') }}" method="POST">
                        @csrf

                        <div class="form-floating">
                            <input required type="text" name="nama_tamu" class="form-control" id="nama_tamu" value=""
                                style="width : 250px">
                            <P for="floatingInputGrid">Search ( Nama Tamu)</P>
                        </div>
                        <button class="btn-sm btn-success" type="submit">Search</button>
                    </form>

                </div>
                {{-- <div class="col-sm">
                </div> --}}
                <div class="col-sm">
                    <form action="{{ route('cekinfilterin') }}" class="d-flex" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input required type="date" name="tgl_checkin" class="form-control" id="tgl_checkin" value=""
                                style="width : 250px">
                            <P for="floatingInputGrid">Filter ( tanggal masuk)</P>
                        </div>
                        <button class="btn-sm btn-success" type="submit">Filter</button>
                    </form>
                </div>

                <div class="card-body">

                    <table id="tbl_list" class="table table-striped table-bordered" cellspacing="0" width="100%">

                    <thead class="btn-primary">

                        <tr>

                            <th>No</th>

                            <th>Nama Tamu</th>

                            <th>Tanggal Cek IN</th>

                            <th>Tanggal Cek Out</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($ckout as $i =>$row)

                        <tr>

                            <td>{{ ++$i }}</td>

                            <td>{{$row->nama_tamu}}</td>

                            <td>{{$row->tgl_in}}</td>

                            <td>{{$row->tgl_out}}</td>



                            <td><form action="{{route('cekin.destroy',$row->id)}}" method="POST">

                                {{-- <a href="{{route('resepkmr.edit',$row->id)}}" class="btn btn-sm btn-primary">Edit</a> --}}
                                {{-- <a href="#" class="btn btn-sm btn-dark">Lihat Konfir</a> --}}

                                {{-- <button type="submit" class="btn btn-sm btn-danger">Cek out</button> --}}
                                {{-- <a href="{{ url('exportlaporan') }}" class="btn btn-sm  btn-success mb-4">Export PDF</a> --}}

                                <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#{{ 'modal'.$row->id }}">
                                    Lihat konfirm
                                  </button>
                                @csrf

                                @method('DELETE')

                                </form>

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
                    {{-- <a href="/resepkmr/{{$row->id}}" class="btn btn-sm  btn-success mb-4">Cetak</a> --}}
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
                    <a href="{{route('cekin.index')}}" class="btn btn-primary" data-dismiss="modal">Back</a>

                    {{-- {!! $cekin->appends(Request::all())->links() !!} --}}
                    {{-- {!! $Search->appends(Request::all())->links() !!} --}}

                    </div>

                </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
