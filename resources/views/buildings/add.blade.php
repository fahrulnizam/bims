
<form class="form-horizontal" method="POST" action="{{ route('save') }}">
{{ csrf_field() }}
<div class="form-group">
	<label class="control-label col-sm-2" for="building_id">Building ID *</label>
	<div class="col-sm-10">
		<input type="text" class="form-control" id="building_id" name="building_id" required>

	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="service_number">Service Number *</label>
	<div class="col-sm-10">
		<input type="text" name="service_number" class="form-control" id="service_number" required>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="building_group">Building Group</label>
	<div class="col-sm-10">
	<select class="form-control" name="building_group">
		<option value="">Please select</option>
		@foreach(\App\Building_Group::all() as $building_group)
		<option value="{{ $building_group->id }}">{{ $building_group->name}}</option>
		@endforeach
	</select>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="building_name">Building Name</label>
	<div class="col-sm-10">
		<input type="text" name="building_name" class="form-control" id="building_name" value="">
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="description">Description *</label>
	<div class="col-sm-10">
		<textarea class="form-control" rows="5" name="description" required></textarea>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="status">Status *</label>
	<div class="col-sm-10">
			<div class="radio-inline">
		<label><input type="radio" name="status" required value="1">Active</label>
	</div>
	<div class="radio-inline">
		<label><input type="radio" name="status" required value="0">Closed</label>
	</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-sm-2" for="state">State *</label>
	<div class="col-sm-10">
		<select class="form-control" name="state" required>
			<option value="">Please select</option>
			@foreach(\App\State::all() as $state)
			<option value="{{ $state->id }}">{{ $state->name}}</option>
			@endforeach
		</select>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
</form>