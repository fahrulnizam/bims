

							<form class="form-horizontal" action="#">
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="building_id">Building ID</label>
							    <div class="col-sm-10">
							      <p class="form-control-static">{{ $building->building_id }}</p>
							      {{-- <input type="building_id" class="form-control" id="building_id" value=""> --}}
							      
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="service_number">Service Number</label>
							    <div class="col-sm-10">
							      <p class="form-control-static">{{ $building->service_number }}</p>
							      {{-- <input type="service_number" class="form-control" id="service_number" value=""> --}}
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="building_group">Building Group</label>
							    <div class="col-sm-10">
							      <p class="form-control-static">{{ $building->get_building_group->name }}</p>
							      {{-- <input type="building_group" class="form-control" id="building_group" value=""> --}}
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="building_name">Building Name</label>
							    <div class="col-sm-10">
							      <p class="form-control-static">{{ $building->name }}</p>
							      {{-- <input type="building_name" class="form-controfl" id="building_name" value=""> --}}
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="description">Description</label>
							    <div class="col-sm-10">
							      <p class="form-control-static">{{ $building->description }}</p>
							      {{-- <input type="description" class="form-control" id="description" value=""> --}}
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="status">Status</label>
							    <div class="col-sm-10">
      								<p class="form-control-static">{{ status($building->status) }}</p>
							      
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="state">State</label>
							    <div class="col-sm-10">
							    	<p class="form-control-static">{{ $building->get_state->name  }}</p>
							    </div>
							  </div>

{{-- 							  <div class="form-group"> 
							    <div class="col-sm-offset-2 col-sm-10">
							      <button type="submit" class="btn btn-default">Submit</button>
							    </div>
							  </div>
							</form> --}}