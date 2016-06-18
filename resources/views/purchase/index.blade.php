@extends('master')
@section('menu')
@include('masteradmin.include')
@stop
@section('table')
<script type="text/javascript">
  $("#sales").attr("class","");
   $("#user").attr("class","");
    $("#purchase").attr("class","active");
     $("#warehouse").attr("class","");
</script>  
				   <div class="table-responsive" style="margin-top:2px">
             
           <span><input type="text"  placeholder="Search for..."id="search" style="border-style:solid;border-color:black;border-width:5px;"></span><span><button class="btn btn-default" style="background:black;height:31px;position:relative;right:4px;bottom:2px" type="button"><span class="glyphicon glyphicon-search" style="color:white"> </span></button><span>
            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="myTable">
               <thead>
              <tr>
                <th>ITEM_NAME</th>
                <th>PRICE</th>
                <th>GOODS RECEIVE</th>
                <th>PARTIAL</th>
                <th>ACTION</th>
              </tr>
               </thead>
               <tbody>
              @foreach($data as $data)
              <tr>
                <td>{!!$data->item_name!!}</td>
                <td>{!!$data->price!!}</td>
                 @if($data->Gg_Gng!='1')
                <td>GOODS NOT GET</td>
                @else
                <td>GOODS GET</td>
                @endif
                @if($data->p_credit!='0')
                <td><a href="#" id="{{$data->id}}" data-trigger="hover" title="CREDIT" data-content="{{$data->p_credit}}"  class="p">partial</a></td>
                @else
                <td><a href="#" id="{{$data->id}}" data-trigger="hover" title="CREDIT" data-content="{{$data->p_credit}}"  class="p">full</a></td>
                @endif
                <td>{!! Form::open(['method'=>'DELETE', 'action'=>['purchasecontroller@destroy',$data->id]]) !!}
                  <span>{!! link_to_route('purchase.edit', '', array($data->id), array('class' => 'glyphicon glyphicon-edit')) !!}<span>
      <span><button type="submit"> <span class="glyphicon glyphicon-minus"></span> </button></span>
    {!!Form::close() !!}</td>
              </tr>
              
               @endforeach
              </tbody>
               </table>

        </div>
           <script>
$(document).ready(function(){
      $(".p").hover(function(){
    $('[data-trigger="hover"]').popover(); 

}); 
});
</script>

				    	 @stop
				    