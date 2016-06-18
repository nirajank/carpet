@extends('master')
@section('section')




<select id="p_payment_or_f_payment">
                            <option value="1" selected>full</option>
                         <option value="2">partial</option>
                                     </select> 
   {!! Form::text('cash',null,array('class'=>'form-control','value'=>0,'readonly' => false,'id'=>'cash')) !!}


 
<script>
$(document).ready(function(){
    $("#p_payment_or_f_payment").change(function(){
        var a=$("#p_payment_or_f_payment").val();
        if(a==2){
           $("#cash").attr("readonly",false);
        }
        else{
         $("#cash").val(0); 
         $("#cash").attr("readonly",true);
        }
    });
});
</script>
@stop