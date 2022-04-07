@extends('layout.app')

{{-- @include('das.app') --}}

<style>
    .card h1{
        color:blue;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
    }
</style>

@section('content')
<div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/26.webp" style="width:100%; height:80%">
          <div class="text">Selamat Datang</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/25.jpg" style="width:100%; height:80%">
          <div class="text">Melestarikan Alam yang indah,supaya di hotel menghirup udara yang segar</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/ad5.jpg" style="width:100%; height:80%">
          <div class="text">WADIDAUUU</div>
        </div>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
<br>
<br>
<center><h2>Semangat Cek Tamu......... </h2></center>
@endsection
