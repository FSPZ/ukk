@extends('layouts.app')

@include('das.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">Data Fasilitas Kamar
                    <br>
                    <br>
                    <a href="{{route('fasilitas.create')}}" class="btn btn-success btn-sm btn-flat pull-right"> Tambah</a>

                </div>

                {{-- <div class="col-md-4">
                    <form action="/search" method="get"><br>
                        <div class="input-group custom-search-form">
                            <input type="search" name="search" class="form-control" placeholder="Cari Tipe Kamar yang ada.....'-'">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-success">Search</button>
                            </span>
                        </div>
                    </form>
                </div> --}}

                <div class="card-body">

                    <table id="tbl_list" class="table table-striped table-bordered" cellspacing="0" width="100%">

                    <thead class="btn-success">

                        <tr>

                            <th>No</th>

                            <th>Tipe Kamar</th>

                            <th>Nama Fasilitas</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($fasilitas as $i =>$row)

                        <tr>

                            <td>{{ ++$i }}</td>

                            <td>{{$row->tipe_kamar}}</td>

                            <td>{{$row->nama_fasilitas}}</td>

                            <td><form action="{{ route('fasilitas.destroy',$row->id) }}" method="POST">

                                <a href="{{ route('fasilitas.edit',$row->id) }}" class="btn btn-sm btn-success">Edit</a>
                                {{-- <a href="#" class="btn btn-sm btn-primary">Lihat</a> --}}

                                {{-- <button type="submit" class="btn btn-sm btn-dark">Hapus</button> --}}
                                {{-- <button type="submit" class="btn btn-sm btn-danger">Hapus</button> --}}
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#{{ 'modal'.$row->id }}">
                                    Lihat
                                  </button>
                                @csrf

                                @method('DELETE')

                                </form>

                            </td>


                        </tr>

                        <div class="modal fade" id="{{ 'modal'.$row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <label class="h5" for="">Tipe Kamar :</label>
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">{{$row->tipe_kamar}}</h5>
                                </div>
                                <label class="h5" for="">Nama Fasilitas :</label>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row->nama_fasilitas}}</h5>
                                    </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach

                    </tbody>

                </table>
                <div class="modal-footer">
                    <a href="{{route('fasilitas.index')}}" class="btn btn-success" data-dismiss="modal">Back</a>

                    {!! $fasilitas->appends(Request::all())->links() !!}
                    {{-- {!! $Search->appends(Request::all())->links() !!} --}}

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection
