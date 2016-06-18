@extends('master')
@section('menu')
@include('masteradmin.include')
<script type="text/javascript">
  $("#sales").attr("class","");
   $("#user").attr("class","");
    $("#purchase").attr("class","");
     $("#warehouse").attr("class","");
      $("#cash").attr("class","active");
</script>  
@stop
@section('table')
				   <div class="table-responsive" style="margin-top:20px">
            <span><input type="text"  placeholder="Search for..."id="search" style="border-style:solid;border-color:black;border-width:5px;"></span><span><button class="btn btn-default" style="background:black;height:31px;position:relative;right:4px;bottom:2px" type="button"><span class="glyphicon glyphicon-search" style="color:white"> </span></button><span>
            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="myTable">
               <thead>
              <tr>
                <th>PETTY CASH(out)</th>
                <th>PURCHASE CASH(out)</th>
                <th>SALES CASH(in)</th>
                <th>DATE</th>
                <th>ACTION</th>
              </tr>
               </thead>
               <tbody>
              @foreach($data as $data)
              <tr>
                <td>{!!$data->petty_cash!!}</td>
                <td>{!!$data->cash_out_p!!}</td>
                <td>{!!$data->cash_in_s!!}</td>
                <td>{!!$data->date_tran->format('Y-m-d')!!}</td>
                <td>{!! Form::open(['method'=>'DELETE', 'action'=>['cash@destroy',$data->id]]) !!}
      <span><button type="submit"> <span class="glyphicon glyphicon-minus"></span> </button></span>
    {!!Form::close() !!}</td>
              </tr>
             @endforeach
             <tr>
                <td class="g">{!!$pt!!}</td>
                <td class="g">{!!$ss!!}</td>
                 <td class="g">{!!$ps!!}</td>
                <td class="g">{{date('Y-m-d')}}</td>
                <td class="g">:TOTAL</td>
              </tr>
              </tbody>
               </table>
               <style>
               .g{
                background-color:gray;
               }
               </style>

        </div>
				    	 @stop
				    	