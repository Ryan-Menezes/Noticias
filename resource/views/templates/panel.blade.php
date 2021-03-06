<!DOCTYPE html>
<html lang="{{ config('app.lang') }}">
<head>
	<!-- Required meta tags -->
	<meta http-equiv="Content-Type" content="text/html; charset={{ config('app.charset') }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex" />

	<!-- jQuery CSS -->
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/js/libs/jquery/jquery-ui/jquery-ui.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/js/libs/jquery/jquery-ui/jquery-ui.structure.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/js/libs/jquery/jquery-ui/jquery-ui.theme.min.css') }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/bootstrap/bootstrap.min.css') }}">

	<!-- FontAwesome CSS -->
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/brands.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/fontawesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/regular.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/solid.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/svg-with-js.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/libs/fontawesome/v4-shims.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ public_path('assets/css/panel/config.css') }}">

	<!-- Favicon -->
    <link rel="icon" href="{{ public_path('assets/img/site/core-img/favicon.ico') }}">

	<title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body>
	<section class="content">
		@include('includes.panel.menu')
		<div>
			@include('includes.panel.header')

			<section class="content-main">
				<main class="content-breadcrumb">
					<nav aria-label="breadcrumb" class="p-3 border">
						<ol class="breadcrumb p-0 m-0">
							@php $routeComplete = '' @endphp
							@foreach(explode('/', route()) as $route)
								@php $routeComplete .= $route . '/' @endphp

								@if(!$loop->last)
						    	<li class="breadcrumb-item"><a href="{{ url($routeComplete) }}">{{ $route }}</a></li>
						    	@else
						    	@php $routeComplete = $route @endphp
						    	@endif
						    @endforeach
						    <li class="breadcrumb-item active" aria-current="page">{{ trim($routeComplete, '/') }}</li>
						</ol>
					</nav>
				</main>
				<main class="content-view">
					@yield('container')
				</main>
			</section>
		</div>
	</section>

	<script type="text/javascript" src="{{ public_path('assets/js/libs/jquery/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/libs/jquery/jquery-ui/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/libs/jquery/jquery.validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/libs/bootstrap/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ public_path('assets/js/panel/main.js') }}"></script>
</body>
</html>