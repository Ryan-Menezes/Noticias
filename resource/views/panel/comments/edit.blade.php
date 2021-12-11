@extends('templates.panel')

@section('title', 'Editar Comentário')

@section('container')
	<div class="container-main">
		<div class="border mb-4 p-4">
			<p><strong>{{ $comment->name }}</strong> | <strong>{{ $comment->email }}</strong></p>

			<p class="mt-4 mb-0">{{ str_ireplace("\n", '<br>', $comment->content) }}</p>
		</div>

		@include('includes.panel.comments.form', ['action' => route('panel.comments.update', ['id' => $comment->id]), 'method' => 'PUT'])
	</div>
@endsection