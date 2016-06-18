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
    
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:black;color:white"><center><b>EDIT PURCHASE DATA</b></center></div>
    <div class="panel-body">
    {!! Form::model($data, ['method'=>'PATCH', 'action'=>['purchasecontroller@update',$data->id]]) !!}
           @include('purchase.edit_form',['button'=>'EDIT'])
        @include('errors.list')
        {!! Form::close()!!}
    </div>
     </div>
     
       <div id="t"></div>

@stop

