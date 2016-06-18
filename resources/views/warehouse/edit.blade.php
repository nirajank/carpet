@extends('master')
@section('menu')
@include('masteradmin.include')
@stop
@section('table')
<script type="text/javascript">
  $("#sales").attr("class","");
   $("#user").attr("class","");
    $("#purchase").attr("class","");
     $("#warehouse").attr("class","active");
</script>
   
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:black;color:white"><center><b>EDIT Warehouse DATA</b></center></div>

                    <div class="panel-body">
    {!! Form::model($data, ['method'=>'PATCH', 'action'=>['warehousecontroller@update',$data->Design_Code]]) !!}
           @include('warehouse.form',['button'=>'EDIT'])
        @include('errors.list')
        {!! Form::close()!!}
    </div>
     </div>
      
@stop

