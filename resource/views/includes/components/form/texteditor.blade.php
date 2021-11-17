<div class="form-group content-group mb-2 border p-2 {{ $class ?? null }}">
	<input type="hidden" name="elements[]" value="TEXTEDITOR">
	<div class="mb-2">
		<button type="button" class="btn btn-sm border textarea-editor-btn" title="Negrito" data-type="bold"><i class="fas fa-bold"></i></button>
		<button type="button" class="btn btn-sm border textarea-editor-btn" title="Itálico" data-type="italic"><i class="fas fa-italic"></i></button>
		<button type="button" class="btn btn-sm border textarea-editor-btn" title="Sublinhado" data-type="underline"><i class="fas fa-underline"></i></button>
		<button type="button" class="btn btn-sm border textarea-editor-btn" title="Link" data-type="link"><i class="fas fa-link"></i></button>

		<button type="button" class="btn btn-sm btn-danger btn-remove-element float-end" title="Remover"><i class="fas fa-trash-alt"></i></button>
	</div>
	<textarea name="{{ $name }}" placeholder="{{ $title }}" rows="{{ $rows ?? 5 }}" class="form-control required">{{ $value ?? null }}</textarea>
</div>