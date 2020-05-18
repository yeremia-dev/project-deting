
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Buy From Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="../assets/css/flaticon.css">
            <link rel="stylesheet" href="../assets/css/price_rangs.css">
            <link rel="stylesheet" href="../assets/css/slicknav.css">
            <link rel="stylesheet" href="../assets/css/animate.min.css">
            <link rel="stylesheet" href="../assets/css/magnific-popup.css">
            <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="../assets/css/themify-icons.css">
            <link rel="stylesheet" href="../assets/css/slick.css">
            <link rel="stylesheet" href="../assets/css/nice-select.css">
            <link rel="stylesheet" href="../assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <!-- <img src="../assets/img/logo/logo.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
            <!-- Header Start -->
           <div class="header-area header-transparrent">
               <div class="headder-top header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-2">
                                
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="menu-wrapper">
                                    <!-- Main-menu -->
                                    <div class="main-menu">
                                        <nav class="d-none d-lg-block">
                                            <ul id="navigation">
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">Informasi Pedagang</a></li>
                                                <li><a href="#">Informasi Kurir</a></li>
                                            </ul>
                                        </nav>
                                    </div>          
                                    <!-- Header-btn -->
                                    <div class="header-btn d-none f-right d-lg-block">
                                        @if (Route::has('login'))
                                            @auth
                                                <a href="{{ url('/home') }}">Home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="btn head-btn1">Login</a>
    
                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="btn head-btn2">Register</a>
                                                @endif
                                            @endauth
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
            <!-- Header End -->
        </header>
        <main>
    
            <!-- slider Area Start-->
            <div class="slider-area ">
                <!-- Mobile Menu -->
                <div class="slider-active">
                    <div class="single-slider slider-height d-flex align-items-center" data-background="../assets/img/hero/h1_hero.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-9 col-md-10">
                                    <div class="hero__caption">
                                        <h1>Temukan Kontak Pedagang atau Kurir</h1>
                                    </div>
                                </div>
                            </div>
                            <!-- Search Box -->
                            <div class="row">
                                <div class="col-xl-8">
                                    <!-- form -->
                                    <form action="#" class="search-box">
                                        <div class="select-form">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">Pedagang</option>
                                                    <option value="">Kurir</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-form">
                                            <input type="text" placeholder="Masukkan Lokasi">
                                        </div>
                                        <div class="search-form">
                                            <a href="#">Cari</a>
                                        </div>	
                                    </form>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider Area End-->
            <!-- Our Services Start -->
            <div class="our-services section-pad-t30">
                <div class="container">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center">
                                <h2>Paling Sering Dicari</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-contnet-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-tour"></span>
                                </div>
                                <div class="services-cap">
                                   <h5><a href="#">Penjual Sembako</a></h5>
                                    <span>(653)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-tour"></span>
                                </div>
                                <div class="services-cap">
                                   <h5><a href="#">Penjual Sayur dan Buah</a></h5>
                                    <span>(658)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-tour"></span>
                                </div>
                                <div class="services-cap">
                                   <h5><a href="#">Penjual Ikan dan Daging</a></h5>
                                    <span>(658)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-tour"></span>
                                </div>
                                <div class="services-cap">
                                   <h5><a href="job_listing.html">Penjual Makanan Siap Saji</a></h5>
                                    <span>(658)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-tour"></span>
                                </div>
                                <div class="services-cap">
                                   <h5><a href="job_listing.html">Kurir Kendaraan Roda Dua</a></h5>
                                    <span>(658)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-tour"></span>
                                </div>
                                <div class="services-cap">
                                   <h5><a href="#">Kurir Kendaraan Roda Tiga</a></h5>
                                    <span>(658)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                    <span class="flaticon-tour"></span>
                                </div>
                                <div class="services-cap">
                                   <h5><a href="#">Kurir Kendaraan Roda Empat</a></h5>
                                    <span>(658)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- More Btn -->
                    <!-- Section Button -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="browse-btn2 text-center mt-50">
                                <a href="job_listing.html" class="border-btn2">Temukan Lebih Banyak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Services End -->
            
        </main>
    <footer>
        <!-- Footer Start-->
        
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <!-- <a href="#"><i class="fab fa-behance"></i></a> -->
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="../assets/js/wow.min.js"></script>
		<script src="../assets/js/animated.headline.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
		<script src="../assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="../assets/js/contact.js"></script>
        <script src="../assets/js/jquery.form.js"></script>
        <script src="../assets/js/jquery.validate.min.js"></script>
        <script src="../assets/js/mail-script.js"></script>
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        
    </body>
</html>