@extends('templates.site')

@section('title', $notice->title)
@section('url', route('site.notices.show', ['slug' => $notice->slug]))
@section('keywords', $notice->tags)
@section('description', $notice->description)
@section('image', url('storage/app/public/' . $notice->poster))
@section('image_width', 1200)
@section('image_height', 628)

@section('container')
<!-- ##### Post Details Title Area Start ##### -->
<div class="post-details-title-area bg-overlay clearfix" style="background-image: url('{{ url('storage/app/public/' . $notice->poster) }}')">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Post Content -->
                <div class="post-content">
                    <p class="post-title">{{ $notice->title }}</p>
                    <div class="d-flex align-items-center">
                        <span class="post-date mr-30">{{ $notice->createdAtFormat }}</span>
                        <span class="post-date mr-30"><i class="fa fa-user"></i> {{ isset($notice->author) ? $notice->author->name : config('app.name') }}</span>
                        <span class="post-date mr-30"><i class="fa fa-eye"></i> {{ number_format($notice->visits, 0, '', '.') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Post Details Title Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-news-area section-padding-40-0 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 mb-5">
                <!-- Your share button code -->
                <div class="fb-share-button mt-1" data-href="{{ route('site.notices.show', ['slug' => $notice->slug]) }}" data-layout="button" data-size="large" title="Facebook"></div>
                <a href="https://twitter.com/intent/tweet?url={{ route('site.notices.show', ['slug' => $notice->slug]) }}&text={{ $notice->title }}" class="btn btn-sm bg-twitter mt-0 mb-2" target="_blank" title="twitter"><i class="fa fa-twitter"></i> Share</a>

                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
            </div>

            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-8">
                <div class="post-details-content mb-100">
                    @foreach(json_decode($notice->content)->elements as $element)
                        @if($element->type == 'title')
                            <{{ $element->tag }} class="mb-4">{{ $element->content }}</{{ $element->tag }}>
                        @elseif($element->type == 'paragraph')
                            <p class="mb-4">{!! str_ireplace("\n", '<br>', $element->content) !!}</p>
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

@section('scripts')
<script type="text/javascript">
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@endsection