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

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
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
								<th>Action</th>
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
								<td><button id="{{ $building->id }}" type="button" class="btn btn-link editbuilding" data-toggle="modal" data-target="#editModal">Edit</button><button id="{{ $building->id }}" type="button" class="btn btn-link buildinginfo" data-toggle="modal" data-target="#detailsModal">Delete</button></td>
							</tr>		
						@endforeach					
						</tbody>
					</table>
					</div>		
					
					@endif

					<button type="button" class="btn btn-success pull-right addmodal" data-toggle="modal" data-target="#addModal" >Add New Building</button>

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
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>

				  <!-- details Modal -->
				  <div class="modal fade" id="editModal" role="dialog">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Edit Building</h4>
				        </div>
				        <div class="modal-body">

				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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

	$('.buildinginfo').click(function(){
		//console.log('okgo');
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

	$('.editbuilding').click(function(){
		//console.log('okgo');
		var id = this.id;

		// AJAX request
		$.ajax({
		url: '{{ url('edit') }}/' + id,
		type: 'GET',

		success: function(response){ 
			// Add response in Modal body
				$('.modal-body').html(response);

				// Display Modal
				$('#empModal').modal('show'); 
			}
		});
	});

	$('.addmodal').click(function(){
		// $('.modal-body').html('');
		// AJAX request
		$.ajax({
		url: '{{ url('add') }}',
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