@extends('templates.panel')

@section('title', 'Editar Notícia')

@section('container')
	<div class="container-main">
		@include('includes.panel.notices.form', ['action' => route('panel.notices.update', ['id' => $notice->id]), 'method' => 'PUT'])
	</div>
@endsection