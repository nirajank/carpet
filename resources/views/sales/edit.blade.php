@extends('master')
@section('menu')
@include('masteradmin.include')
 <script type="text/javascript">
  $("#sales").attr("class","active");
   $("#user").attr("class","");
    $("#purchase").attr("class","");
     $("#warehouse").attr("class","");
</script>  
@stop
@section('table')
<link rel="stylesheet" type="text/css" href="{{asset('bootstrap.min.css')}}">
   <script type="text/javascript" src="{{asset('jquery.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#item_name").change(function(){
    var a=$("#item_name").val();
    var b=$("#item_size").val();
     $.ajax({
      url:"{{url('/set1')}}",
      data:{set1:a, set2:b },
      success:function(result){
       {{-- var obj = JSON.parse(result);--}}
    $("#Design_Code").val(result);
  }});
}); 
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#Return_status').change(function(){
     var a=$("#Return_status").val();
     var b=1;
     var c=0;
      if (a==0) {
        $('#Gg_Gng').val(b);
        $('#exchange_Status').val(c);
    } 
    else 
    {
     $('#Gg_Gng').val(c);
    }
  }); 
  $('#exchange_Status').change(function(){
     var a=$("#exchange_Status").val();
     var b=1;
     var c=0;
      if (a==0) {
        $('#Gg_Gng').val(b);
        $('#Return_status').val(c);
    } 
    else 
    {
     $('#Gg_Gng').val(c);
     $("#Return_status").val(b);

    }
  }); 
   $('#Gg_Gng').change(function(){
     var a=$("#Gg_Gng").val();
     var b=1;
     var c=0;
      if (a==0) {
        alert('Goods not get');
    } 
    else 
    {
     $('#exchange_Status').val(c);
     $("#Return_status").val(c);

    }
  }); 
   $('#p_payment_or_f_payment').change(function(){
    var a=$("#p_payment_or_f_payment").val();
    if(a==2){
      $("#p_payment_or_f_payment").val(1);
    }
   });
});
</script>


  <div class="container-fluid">
    <div class="row">
            <div class="panel panel-default">
             <div class="panel-heading" style="background-color:black;color:white"><center><b>Edit SALES DATA</b></center></div>

                    <div class="panel-body">
    {!! Form::model($data, ['method'=>'PATCH', 'action'=>['salescontroller@update',$data->Design_Code]]) !!}
           @include('sales.edit_form',['button'=>'EDIT'])
        @include('errors.list')
        {!! Form::close()!!}
    </div>
     </div>
      </div>
       </div>
       <div id="t"></div>

@stop

