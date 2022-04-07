@extends('layouts.app')

@include('das.app')

@section('content')
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 45</div>
      <img src="images/26.webp" style="width:100%; height:80%">
      <div class="text">Selamat Datang</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="images/ad6.png" style="width:100%; height:80%">
      <div class="text">Melestarikan Alam yang indah,supaya di hotel menghirup udara yang segar</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="images/ad7.jpg" style="width:100%; height:80%">
      <div class="text">WADIDAUUU</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img src="images/ad9.jpg" style="width:100%; height:80%">
      <div class="text">WADIDAUUU</div>
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
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
@endsection
