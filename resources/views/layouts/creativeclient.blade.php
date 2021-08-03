<!DOCTYPE html>
<html lang="zxx">

<head>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<meta charset="UTF-8">
    <meta name="description" content="Phozogy Template">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classic Studio | Home</title>
    <!-- Google Font -->
    <link href="{{asset ('https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap')}}" rel="stylesheet">
    <link href="{{asset ('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap')}}" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="ss2/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="ss2/templatemo-style.css">
    <link rel="stylesheet" href="css1/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css1/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css1/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css1/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css1/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css1/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css1/style.css" type="text/css">



</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" ">
                <div class="logo" >
                    <a href="#">
                        <h4>Classic Studio</h4>
                    </a>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('service')}}">Services</a></li>
                        <li><a href="./pricing.html">Pricing</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        @if(auth::user())
                            <li><a href="{{route('admin')}}">Dashboard</a></li>
                        @else
                            <li><a href="{{route('login')}}">Login</a></li>
                        @endif
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<div class="content-wrapper">
    @yield('content')
</div>
<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="fs-about">
                    <div class="fa-logo">
                        <a href="#">
                            <img id="logo" src="images/creative/logocs.png" alt="">
                        </a>
                    </div>
                    <p>Get in touch with us</p>
                    <div class="fa-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="fs-widget">
                    <h5>Instagram</h5>
                    <div class="fw-instagram">
                        <img src="img/instagram/insta-1.jpg" alt="">
                        <img src="img/instagram/insta-2.jpg" alt="">
                        <img src="img/instagram/insta-3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="fs-widget">
                    <h5>Quick links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="fs-widget">
                    <h5>Subscribe</h5>
                    <p>Imolor amet consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <div class="fw-subscribe">
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright-text">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Developed By <a href="mailto:henosteklay@gmail.com" target="_blank">henonymous
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
<!-- Js Plugins -->
<script src="js1/jquery-3.3.1.min.js"></script>
<script src="js1/bootstrap.min.js"></script>
<script src="js1/jquery.magnific-popup.min.js"></script>
<script src="js1/isotope.pkgd.min.js"></script>
<script src="js1/masonry.pkgd.min.js"></script>
<script src="js1/jquery.slicknav.js"></script>
<script src="js1/owl.carousel.min.js"></script>
<script src="js1/main.js"></script>
<script src="javascript/plugins.js"></script>

</body>

</html>
