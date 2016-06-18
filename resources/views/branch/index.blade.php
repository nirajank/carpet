@extends('master')
@section('section')
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
     $("#warehouse").attr("class","");
      $("#branch").attr("class","active");
</script>
				   <div class="table-responsive"> <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
				    	 <thead>
				    	<tr style="background-color:black;color:white">
                <th>BRANCH CODE</th>
				    		<th>BRANCH NAME</th>
				    		<th>CONTACT</th>
                <th>ADDRESS</th>
                <th>ACTION</th>
				    	</tr>
				    	 </thead>
				    	 <tbody>
				    	@foreach($data as $data)
				    	<tr>
                <td>{!!$data->Branch_Code!!}</td>
				    		<td>{!!$data->Branch_Name!!}</td>
				    		<td>{!!$data->Contact!!}</td>
                <td>{!!$data->Address!!}</td>
                <td>{!! Form::open(['method'=>'DELETE', 'action'=>['branchcontroller@destroy',$data->Branch_Code]]) !!}
                  <span>{!! link_to_action('branchcontroller@edit', '', array($data->Branch_Code),array('class' => 'glyphicon glyphicon-edit')) !!}<span>
      <span><button type="submit"> <span class="glyphicon glyphicon-minus"></span> </button></span>
    {!!Form::close() !!}</td>
				    	</tr>
				    	
				    	 @endforeach
				    	</tbody>
				    	 </table>
</div>
				    	 @stop
				    	