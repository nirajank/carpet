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
   <script type="text/javascript">
  $("#sales").attr("class","");
   $("#user").attr("class","");
    $("#purchase").attr("class","");
     $("#warehouse").attr("class","active");
</script>    
				  
	
                    <div class="table-responsive" style="margin-top:20px">
                     <span><input type="text"  placeholder="Search for..."id="search" style="border-style:solid;border-color:black;border-width:5px;"></span><span><button class="btn btn-default" style="background:black;height:31px;position:relative;right:4px;bottom:2px" type="button"><span class="glyphicon glyphicon-search" style="color:white"> </span></button><span>
				    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="myTable">
				    	 <thead>
				    	<tr style="background-color:black">
				    		<th>BRANCH CODE</th>
				    		<th>ITEM NAME</th>
				    		<th>ITEM SIZE</th>
				    		<th>DESIGN CODE</th>
				    		<th>COLOR</th>
				    		<th>ACTION</th>
				    	</tr>
				    	 </thead>
				    	 <tbody>
				    	@foreach($data as $data)
				    	<tr>
				    		<td>{!!$data->Branch_Code!!}</td>
				    		<td>{!!$data->Item_Name!!}</td>
				    		<td>{!!$data->Item_size!!}</td>
				    		<td>{!!$data->Design_Code!!}</td>
				    		<td>{!!$data->color!!}</td>
				    		<td>{!! Form::open(['method'=>'DELETE', 'action'=>['warehousecontroller@destroy',$data->Design_Code]]) !!}
				    			<span>{!! link_to_route('warehouse.edit', '', array($data->Design_Code),array('class' => 'glyphicon glyphicon-edit')) !!}<span>
      <span><button type="submit"> <span class="glyphicon glyphicon-minus"></span> </button></span>
    {!!Form::close() !!}</td>
				    	</tr>
				    	
				    	 @endforeach
				    	</tbody>
				    	 </table>

				</div>
       

				    	 @stop
				    	