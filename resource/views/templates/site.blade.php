<!DOCTYPE html>
<html lang="{{ config('app.lang') }}">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:url" content="@yield('url')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ config('app.name') }} | @yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:alt" content="{{ config('app.name') }} | @yield('title')" />
    <meta property="og:image:width" content="@yield('image_width')" /> 
    <meta property="og:image:height" content="@yield('image_height')" /> 
    <meta property="og:site_name" content="{{ config('app.name') }}" /> 
    <meta property="og:locale" content="{{ config('app.lang') }}" />
    {{-- <meta property="og:app_id" content="" /> --}}
    {{-- <meta property="fb:pages" content="" /> --}}
    
    <meta property="article:author" content="{{ config('app.social.facebook') }}" /> 
    <meta property="article:publisher" content="{{ config('app.social.facebook') }}" /> 
    <meta property="twitter:card" content="summary_large_image" /> 
    <meta property="twitter:domain" content="{{ config('app.domain') }}" /> 
    <meta property="twitter:title" content="{{ config('app.name') }} | @yield('title')" /> 
    <meta property="twitter:description" content="@yield('description')" /> 
    <meta property="twitter:image" content="@yield('image')" /> 
    <meta property="twitter:url" content="@yield('url')" />
    <meta name="twitter:card" content="summary" />
    {{-- <meta name="twitter:site" content="@news" /> --}}
    {{-- <meta name="twitter:creator" content="@news" /> --}}

    <!-- Title -->
    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ public_path('assets/img/site/core-img/favicon.ico') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ public_path('assets/css/site/style.css') }}">
    @yield('styles')
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
                        <a href="{{ route('site') }}" class="nav-brand" title="{{ config('app.name') }}"><img src="{{ public_path('assets/img/site/core-img/logo.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}"></a>

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
                            <div class="classynav mr-4">
                                <ul>
                                    <li><a href="{{ route('site') }}" title="Página Inicial">Início</a></li>
                                    <li><a href="{{ route('site.notices') }}" title="Notícias Atuais">Notícias Atuais</a></li>

                                    @for($i = 0; $i < 4; $i++)
                                    <li><a href="{{ route('site.categories.show', ['slug' => $categories[$i]->slug]) }}" title="Notícias da Categoria {{ $categories[$i]->name }}">{{ $categories[$i]->name }}</a></li>
                                    @endfor

                                    <li><a href="javascript:vopid(0)" title="Outras Categórias">Outros</a>
                                        <ul class="dropdown">
                                            @for($i = 0; $i < count($categories); $i++)
                                            <li><a href="{{ route('site.categories.show', ['slug' => $categories[$i]->slug]) }}" title="Notícias da Categoria {{ $categories[$i]->name }}">{{ $categories[$i]->name }}</a></li>
                                            @endfor
                                    </li>
                                </ul>
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
            <a href="{{ route('site') }}"><img src="{{ public_path('assets/img/site/core-img/logo.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}"></a>
        </div>
        <!-- Footer Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content text-center">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <ul>
                                <li><a href="{{ route('site') }}" title="Página Inicial">Início</a></li>
                                <li><a href="{{ route('site.notices') }}" title="Página de Notícias">Notícias</a></li>
                                <li><a href="{{ route('site.sitemap') }}" title="Mapa do Site">SiteMap</a></li>
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

                        <!-- Copywrite Text -->
                        <p class="copywrite-text">{{ config('app.name') }} &copy; {{ date('Y') }} Todos os direitos reservados | Site desenvolvido por <a href="https://ryan-menezes.github.io/" target="_blank" title="Portfólio do Desenvolvedor">Ryan Menezes</a></p>
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
    @yield('scripts')
</body>
</html>