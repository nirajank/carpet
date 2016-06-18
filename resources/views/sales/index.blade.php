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
  $("#sales").attr("class","active");
   $("#user").attr("class","");
    $("#purchase").attr("class","");
     $("#warehouse").attr("class","");
</script>  
 
    
				   <div class="table-responsive">
            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="myTable">
               <thead>
              <tr style="background-color:black">
                <th>DESIGN_CODE</th>
                <th>ITEM_NAME</th>
                <th>ITEM SIZE</th>
                <th>MARKED PRICE</th>
                <th>DISCOUNT</th>
                <th>FINAL PRICE</th>
                <th>RETURN</th>
                <th>PARTIAL</th>
                <th>GOOD</th>
                <th>EXCHANGE</th>
                <th>ACTION</th>
              </tr>
               </thead>
               <tbody>
              @foreach($data as $data)
              <tr>
                <td>{!!$data->Design_Code!!}</td>
                <td>{!!$data->item_name!!}</td>
                <td>{!!$data->item_size!!}</td>
                <td>Rs,{!!$data->original_price!!}</td>
                <td>{!!$data->discount!!}%</td>
                <td>Rs{!!$data->discounted_price!!}</td>
                 @if($data->Return_status=='0')
                <td>NOT RETURN</td>
                @else
                <td>RETURN</td>
                @endif
                @if($data->p_payment_or_f_payment=='1'||$data->credit=='0'||$data->credit<0)
                <td><a href="#" id="{{$data->id}}" data-trigger="hover" title="CREDIT" data-content="{{$data->credit}}"  class="p">Full</a></td>
                @else
                <td><a href="#" id="{{$data->id}}" data-trigger="hover" title="CREDIT" data-content="{{$data->credit}}" class="p">Partial</a></td>
                 @endif
                 @if($data->Gg_Gng=='0'||$data->Gg_Gng=='')
                <td>NOT</td>
                @else
                <td>YES</td>
                @endif
                 @if($data->exchange_Status=='1'|| $data->exchange_Status=='')
                  <td>YES</td>
                  @else
                  <td>NO</td>
                  @endif
                <td>{!! Form::open(['method'=>'DELETE', 'action'=>['salescontroller@destroy',$data->Design_Code]]) !!}
                  <span>{!! link_to_route('sales.edit', '', array($data->Design_Code), array('class' => 'glyphicon glyphicon-edit')) !!}<span>
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
				    