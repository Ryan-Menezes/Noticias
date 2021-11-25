@extends('templates.site')

@section('title', 'Notícias')
@section('keywords', config('app.keywords'))
@section('description', config('app.description'))

@section('container')
    @if(count($notices) != 0)
        <!-- ##### Catagory Featured Area Start ##### -->
        <div class="catagory-featured-post bg-overlay clearfix" style="background-image: url('{{ url('storage/app/public/' . $notices[0]->poster) }}')">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-9">
                        <!-- Post Content -->
                        <div class="post-content">
                            @isset($category)
                            <p class="tag"><span>{{ $category->name }}</span></p>
                            @endisset
                            <a href="{{ route('site.notices.show', ['slug' => $notices[0]->slug]) }}" class="post-title" title="{{ $notices[0]->title }}">{{ $notices[0]->title }}</a>
                            <p>{!! str_ireplace("\n", '<br>', $notices[0]->description) !!}</p>
                            <span class="post-date">{{ $notices[0]->createdAtFormat }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Catagory Featured Area End ##### -->

        @php
            unset($notices[0]);
        @endphp

        <!-- ##### Intro News Area Start ##### -->
        <section class="intro-news-area section-padding-100-0 mb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Intro News Tabs Area -->
                    <div class="col-12 col-lg-20">
                        <div class="row">
                            @foreach($notices as $notice)
                            <!-- Single News Area -->
                            <div class="col-4">
                                <div class="single-blog-post style-2 mb-5">
                                    <!-- Blog Thumbnail -->
                                    <div class="blog-thumbnail">
                                        <a href="{{ route('site.notices.show', ['slug' => $notice->slug]) }}" title="{{ $notice->title }}"><img src="{{ url('storage/app/public/' . $notice->poster) }}" title="{{ $notice->title }}" alt="{{ $notice->title }}"></a>
                                    </div>

                                    <!-- Blog Content -->
                                    <div class="blog-content">
                                        <span class="post-date">{{ $notice->cretedAtFormat }}</span>
                                        <a href="{{ route('site.notices.show', ['slug' => $notice->slug]) }}" class="post-title" title="{{ $notice->title }}">{{ $notice->title }}</a>
                                        <span class="post-author mb-30">{{ $notice->author->name }}</span>
                                        <p>{!! str_ireplace("\n", '<br>', mb_substr($notice->description, 0, 100)) !!}...</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @include('includes.paginator', ['route' => 'site.notices'])
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Intro News Area End ##### -->
    @else
        <h1>Infelizmente não há notícias cadastradas no sistema!</h1>
    @endif
@endsection