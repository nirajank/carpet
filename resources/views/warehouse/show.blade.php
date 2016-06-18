@extends('master')
@section('section')
            
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">WAREHOUSE DATA</div>

				<div class="panel-body">

				    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
				    	 <thead>
				    	<tr>
				    		<th>ID</th>
				    		<th>BRANCH ID</th>
				    		<th>ITEM NAME</th>
				    		<th>ITEM SIZE</th>
				    		<th>DESIGN CODE</th>
				    		<th>COLOR</th>
				    	</tr>
				    	 </thead>
				    	 <tbody>
				    	@foreach($data as $data)
				    	<tr>
				    		<td>{!!$data->id!!}</td>
				    		<td>{!!$data->branch_id!!}</td>
				    		<td>{!!$data->Item_Name!!}</td>
				    		<td>{!!$data->Item_size!!}</td>
				    		<td>{!!$data->Design_code!!}</td>
				    		<td>{!!$data->color!!}</td>
				    		
				    	</tr>
				    	 @endforeach
				    	</tbody>
				    	 </table>

				</div>
			</div>
		</div>
	</div>

				    	 @stop