@extends('layouts.app')

@include('das.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">Data Kamar
                    <br>
                    <br>
                    <a href="{{route('kamar.create')}}" class="btn btn-primary btn-sm btn-flat pull-right"> Tambah</a>

                </div>

                <div class="col-md-4">
                    <form action="/search" method="get"><br>
                        <div class="input-group custom-search-form">
                            <input type="search" name="search" class="form-control" placeholder="Cari Tipe Kamar yang ada.....'-'">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>
                        </div>
                    </form>
                </div>

                <div class="card-body">                    

                    <table id="tbl_list" class="table table-striped table-bordered" cellspacing="0" width="100%">

                    <thead class="btn-primary">

                        <tr>

                            <th>No</th>

                            <th>Tipe Kamar</th>

                            <th>Jumlah Kamar</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>  

                        @foreach($kamar as $i =>$row)

                        <tr>

                            <td>{{ ++$i }}</td>

                            <td>{{$row->tipe_kamar}}</td>

                            <td>{{$row->jumlah_kamar}}</td>

                            <td><form action="{{route('kamar.destroy',$row->id)}}" method="POST">

                                <a href="{{route('kamar.edit',$row->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                {{-- <a href="#" class="btn btn-sm btn-dark">Lihat</a> --}}

                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#{{ 'modal'.$row->id }}">
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
                                    <label class="h5" for="">Jumlah Kamar :</label>
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$row->jumlah_kamar}}</h5>
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
                    <a href="{{route('kamar.index')}}" class="btn btn-primary" data-dismiss="modal">Back</a>

                    {!! $kamar->appends(Request::all())->links() !!}
                    {{-- {!! $Search->appends(Request::all())->links() !!} --}}
                    
                    </div>

                </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection