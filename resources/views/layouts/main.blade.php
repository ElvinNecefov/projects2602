<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="rgb(58,109,128);"/>
<title>digiflex | Online Movie Streaming</title>
<meta name="author" content="Themezinho">
<meta name="description" content="For all kind of video streaming website">
<meta name="keywords" content="digiflex, video, movie, show, tv, watch, online, streaming, stream, ads, trailer, imdb, dram, action, hollywood, cinema, rate">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="digiflex | Online Movie Streaming">
<meta property="og:image" content="http://www.themezinho.net/digiflex/preview.png">
<meta property="og:site_name" content="digiflex">
<meta property="og:title" content="digiflex">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.themezinho.net/digiflex">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@digiflex">
<meta name="twitter:creator" content="@digiflex">
<meta name="twitter:title" content="digiflex">
<meta name="twitter:description" content="digiflex | Online Movie Streaming">
<meta name="twitter:image" content="http://www.themezinho.net/digiflex/preview.png">

<!-- FAVICON FILES -->
<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <nav class="mobile-menu">
       <div class="inner">
          <div class="mobile-search">
             <!-- <h6>Type movie or tv show name to find it</h6> -->
             <form>
                <input type="search" placeholder="Search here">
                <input type="submit" value="FIND">
             </form>
          </div>
          <!-- end mobile-search -->
          <!-- <a href="account.html" class="button-account"><i class="lni lni-user"></i> ACCOUNT </a> -->
          <!-- end button-account --> 
          <div class="site-menu">
             <ul>
                <li><a href="index.html">Əsas səhifə</a></li>
                <li><a href="movies.html">Haqqımızda</a></li>
                <li><a href="tv-shows.html">Əlaqə</a></li>
             </ul>
          </div>
          <!-- end site-menu -->
       </div>
       <!-- end inner -->
    </nav>
    <!-- end mobile-menu -->
    <nav class="navbar">
       <div class="logo"> 
         <a href="{{ route('site.index') }}"> 
            <img src="{{ asset('logo.png') }}" alt="Image"> 
            <img class="ml-5" src="{{ asset('azerbaijan.jpeg') }}" alt="Image"> 
         </a> 
   </div>
       <!-- end logo -->
       <div class="site-menu">
          <ul>
             <li><a href="{{ route('site.index') }}">Əsas səhifə</a></li>
             <li><a href="{{ route('site.about') }}">Haqqımızda</a></li>
             <li><a href="{{ route('site.contacts') }}">Əlaqə</a></li>
            
          </ul>

        
          
       </div>
       <!-- end site-menu -->
      
       
       
       
       <div class="hamburger-menu">
          <button class="hamburger">
             <svg width="45" height="45" viewBox="0 0 100 100">
                <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                <path class="line line2" d="M 20,50 H 80" />
                <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
             </svg>
          </button>
       </div>
       <!-- end hamburger-menu --> 
    </nav>
    <!-- end navbar -->
    
    <section class="search-box">
       <div class="container">
          <h6>Type movie or tv show name to find it</h6>
          <form>
             <input type="search" placeholder="Search here">
             <input type="submit" value="FIND">
          </form>
          <ul>
             <li><a href="#">Pulp Function</a></li>
             <li><a href="#">Henry Porter</a></li>
             <li><a href="#">The Racer</a></li>
          </ul>
       </div>
       <!-- end container --> 
    </section>

    <link href="https://vjs.zencdn.net/7.2.3/video-js.css" rel="stylesheet">

    <header class="slider">
      <video id='hls-example'  class="video-js vjs-default-skin" autoplay muted loop id="myVideo">
         <source src="trailer/output.m3u8" type="application/x-mpegURL">
      </video>

      <!-- JS code -->
      <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
      <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.14.1/videojs-contrib-hls.js"></script>
      <script src="https://vjs.zencdn.net/7.2.3/video.js"></script>

      <script>
      var player = videojs('hls-example');
      player.play();
      </script>

      <style>
         .hls-example-dimensions {
            position: fixed;
            right: 0;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            min-width: 100%;
            min-height: 100%;
         }

         .hls-example-dimensions video {
            object-fit: cover;
         }
      </style>

       <div class="main-slider">
          <div class="swiper-wrapper">
             <div class="swiper-slide">
                <div class="slide-inner" data-background="#">
                   <div class="container" data-swiper-parallax="200">
                      <h2 class="name">Proyekt 2602</h2>
                      <p class="description">
                        Azərbaycan kinosunun yeni səhifəsi buradan başlayır!
                        <br>
                        <strong style="color: #E8C061;">XOCALI SOYQIRIMINI DÜNYAYA TANIDAQ!</strong>
                      </p>
                      <a href="#" class="play-btn">DƏSTƏK OL</a>
                   </div>
                   <!-- end container --> 
                </div>
                <!-- end slide-inner --> 
             </div>
             <!-- end swiper-slide -->
          </div>
          <!-- end swiper-wrapper -->
          <div class="swiper-pagination"></div>
          <!-- end swiper-pagination --> 
       </div>
       <!-- end main-slider --> 
    </header>
    <!-- end slider -->
    <main>
       
        @yield('content')

       <!-- end content-section -->
       <footer class="footer">
          <div class="container">
             <div class="row">
                <div class="col-lg-4">
                   <h5 class="call-us">Suallarınız var? <strong>0850-380-6444</strong></h5>
                   <p> 
                    İllər sonra Azərbaycan kinosunu yeni səviyyəyə qaldırmaq, xalqımızın mədəniyyətini, Qarabağ haqqında həqiqətləri dünyaya daha müasir və təsirli  şəkildə çatdırmaq imkanı
                   </p>
                   <div class="language">
                      <i class="lni lni-world"></i>
                      <select>
                         <option>Azərbaycan dili</option>
                         <option>İngilis dili</option>
                      </select>
                   </div>
                   <!-- end language --> 
                </div>
                <div class="col-lg-2 col-md-4"></div>
                <!-- end col-4 -->
                <div class="col-lg-2 col-md-4">
                   <h6 class="widget-title">PROYEKT 2604</h6>
                   <ul class="footer-menu">
                    <li><a href="{{ route('site.index') }}">Əsas səhifə</a></li>
                      <li><a href="{{ route('site.about') }}">Haqqımızda</a></li>
                      <li><a href="{{ route('site.about') }}">Əlaqə</a></li>
                   </ul>
                </div>

                <div class="col-lg-4">
                    <h6 class="widget-title">BİZİMLƏ ƏLAQƏ</h6>
                    <ul class="footer-menu">
                        <li>Telefon: +99 55 613 26 02</li>
                        <li>E-poçt: proyekt2602@gmail.com</li>
                        <li></li>
                        <li></li>
                    </ul>
                    <p class="font-small">    
                        <small class="text-muted">
                           VÖEN 1502208121
                           <br>
                           Hüquqi ünvanı: AZ1069, Bakı Şəhəri, Nərimanov Rayonu, Mustafa Kamal Atatürk, ev31, mənzil 48
                        </small>
                    </p>
                 </div>
                <!-- end col-4 --> 
             </div>
             <!-- end row --> 
          </div>
          <!-- end container -->
          <div class="bottom-bar">
             <div class="container"> <span>© 2022 Proyekt 2602 | Azərbaycan kinosunun yeni səhifəsi</span> </div>
             <!-- end container --> 
          </div>
          <!-- end bottom-bar --> 
       </footer>
       <!-- end footer --> 
    </main>
    <!-- JS FILES --> 
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script> 
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script> 
    <script src="{{ asset('assets/js/fancybox.min.js') }}"></script> 
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
 </body>
</html>