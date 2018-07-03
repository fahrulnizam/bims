							
							<form class="form-horizontal" method="POST" action="{{ route('update', $building->id) }}">
							            {{ csrf_field() }}

            					

							  <div class="form-group">
							    <label class="control-label col-sm-2" for="building_id">Building ID *</label>
							    <div class="col-sm-10">
							    	<p class="form-control-static">{{ $building->building_id }}</p>
							      
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="service_number">Service Number *</label>
							    <div class="col-sm-10">
							    	<p class="form-control-static">{{ $building->service_number }}</p>
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="building_group">Building Group</label>
							    <div class="col-sm-10">
									<select class="form-control" name="building_group">
										<option value="">Please select</option>
										@foreach(\App\Building_Group::all() as $building_group)
										<option value="{{ $building_group->id }}"
											@if($building->building_group == $building_group->id)
												selected 
											@endif
											>{{ $building_group->name }}</option>
										@endforeach
									</select>
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="building_name">Building Name</label>
							    <div class="col-sm-10">
							      <input type="text" name="building_name" class="form-control" id="building_name" value="{{ $building->name }}">
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="description">Description *</label>
							    <div class="col-sm-10">
							    	<textarea class="form-control" rows="5" name="description" required>{{ $building->description }}</textarea>
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="status">Status *</label>
							    <div class="col-sm-10">
      								<div class="radio-inline">
									  <label><input type="radio" name="status" required value="1" {{ $building->status == 1 ? 'checked' : '' }} >Active</label>
									</div>
									<div class="radio-inline">
									  <label><input type="radio" name="status" required value="0" {{ $building->status == 0 ? 'checked' : '' }} >Closed</label>
									</div>
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="state">State *</label>
							    <div class="col-sm-10">
									  <select class="form-control" name="state" required>
  										<option value="">Please select</option>
									  	@foreach(\App\State::all() as $state)
									    <option value="{{ $state->id }}"
											@if($building->state == $state->id)
												selected 
											@endif
									    	>{{ $state->name}}</option>
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