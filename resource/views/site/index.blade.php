@extends('templates.site')

@section('title', 'Início')
@section('keywords', config('app.keywords'))
@section('description', config('app.description'))

@section('container')
<!-- ##### Breaking News Area Start ##### -->
<section class="breaking-news-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Breaking News Widget -->
                <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                    <div class="title">
                        <h6>Notícias Atuais</h6>
                    </div>
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            @foreach($notices as $notice)
                            <li><a href="{{ route('site.notices.show', ['slug' => $notice->slug]) }}" title="{{ $notice->title }}">{{ $notice->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breaking News Area End ##### -->

<!-- ##### Intro News Area Start ##### -->
<section class="intro-news-area section-padding-20-0 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Intro News Tabs Area -->
            <div class="col-12">
                <div class="row">
                    @for($i = 0; $i < 2; $i++)
                    <!-- Single Blog Post Area -->
                    <div class="col-12 col-md-6 mb-5">
                        <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms" data-duration="1000ms">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail bg-overlay">
                                <a href="{{ route('site.notices.show', ['slug' => $notices[$i]->slug]) }}" title="{{ $notices[$i]->title }}"><img src="{{ url('storage/app/public/' . $notices[$i]->poster) }}" title="{{ $notices[$i]->title }}" alt="{{ $notices[$i]->title }}"></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">{{ $notices[$i]->updatedAtFormat }}</span>
                                <a href="{{ route('site.notices.show', ['slug' => $notices[$i]->slug]) }}" class="post-title" title="{{ $notices[$i]->title }}">{{ $notices[$i]->title }}</a>
                            </div>
                        </div>
                    </div>
                    @endfor

                    @for($i = 0; $i < 4; $i++)
                    <!-- Single News Area -->
                    <div class="col-12 col-sm-6">
                        <div class="single-blog-post d-flex style-4 mb-30">
                            <!-- Blog Thumbnail -->
                            <div class="blog-thumbnail">
                                <a href="{{ route('site.notices.show', ['slug' => $notices[$i]->slug]) }}" title="{{ $notices[$i]->title }}"><img src="{{ url('storage/app/public/' . $notices[$i]->poster) }}" title="{{ $notices[$i]->title }}" alt="{{ $notices[$i]->title }}"></a>
                            </div>

                            <!-- Blog Content -->
                            <div class="blog-content">
                                <span class="post-date">{{ $notices[$i]->updatedAtFormat }}</span>
                                <a href="{{ route('site.notices.show', ['slug' => $notices[$i]->slug]) }}" class="post-title" title="{{ $notices[$i]->title }}">{{ $notices[$i]->title }}</a>
                                <span class="post-author"><small>{{ $notices[$i]->author->name }}</small></span>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Intro News Area End ##### -->

<!-- ##### Top News Area Start ##### -->
<div class="top-news-area section-padding-20">
    <div class="container">
        <div class="row">
            @for($i = 0; $i < 6; $i++)
            <!-- Single News Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-blog-post style-2 mb-5">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                        <a href="{{ route('site.notices.show', ['slug' => $notices[$i]->slug]) }}" title="{{ $notices[$i]->title }}"><img src="{{ url('storage/app/public/' . $notices[$i]->poster) }}" alt="{{ $notices[$i]->title }}" title="{{ $notices[$i]->title }}"></a>
                    </div>

                    <!-- Blog Content -->
                    <div class="blog-content">
                        <span class="post-date">{{ $notices[$i]->createdAtFormat }}</span>
                        <a href="{{ route('site.notices.show', ['slug' => $notices[$i]->slug]) }}" class="post-title" title="{{ $notices[$i]->title }}">{{ $notices[$i]->title }}</a>
                        <span class="post-author"><small>{{ $notices[$i]->author->name }}</small></span>
                    </div>
                </div>
            </div>
            @endfor

            <div class="col-12">
                <div class="load-more-button text-center">
                    <a href="{{ route('site.notices') }}" class="btn newsbox-btn" title="Ler Mais Notícias">Ler Mais</a>
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