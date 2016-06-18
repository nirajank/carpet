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
 <script type="text/javascript">
$(document).ready(function(){
  $("#date_tran").hide();
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    var a=$("#item_name").val();
    var b=$("#Branch_Code").val();
     $("#item_size").empty();
     $.ajax({
      url:"{{url('/set2')}}",
      data:{set1:a,set2:b},
      success:function(obj){
        var i;
         for(i in obj) {
        $('#item_size').append('<option value="' + obj[i] + '">' + obj[i]+ '</option>');
      }
  }}); 
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#item_name').change(function(){
    var a=$("#item_name").val();
    var b=$("#Branch_Code").val();
     $("#item_size").empty();
     $.ajax({
      url:"{{url('/set2')}}",
      data:{set1:a,set2:b},
      success:function(obj){
        var i;
         for(i in obj) {
        $('#item_size').append('<option value="' + obj[i] + '">' + obj[i]+ '</option>');
      }
  }});
}); 
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#item_name').change(function(){
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
  $('#dis').change(function(){
    var a=$("#original_price").val();
    var b=$("#dis").val();
     $.ajax({
      url:"{{url('/set3')}}",
      data:{m:a, dis:b },
      success:function(result){
       {{-- var obj = JSON.parse(result);--}}
    $("#ff").val(result);
  }});
}); 
});
</script>

            <div class="panel panel-default">
               @if($check=='')
                      <p style="color:red">SORRY!!THERE IS NOT ANY ITEM IN THIS STORE</p>
                      @else
                <div class="panel-heading" style="background-color:black;color:white"><center><b>Add SALES DATA</b></center></div>

                    <div class="panel-body">
                     

      {!! Form::open(['action'=>'salescontroller@store','name'=>'create']) !!}
           @include('sales.form',['button'=>'INSERT'])
            @include('errors.list')
        {!! Form::close()!!}
    </div>
     </div>
        @endif
     
      
      
      

  <!-- Modal -->
<script>
$(document).ready(function(){
    $("#p_payment_or_f_payment").change(function(){
        var a=$("#p_payment_or_f_payment").val();

        if(a==2){
           $("#cash").attr("readonly",true);
        }
        else{
         $("#cash").val(0); 
         $("#cash").attr("readonly",true);
        }
    });
});
</script>
<script>
$(document).ready(function(){
    $("#dis").change(function(){
        var a=$("#dis").val();
       if(a>100){
          alert("value exceed than 100");
           $("#dis").val("");
        }
    });
});
</script>


<!--<script>
$(document).ready(function(){
    $("#exchange_Status").change(function(){
       var a=$("#exchange_Status").val();
       if(a==1){
        $("#sales_code").show();
       }
       else{

           $("#sales_code").hide();
       }
    });
});
</script>-->
<script type="text/javascript">
  $(document).ready(function(){
    $("#exchange_Status").change(function(){
       var a=$("#exchange_Status").val();
       var b=$("#ff").val();
       if(b!=0){
       if(a==1){
        $("#sales_code").show();
        $("#sales_code").change(function(){
        var fp=$("#ff").val();
        var sc=$("#sales_code").val();
         $.ajax({
         url:"{{url('/exchange')}}",
         data:{fp:fp, sc:sc },
         success:function(result){
         {{-- var obj = JSON.parse(result);--}}
          $("#cash2").val(result);
         }});
       });
       }
       else{

           $("#sales_code").hide();
            $("#cash2").val(0);
       }
     }
     else{
      alert('discounted price isnot set');
      $("#exchange_Status").val(0);
     }
    });
});
 

</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#original_price").change(function(){
    $("#dis").val(0);
    $("#ff").val(0);
  });
});
</script>
<script>
$(document).ready(function(){
           $("#sales_code").hide();
       });
</script>
@stop