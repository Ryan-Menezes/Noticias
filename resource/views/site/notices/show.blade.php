@extends('templates.site')

@section('title', $notice->title)
@section('keywords', $notice->tags)
@section('description', $notice->description)

@section('container')
<!-- ##### Post Details Title Area Start ##### -->
<div class="post-details-title-area bg-overlay clearfix" style="background-image: url('{{ url('storage/app/public/' . $notice->poster) }}')">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Post Content -->
                <div class="post-content">
                    <p class="tag"><span>Local News</span></p>
                    <p class="post-title">{{ $notice->title }}</p>
                    <div class="d-flex align-items-center">
                        <span class="post-date mr-30">{{ $notice->createdAtFormat }}</span>
                        <span class="post-date">{{ $notice->author->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Post Details Title Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-news-area section-padding-100-0 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-8">
                <div class="post-details-content mb-100">
                    @foreach(json_decode($notice->content)->elements as $element)
                        @if($element->type == 'paragraph')
                            <p class="b-4">{!! str_ireplace("\n", '<br>', $element->content) !!}</p>
                        @elseif($element->type == 'youtube')
                            @include('includes.components.youtube.player', [
                                'url' => 'https://www.youtube.com/embed/' . $element->videocode,
                                'class' => 'mb-4'
                            ])
                        @elseif($element->type == 'image')
                            <img src="{{ url('storage/app/public/' . $element->src) }}" class="img-fluid mb-4" alt="{{ $element->title }}" title="{{ $element->title }}">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->
@endsection