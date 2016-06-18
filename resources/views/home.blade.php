@extends('master')
@section('section')
            
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{!!$bn->Branch_Name!!} DATA<a href="{{url('auth/logout')}}" class="pull-right"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-off"></span>Logout
        </button></a></div>

				<div class="panel-body">

				    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
				    	 <thead>
				    	<tr>
				    		<th>BRANCH CODE</th>
				    		<th>ITEM NAME</th>
				    		<th>ITEM SIZE</th>
				    		<th>DESIGN CODE</th>
				    		<th>COLOR</th>
				    	</tr>
				    	 </thead>
				    	 <tbody>
				    	@foreach($data as $data)
				    	<tr>
				    		<td>{!!$data->Branch_Code!!}</td>
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
				    	