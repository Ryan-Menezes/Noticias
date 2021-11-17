<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Newsbox - Modern Magazine &amp; Newspaper HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ public_path('assets/img/site/core-img/favicon.ico') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ public_path('assets/css/site/style.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newsboxNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="{{ public_path('assets/img/site/core-img/logo.png') }}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">International</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Europe</li>
                                                <li><a href="#">United Kingdom</a></li>
                                                <li><a href="#">Germany</a></li>
                                                <li><a href="#">Latvia</a></li>
                                                <li><a href="#">Poland</a></li>
                                                <li><a href="#">Italy</a></li>
                                                <li><a href="#">France</a></li>
                                                <li><a href="#">Crotia</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Africa</li>
                                                <li><a href="#">Algeria</a></li>
                                                <li><a href="#">Angola</a></li>
                                                <li><a href="#">Benin</a></li>
                                                <li><a href="#">Botswana</a></li>
                                                <li><a href="#">Burkina Faso</a></li>
                                                <li><a href="#">Burundi</a></li>
                                                <li><a href="#">Cameroon</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Asia</li>
                                                <li><a href="#">Bangladesh</a></li>
                                                <li><a href="#">Chaina</a></li>
                                                <li><a href="#">India</a></li>
                                                <li><a href="#">Afganistan</a></li>
                                                <li><a href="#">Sri Lanka</a></li>
                                                <li><a href="#">Nepal</a></li>
                                                <li><a href="#">Bhutan</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">USA &amp; Canada</li>
                                                <li><a href="#">California</a></li>
                                                <li><a href="#">Florida</a></li>
                                                <li><a href="#">Alabama</a></li>
                                                <li><a href="#">New Yorks</a></li>
                                                <li><a href="#">Texas</a></li>
                                                <li><a href="#">Lowa</a></li>
                                                <li><a href="#">Montana</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">Local News</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagory.html">Catagory</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sport</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Archery</a></li>
                                            <li><a href="#">Badminton</a></li>
                                            <li><a href="#">Baseball</a></li>
                                            <li><a href="#">Boxing</a></li>
                                            <li><a href="#">Climbing</a></li>
                                            <li><a href="#">Cricket</a></li>
                                            <li><a href="#">Football</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Lifestyle</a></li>
                                </ul>

                                <!-- Header Add Area -->
                                <div class="header-add-area">
                                    <a href="#">
                                       <img src="{{ public_path('assets/img/site/bg-img/add.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('container')

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Footer Logo -->
        <div class="footer-logo mb-100">
            <a href="index.html"><img src="{{ public_path('assets/img/site/core-img/logo.png') }}" alt=""></a>
        </div>
        <!-- Footer Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content text-center">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Closed Captioning</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>

                        <p class="mb-15">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis. Vestibulum venenatis iaculis diam vitae lobortis. Donec tincidunt viverra elit, sed consectetur est pr etium ac. Mauris nec mauris tellus. </p>

                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#">{{ date('Y') }} All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <script type="text/javascript" src="{{ public_path('assets/js/libs/jquery/jquery-2.2.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ public_path('assets/js/libs/jquery/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ public_path('assets/js/libs/bootstrap/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ public_path('assets/js/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ public_path('assets/js/libs/plugins/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ public_path('assets/js/site/active.js') }}"></script>
</body>
</html>