@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <!-- template content starts here ... -->


  					@if(count($buildings) > 0)

					<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Building ID</th>
								<th>Service Number</th>
								<th>Building Group</th>
								<th>Building Name</th>
								<th>Status</th>
							</tr>
						</thead>	
						<tbody>
						@foreach($buildings as $building)
							<tr>
								<td><button id="{{ $building->id }}" type="button" class="btn btn-link buildinginfo" data-toggle="modal" data-target="#detailsModal">{{ $building->building_id }}</button></td>
								<td>{{ $building->service_number }}</td>
								<td>{{ \App\Building_Group::where('id', $building->building_group)->first()->name }}</td>
								<td>{{ $building->name }}</td>
								<td>{{ status($building->status) }}</td>
							</tr>		
						@endforeach					
						</tbody>
					</table>
					</div>		
					
					@endif

					<button type="button" class="btn btn-default pull-right addmodal" data-toggle="modal" data-target="#addModal" >Add New Building</button>

				  <!-- details Modal -->
				  <div class="modal fade" id="detailsModal" role="dialog">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Building Details</h4>
				        </div>
				        <div class="modal-body">

				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>

				  <!-- add Modal -->
				  <div class="modal fade" id="addModal" role="dialog">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Add New Building</h4>
				        </div>
				        <div class="modal-body">
							
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')

<script>

//alert('okgo');

$(document).ready(function(){

$('.addmodal').click(function(){

	$('.modal-body').html(`

<form class="form-horizontal"   method="POST" >
								
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
							      <input type="text" name="building_group" class="form-control" id="building_group" value="">
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
									  <label><input type="radio" name="status" required>Active</label>
									</div>
									<div class="radio-inline">
									  <label><input type="radio" name="status" required>Closed</label>
									</div>
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="control-label col-sm-2" for="state">State *</label>
							    <div class="col-sm-10">
									  <select class="form-control" name="state" required>
  										<option value="1">None</option>
									    <option value="2">JOHOR</option>
									    <option value="3">KEDAH</option>
									    <option value="4">KELANTAN</option>
									    <option value="5">MELAKA</option>
									    <option value="6">NEGERI SEMBILAN</option>
									  </select>
							    </div>
							  </div>

							  <div class="form-group"> 
							    <div class="col-sm-offset-2 col-sm-10">
							      <button type="submit" class="btn btn-default">Submit</button>
							    </div>
							  </div>
							</form>
		`);

});

 $('.buildinginfo').click(function(){
 	console.log('okgo');
   var id = this.id;

   // AJAX request
   $.ajax({
    url: '{{ url('details') }}/' + id,
    type: 'GET',

    success: function(response){ 
      // Add response in Modal body
      $('.modal-body').html(response);

      // Display Modal
      $('#empModal').modal('show'); 
    }
  });
 });
});

</script>

@endsection