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
                <div class="panel-heading" style="background-color:black;color:white"><center><b>Add WAREHOUSE DATA</b></center></div>

                    <div class="panel-body">

        {!! Form::open(['action'=>'warehousecontroller@store']) !!}
           @include('warehouse.form',['button'=>'INSERT'])
        @include('errors.list')
        {!! Form::close()!!}
    </div>
     </div>
    
      

@stop

