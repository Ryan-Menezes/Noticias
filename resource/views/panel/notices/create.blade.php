@extends('templates.panel')

@section('title', 'Nova Notícia')

@section('container')
	<div class="container-main">
		@include('includes.panel.notices.form', ['action' => route('panel.notices.store'), 'method' => 'POST'])
	</div>
@endsection