
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Halaman Home</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
                    <a href="#" class="navbar-brand">Hotel HEBAT</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    {{-- <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="/" class="smoothScroll">Home</a></li>
                         <li><a href="#" class="smoothScroll">Kamar</a></li>
                         <li><a href="#" class="smoothScroll">Fasilitas</a></li>
                         {{-- <li><a href="#courses" class="smoothScroll">Courses</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li> --}}
                    {{-- </ul> --}}
                    {{-- <div class="navbar">
                        <div class="flex-center position-ref full-height">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                    <a href="{{ url('/tamu') }}">Tamu</a>
                                        <a href="{{ route('login') }}">Login</a>
                
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div> --}}
                    <ul class="nav navbar-nav navbar-right">
                        <ul>
                            @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                  <a href="{{ url('/home') }}">Home</a>
                                @else
                              <a href="{{ url('/tamu') }}">Tamu</a>
                                  <a href="{{ route('login') }}">Login</a>
            
                                    @if (Route::has('register'))
                                      <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Selamat Datang Di Hotel Hebat</h1>
                                             <h3>Hotel yang aman dan terjamin....... .</h3>
                                             {{-- <a href="#feature" class="section-btn btn btn-default smoothScroll">Silahkan pesan</a> --}}
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Selamat Datang Di Hotel Hebat</h1>
                                             <h3>Hotel yang aman dan terjamin....... .</h3>
                                             {{-- <a href="#feature" class="section-btn btn btn-default smoothScroll">Silahkan pesan</a> --}}
                                            </div>
                                   </div> --}}
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                    <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                            <h1>Selamat Datang Di Hotel Hebat</h1>
                                            <h3>Hotel yang aman dan terjamin....... .</h3>
                                            {{-- <a href="#feature" class="section-btn btn btn-default smoothScroll">Silahkan pesan</a> --}}
                                       </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>


     {{-- <!-- FEATURE -->
     <section id="feature">
        <div class="container">
            
            
            <div class="row justify-content-center">
                
                <div class="col-md-12">
                    
                    <div class="card">
                        
                        <div class="card-header">
                            
                        </div>
                        
                        <div class="card-body">                    
                            <div class="kiridikit">

                                    <form name="frm_add" id="frm_add" class="form-horizontal" action="{{route('cekin.store')}}" method="POST" enctype="multipart/form-data"> 
                                
                                        @csrf
                                        
                                        <div class="modal-body">             
                
                                            
                                            <div class="form-group"><label class="col-lg-3 control-label">Tanggal in :</label>
                                                
                                                <div class="col-lg-5">
                                                    
                                                    <input type="date" name="tgl_in" placeholder="Tanggal In" class="form-control">
                                                    
                                                </div>
                                                
                                            </div>    
                                            
                                            <div class="form-group"><label class="col-lg-3 control-label">Tanggal Out :</label>
                                                
                                                <div class="col-lg-5">
                                                    
                                                    <input type="date" name="tgl_out" placeholder="Tanggal Out" class="form-control">
                                                    
                                                </div>
                                                
                                            </div>                              
                                            
                                            
                                            <div class="form-group"><label class="col-lg-3 control-label"><b>Jumlah Kamar :</b></label>
                
                                                <div class="col-lg-5">
                
                                                    <input type="text" name="jumlah_kamar" placeholder="Jumlah Kamar" class="form-control">
                
                                                </div>
                
                                            </div> 
                                            
                                            
                                        </div>      
                
           
                
    
                                <button class="collapsible">Pesan</button>
                                <div class="content">
                                    
                                            
                                            <div class="modal-body">             
                    
                                                <div class="form-group"><label class="col-lg-3 control-label"><b>Nama Pemesan :</b></label>
                    
                                                    <div class="col-lg-5">
                    
                                                        <input required type="text" name="nama_pemesan" placeholder="Nama Pemesan" class="form-control">
                    
                                                    </div>
                    
                                                </div> 
                                                <div class="form-group"><label class="col-lg-3 control-label"><b>Email :</b></label>
                    
                                                    <div class="col-lg-5">
                    
                                                        <input  type="text" name="email" placeholder="Email" class="form-control">
                    
                                                    </div>
                    
                                                </div> 
                                                
                                                <div class="form-group"><label class="col-lg-3 control-label"><b>No Handphone :</b></label>
                    
                                                    <div class="col-lg-5">
                    
                                                        <input type="text" name="no_telp" placeholder="No Handphone" class="form-control">
                    
                                                    </div>
                    
                                                </div> 
                                                <div class="form-group"><label class="col-lg-3 control-label"><b>Nama Tamu :</b></label>
                    
                                                    <div class="col-lg-5">
                    
                                                        <input type="text" name="nama_tamu" placeholder="Nama Tamu" class="form-control">
                    
                                                    </div>
                    
                                                </div> 
                    
                                            <div class="modal-footer">      
                    
                                                <a href="{{route('cekin.index')}}" class="btn btn-danger" data-dismiss="modal">Back</a>
                    
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                    
                                            </div>
                    
                                        </form>
                            </div>
                              
                            </div>
                        
                        </div>
        
                    </div>
        
                </div>
        
            </div>
     </section> --}}


     {{-- <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2>Start your journey to a better life with online practical courses</h2>

                              <figure>
                                   <span><i class="fa fa-users"></i></span>
                                   <figcaption>
                                        <h3>Professional Trainers</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-certificate"></i></span>
                                   <figcaption>
                                        <h3>International Certifications</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-bar-chart-o"></i></span>
                                   <figcaption>
                                        <h3>Free for 3 months</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="#" method="post">
                                   <h2>Signup today</h2>
                                   <input type="text" name="full name" class="form-control" placeholder="Full name" required="">

                                   <input type="email" name="email" class="form-control" placeholder="Your email address" required="">

                                   <input type="password" name="password" class="form-control" placeholder="Your password" required="">

                                   <button class="submit-btn form-control" id="form-submit">Get started</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section> --}}


     <!-- TEAM -->
     {{-- <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Halaman Dari Jauh <small>Hotel Hebat</small></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/hal1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                <h3>Dari sisi depan</h3>
                                <span>By:Fotografer@Nias</span>
                           </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/hal2.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Sisi samping kiri</h3>
                                   <span>By:Fotografer@Nias</span>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/hal3.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Dari sisi belakang</h3>
                                   <span>By:Fotografer@Nias</span>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/hal4.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Dari sisi laut</h3>
                                   <span>By:Fotografer@Nias</span>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
 --}}

     <!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Tentang Kami</h2>
                         </div>

                            <p>
                                Pulau Nias menawarkan pesona wisata yang menarik banyak pelancong domestik maupun mancanegara. Pemerintah Daerah Nias pun merencanakan sejuta wisatawan datang dari dalam dan luar negeri. Oleh karenanya, sudah selayaknya jika Pulau Nias menyediakan akomodasi yang nyaman, aman, dan mudah diakses oleh para wisatawan baik bujet hotel maupun hotel mewah. Ini bertujuan untuk memenuhi kebutuhan akomodasi para wisatawan baik untuk jalan-jalan maupun urusan bisnis.
                                Bagi para wisatawan terutama backpacker yang ingin booking hotel murah di Nias dan mencari hotel murah di Nias dengan harga terjangkau, tersedia hotel bujet dengan tarif murah. Anda bisa memperoleh kamar hotel di Nias ini antara lain di Hotel Mega Nasional dengan harga mulai dari Rp200.000*.
                                Meskipun harga murah sesuai kantong backpacker, tetapi lokasi hotel pun cukup strategis dekat dengan bandara. Hotel ini tepatnya berlokasi di Jalan Raya Pelud Binaka KM.8 Desa Laraga, Luaha Laraga Gunungsitoli Selatan, Nias. Tarif kamar sudah termasuk kamar ber-AC dengan sarapan dan memiliki akses WiFi di kamar. Sementara fasilitas yang ditawarkan pun cukup lengkap mulai dari ruang meeting, kafe, hingga kolam renang outdoor.
                                Layaknya kota besar umumnya, wisatawan bisa mendapati hotel murah di Nias dengan harga menengah. Anda bisa mendapatkan hotel di Nias yang cocok untuk berkunjung bersama keluarga, tanpa harus mengeluarkan biaya mahal untuk penginapan. Hal ini disebabkan hotel kelas menengah yang menawarkan lokasi mudah diakses dan fasilitas memadai dengan harga terjangkau.
                                Hotel kelas menengah biasanya menawarkan kamar yang lebih luas, bersih, dan nyaman dengan fasilitas lengkap. Meliputi layanan kamar, restoran, kafe, ruang meeting, dan banquet hall. Tersedia juga fasilitas hiburan seperti game corner, karaoke, pijat, rental sepeda, hingga kolam renang outdoor.
                                Anda bisa booking Hotel di Nias untuk kelas menengah antara lain di Soliga Hotel yang berlokasi di Jalan Pangeran Diponegoro No. 432, Miga, Gunungsitoli, Kota Gunungsitoli. Tarif kamar yang dipatok mulai Rp400 ribuan* per malam. Dengan harga ini Anda sudah bisa mendapatkan kamar ber-AC VIP yang luas, sudah termasuk sarapan dan akses WiFi gratis di kamar.
                            </p>
               </div>
          </div>
     </section>


     {{-- <!-- TESTIMONIAL -->
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Student Reviews <small>from around the world</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Jackson</h4>
                                             <span>Shopify Developer</span>
                                        </div>
                                        <p>You really do help young creative minds to get quality education and professional job search assistance. I’d recommend it to everyone!</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Camila</h4>
                                             <span>Marketing Manager</span>
                                        </div>
                                        <p>Trying something new is exciting! Thanks for the amazing law course and the great teacher who was able to make it interesting.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image3.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Barbie</h4>
                                             <span>Art Director</span>
                                        </div>
                                        <p>Donec erat libero, blandit vitae arcu eu, lacinia placerat justo. Sed sollicitudin quis felis vitae hendrerit.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image4.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Andrio</h4>
                                             <span>Web Developer</span>
                                        </div>
                                        <p>Nam eget mi eu ante faucibus viverra nec sed magna. Vivamus viverra sapien ex, elementum varius ex sagittis vel.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section>  --}}


     <!-- CONTACT -->
     {{-- <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Silahkan Chat Admin<small>Kami Selalu Melayani Anda</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="name" required="">
                    
                                   <input type="email" class="form-control" placeholder="Masukkan email" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Tulis pesan apa yang ingin kamu tanya" name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Kirim Pesan">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/slider-image3.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>       
 --}}

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2022 Company Name</p>
                                   
                                   <p>Design: TemplateMo</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+62 878 6336 7302</p>
                                   <p><a href="mailto:youremail.co">franszeb448@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Investor</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Masukkan email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Kirim">
                                        </form>
                                        <span><sup>**</sup> Please note - we do not spam your email. (Harap dicatat - kami tidak mengirim spam ke email Anda.)</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


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