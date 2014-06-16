<div class="form-group {{ $errors->has($field->getName()) ? 'has-error' : '' }}">
	<label class="col-sm-3 control-label">{{ $field->getLabel() }}</label>
	<div class="col-sm-6">
		{{ Form::select($field->getName() . '_id', $items, $field->getValue(), ['class' => 'form-control']) }}
		@if ($field->getDescription())
			<p class="help-block">{{ $field->getDescription() }}</p>
		@endif
	</div>
	<div class="col-sm-3 text-right">
		<a href="{{ route('modal.belongs_to.create', $field->getName()) }}" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#field-modal">
			<i class="fa fa-plus"></i>
			Create from here
		</a>
	</div>
</div>