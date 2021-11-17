<form action="{{ $action }}" method="{{ ($method != 'GET' && $method != 'POST') ? 'POST' : $method }}" class="border p-4 form-validate">
	@include('includes.messages')
	
	<input type="hidden" name="_method" value="{{ $method }}">
	@include('includes.components.form.input', [
		'type' => 'text', 
		'name' => 'name', 
		'title' => 'Nome', 
		'value' => (isset($role) ? $role->name : null),
		'class' => 'required'
	])

	@include('includes.components.form.input', [
		'type' => 'text', 
		'name' => 'description', 
		'title' => 'Descrição', 
		'value' => (isset($role) ? $role->description : null),
		'class' => 'required'
	])

	@include('includes.components.form.checkboxes', [
		'name' => 'permissions[]',
		'title' => 'Permissões',
		'values' => $permissions,
		'checks' => (isset($role) ? $role->permissions->pluck('id')->all() : null),
		'class' => 'required'
	])
	<br>
	<button type="submit" class="btn btn-danger">Salvar <i class="fas fa-save"></i></button>
</form>