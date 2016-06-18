@extends('master')
@section('menu')
@include('masteradmin.include')
@stop
@section('table')
<script type="text/javascript">
function validateprice(){
var a=document.getElementById("price").value;
var b=document.getElementById("cash").value;
var t=document.getElementById("tailor").value;
if(a<b){
  alert("incorrect value");
  document.getElementById("cash").value="";
}
}
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#sales_code').change(function(){
    var a=$("#sales_code").val();
    var b=$("#price").val();
     $.ajax({
      url:"{{url('/purchaseajax')}}",
      data:{set1:a, set2:b },
      success:function(result){
       {{-- var obj = JSON.parse(result);--}}
    $("#cash2").val(result);
  }});
}); 
});
</script>
<script>
$(document).ready(function(){
   $('#tailor').change(function(){
    var a=$('#tailor').val();
    if(a==1){
      $("#sales_code").show();
    }
    else{
       $("#sales_code").hide();
    }
  });
 });
  </script>
  <script>
$(document).ready(function(){
   $('#tailor').change(function(){
    var a=$('#tailor').val();
    if(a==1){
      $("#partial").val(1);
    }
    else{
       $("#partial").val(0);
    }
  });
 });
  </script>  <script>
$(document).ready(function(){
      $("#sales_code").hide();
    
  });

    </script>
    <script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
 <script type="text/javascript">
  $("#sales").attr("class","");
   $("#user").attr("class","");
    $("#purchase").attr("class","active");
     $("#warehouse").attr("class","");
</script>  
   
             <div class="panel panel-default">
                <div class="panel-heading" style="background-color:black;color:white"><center><b>Add PURCHASE DATA</b></center></div>

                    <div class="panel-body">
 {!! Form::open(['action'=>'purchasecontroller@store','name'=>'create']) !!}
 @include('purchase.form',['button'=>'INSERT'])
            @include('errors.list')
 {!! Form::close()!!}
      </div>
</div>
     
     
      



@stop

   