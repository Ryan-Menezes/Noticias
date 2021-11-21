<nav class="menu">
	<div class="menu-header">
		<p>{{ auth()->user()->name }}</p>
		<p>{{ auth()->user()->email }}</p>
	</div>
	<ul>
		<a href="{{ route('panel') }}" title="Página Inicial"><li><i class="fas fa-home"></i> Início</li></a>

		@if(can('view.users'))
			<a href="{{ route('panel.users') }}" title="Página de Usuários"><li><i class="fas fa-users"></i> Usuários</li></a>
		@endif

		@if(can('view.notices'))
			<a href="{{ route('panel.notices') }}" title="Página de Notícias"><li><i class="fas fa-newspaper"></i> Notícias</li></a>
		@endif

		@if(can('view.categories'))
			<a href="{{ route('panel.categories') }}" title="Página de Categorias"><li><i class="fas fa-tag"></i> Categorias</li></a>
		@endif

		@if(can('view.roles'))
			<a href="{{ route('panel.roles') }}" title="Página de Funções"><li><i class="fas fa-user-tie"></i> Funções</li></a>
		@endif

		@if(can('view.permissions'))
			<a href="{{ route('panel.permissions') }}" title="Página de Permissões"><li><i class="fas fa-lock"></i> Permissões</li></a>
		@endif
		
		<a href="{{ route('panel.logout') }}" title="Deslogar do Sistema"><li><i class="fas fa-sign-out-alt"></i> Sair</li></a>
	</ul>
</nav>