@extends('templates.panel')

@section('title', 'Editar Comentário')

@section('container')
	<div class="container-main">
		<div class="border mb-4 p-4">
			<p><strong>{{ $subcomment->name }}</strong> | <strong>{{ $subcomment->email }}</strong></p>

			<p class="mt-4 mb-0">{{ str_ireplace("\n", '<br>', $subcomment->content) }}</p>
		</div>

		@include('includes.panel.comments.form', ['action' => route('panel.comments.subcomments.update', ['comment' => $comment->id, 'id' => $subcomment->id]), 'method' => 'PUT'])
	</div>
@endsection