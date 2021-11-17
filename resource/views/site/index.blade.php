@extends('templates.site')

@section('title', 'Início')

@section('container')
	<!-- ##### Breaking News Area Start ##### -->
    <section class="breaking-news-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                        <div class="title">
                            <h6>Trending</h6>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</a></li>
                                <li><a href="#">Welcome to Colorlib Family.</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breaking News Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/1.jpg') }}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Traffic Problems in Time Square</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/2.jpg') }}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">The best way to spend your holliday</a>
                                </div>
                            </div>
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="500ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/3.jpg') }}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Sport results for the weekend games</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/1.jpg') }}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Traffic Problems in Time Square</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/2.jpg') }}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">The best way to spend your holliday</a>
                                </div>
                            </div>
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="500ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/3.jpg') }}" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <a href="#" class="post-title">Sport results for the weekend games</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Intro News Area Start ##### -->
    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>All the news</h6>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Latest</a>
                                    <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Popular</a>
                                    <a class="nav-item nav-link" id="nav3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">International</a>
                                    <a class="nav-item nav-link" id="nav4" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Local</a>
                                </div>
                            </nav>
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/14.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/15.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/16.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/17.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/18.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/19.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/20.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/21.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav2">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/4.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/5.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/16.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/17.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/18.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/19.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/20.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/21.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav3">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/6.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/7.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/16.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/17.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/18.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/19.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/20.jpg') }}pg" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/21.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav4">
                                <div class="row">
                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/8.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post style-2 mb-5">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/9.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis</a>
                                                <a href="#" class="post-author">By Michael Smith</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/16.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/17.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Nearly a quarter have no emergency savings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/18.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/19.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Top bitcoin exchange says over $30 million stolen</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/20.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single News Area -->
                                    <div class="col-12 col-sm-6">
                                        <div class="single-blog-post d-flex style-4 mb-30">
                                            <!-- Blog Thumbnail -->
                                            <div class="blog-thumbnail">
                                                <a href="#"><img src="{{ public_path('assets/img/site/bg-img/21.jpg') }}" alt=""></a>
                                            </div>

                                            <!-- Blog Content -->
                                            <div class="blog-content">
                                                <span class="post-date">June 20, 2018</span>
                                                <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="single-widget-area newsletter-widget mb-30">
                            <h4>Subscribe to our newsletter</h4>
                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                                <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                            </form>
                            <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                        </div>

                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                            <a href="#">
                                <img src="{{ public_path('assets/img/site/bg-img/add3.jpg') }}" alt="">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Intro News Area End ##### -->

    <!-- ##### Video Area Start ##### -->
    <section class="video-area bg-img bg-overlay bg-fixed" style="background-image: url({{ public_path('assets/img/site/bg-img/10.jpg') }});">
        <div class="container">
            <div class="row">
                <!-- Featured Video Area -->
                <div class="col-12">
                    <div class="featured-video-area d-flex align-items-center justify-content-center">
                        <div class="video-content text-center">
                            <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                            <span class="published-date">June 20, 2018</span>
                            <h3 class="video-title">Traffic Problems in Time Square</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Slideshow -->
        <div class="video-slideshow py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Video Slides -->
                        <div class="video-slides owl-carousel">

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/11.jpg') }}" alt=""></a>
                                    <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <p class="post-title">Elon Musk: Tesla worker admitted to sabotage</p>
                                    <a href="#" class="post-author">By Michael Smith</a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/12.jpg') }}" alt=""></a>
                                    <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <p class="post-title">Rachel Sm ith breaks down while discussing border crisis </p>
                                    <a href="#" class="post-author">By Michael Smith</a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/13.jpg') }}" alt=""></a>
                                    <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <p class="post-title">Dow falls 287 points as trade war fears escalate</p>
                                    <a href="#" class="post-author">By Michael Smith</a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/11.jpg') }}" alt=""></a>
                                    <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <p class="post-title">Elon Musk: Tesla worker admitted to sabotage</p>
                                    <a href="#" class="post-author">By Michael Smith</a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/12.jpg') }}" alt=""></a>
                                    <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <p class="post-title">Rachel Sm ith breaks down while discussing border crisis </p>
                                    <a href="#" class="post-author">By Michael Smith</a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="{{ public_path('assets/img/site/bg-img/13.jpg') }}" alt=""></a>
                                    <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date">June 20, 2018</span>
                                    <p class="post-title">Dow falls 287 points as trade war fears escalate</p>
                                    <a href="#" class="post-author">By Michael Smith</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Video Area End ##### -->

    <!-- ##### Top News Area Start ##### -->
    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="{{ public_path('assets/img/site/bg-img/4.jpg') }}" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="{{ public_path('assets/img/site/bg-img/5.jpg') }}" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis </a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="{{ public_path('assets/img/site/bg-img/6.jpg') }}" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="{{ public_path('assets/img/site/bg-img/7.jpg') }}" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Elon Musk: Tesla worker admitted to sabotage</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="{{ public_path('assets/img/site/bg-img/8.jpg') }}" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Rachel Sm ith breaks down while discussing border crisis </a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="{{ public_path('assets/img/site/bg-img/9.jpg') }}" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date">June 20, 2018</span>
                            <a href="#" class="post-title">Dow falls 287 points as trade war fears escalate</a>
                            <a href="#" class="post-author">By Michael Smith</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="load-more-button text-center">
                        <a href="#" class="btn newsbox-btn">Load More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Top News Area End ##### -->

    <!-- ##### Add Area Start ##### -->
    <div class="big-add-area mb-100">
        <div class="container-fluid">
            <a href="#"><img src="{{ public_path('assets/img/site/bg-img/add2.jpg') }}" alt=""></a>
        </div>
    </div>
    <!-- ##### Add Area End ##### -->
@endsection