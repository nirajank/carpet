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
    
            <div class="panel panel-default">
               
                <div class="panel-heading" style="background-color:black;color:white"><center><b>Add SALES DATA</b></center></div>

                    <div class="panel-body">
                     

      {!! Form::open(['action'=>'cash@store']) !!}
           @include('cash.form',['button'=>'INSERT'])
            @include('errors.list')
        {!! Form::close()!!}
    </div>
     </div>
        
     
    
  <!-- Modal -->
  @stop