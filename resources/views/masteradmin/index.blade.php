@extends('master')
@section('menu')
@include('masteradmin.include')
@stop
@section('table')
<style type="text/css">
	th{
		color:white;
	}
</style>
           <div class="table-responsive" style="margin-top:20px"> 
           <span><input type="text"  placeholder="Search for..."id="search" style="border-style:solid;border-color:black;border-width:5px;"></span><span><button class="btn btn-default" style="background:black;height:31px;position:relative;right:4px;bottom:2px" type="button"><span class="glyphicon glyphicon-search" style="color:white"> </span></button><span>
            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive"  id="myTable" >
               <thead>
              <tr>
				    	 <thead>
				    	<tr style="background-color:black">
				    		<th>NAME</th>
				    		<th>EMAIL</th>
				    		<th>BRANCH CODE</th>
				    		<th>STATUS</th>
                <th>ROLE</th>
				    		<th>ACTION</th>
				    	</tr>
				    	 </thead>
				    	 <tbody>
				    	@foreach($dat as $data)
				    	<tr>
				    		<td>{!!$data->name!!}</td>
				    		<td>{!!$data->email!!}</td>
				    		<td>{!!$data->Branch_Code!!}</td>
            
				    		 @if($data->status=='0'|| $data->status=='')
                	         <td>Disable</td>
                	         @else
                	         <td>Enable</td>
                	         @endif
                           <td>{!!$data->role!!}</td>
				    		<td><span>{!! link_to_action('superadmincontroller@edit', '', array($data->id),array('class' => 'glyphicon glyphicon-edit')) !!}<span></td>
				    	</tr>
				    	
				    	 @endforeach
				    	</tbody>
				    	
				    	 </table>
				    	 </span>

</div>
<span style="position:relative;left:450px;bottom:40px">{!!$dat->render()!!}</span>

 	 @stop
				    	