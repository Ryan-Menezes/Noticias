@extends('templates.panel')

@section('title', 'Início')

@section('container')
	<div class="container-main">
		<div class="cards-container">
			@if(can('view.users'))
				@include('includes.components.card', ['link' => route('panel.users'), 'class' => 'bg-primary', 'amount' => $usersCount, 'icon' => 'fas fa-users'])
			@endif

			@if(can('view.notices'))
				@include('includes.components.card', ['link' => route('panel.notices'), 'class' => 'bg-danger', 'amount' => $noticesCount, 'icon' => 'fas fa-newspaper'])
			@endif

			@if(can('view.categories'))
				@include('includes.components.card', ['link' => route('panel.categories'), 'class' => 'bg-success', 'amount' => $categoriesCount, 'icon' => 'fas fa-tag'])
			@endif

			@if(can('view.roles'))
				@include('includes.components.card', ['link' => route('panel.roles'), 'class' => 'bg-dark', 'amount' => $rolesCount, 'icon' => 'fas fa-user-tag'])
			@endif

			@if(can('view.permissions'))
				@include('includes.components.card', ['link' => route('panel.permissions'), 'class' => 'bg-warning', 'amount' => $permissionsCount, 'icon' => 'fas fa-lock'])
			@endif
		</div>
	</div>
@endsection