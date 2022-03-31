<!DOCTYPE html>
<html lang="en">
<head>

     <title>Tamu Hotel</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
     

     <!-- MAIN CSS -->
     {{-- <link rel="stylesheet" href="css/templatemo-style.css"> --}}

     <link href="{{ asset('css/templatemo-style.css') }}" rel="stylesheet">
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
     <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
     {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
     
    <style>
    
    .collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
.top-right {
    position: absolute;
    right: 10px;
    top: 30px;
}

.title {
    font-size: 94px;
}

.links > a {
    color: red;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 500;
}

.collapsible {
background-color: #454545;
color: white;
cursor: pointer;
padding: 10px;
width: 100px;
border: none;
text-align: center;
outline: none;
font-size: 15px;
margin-left: 650px;
border-radius: 10px;
height: 40px;
}
.active, .collapsible:hover {
/* background-color: #555; */
}

.content {
padding: 0 18px;
max-height: 0;
overflow: hidden;
transition: max-height 0.2s ease-out;
/* background-color: #f1f1f1; */
}

.kiridikit {

/* margin-left : 100px; */
}
</style>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <p class="navbar-brand">Hotel HEBAT</p>
               </div>

               {{-- <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="/" class="smoothScroll">Home</a></li>
                         <li><a href="#" class="smoothScroll">Kamar</a></li>
                         <li><a href="#courses" class="smoothScroll">Fasilitas</a></li>
                         <li><a href=" {{url('resepkmr')}} " class="smoothScroll">Data Cek in</a></li>

                         {{-- <li><a href="#courses" class="smoothScroll">Courses</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li> --}}
                    </ul>
               </div>

          </div>
     </section>



     <main class="py-4">
            @yield('content')
        </main>
    </div>



     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;
            
            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                  content.style.maxHeight = null;
                } else {
                  content.style.maxHeight = content.scrollHeight + "px";
                } 
              });
            }
            </script>

</body>
</html>