<div class="form-group mb-2">
	<label class="form-label">{{ $title }}:</label>
	<input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $title }}" value="{{ $value ?? null }}" class="form-control {{ $class ?? null }}">
</div>