@extends('layout.app')

{{-- @include('das.app') --}}

<style>
    .card h1{
        color:blue;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
    }
</style>

@section('content')
<section id="home">
        <div class="row">

                  <div class="owl-carousel owl-theme home-slider">
                       <div class="item item-first">
                            <div class="caption">
                                 {{-- <div class="container">
                                      <div class="col-md-6 col-sm-12">
                                           <h1>Silahkan Pesan</h1>
                                           <h3>Hotel menyediakan AIR Putih yang cukup untuk Tamu .</h3>
                                           <a href="#feature" class="section-btn btn btn-default smoothScroll">Silahkan pesan</a>
                                      </div>
                                 </div> --}}
                            </div>
                       </div>

                       <div class="item item-second">
                            <div class="caption">
                                 {{-- <div class="container">
                                      <div class="col-md-6 col-sm-12">
                                           <h1>Fasilitas Yang Ada di Hotel</h1>
                                           <h3>Dijamin aman dan tidak kecewa dengan fasilitas-fasilitas hotel ini.</h3>
                                           <a href="#courses" class="section-btn btn btn-default smoothScroll">Lihat Fasilitas</a>
                                      </div>
                                 </div> --}}
                            </div>
                       </div>

                       <div class="item item-third">
                            <div class="caption">
                                 {{-- <div class="container">
                                      <div class="col-md-6 col-sm-12">
                                           <h1>Menyediakan layanan Chat</h1>
                                           <h3>Ketika ada yang tidak mengerti cara melakukan sesuatu di hotel,silahkan chat kami..</h3>
                                           <a href="#contact" class="section-btn btn btn-default smoothScroll">Silahkan chat</a>
                                      </div>
                                 </div> --}}
                            </div>
                       </div>
                  </div>
        </div>
   </section>
@endsection
