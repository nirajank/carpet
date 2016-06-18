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
  $("#sales").attr("class","");
   $("#user").attr("class","");
    $("#purchase").attr("class","");
     $("#warehouse").attr("class","");
      $("#branch").attr("class","active");
</script>
    
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:black;color:white"><center><b>Add BRANCH DATA</b></center></div>

                    <div class="panel-body">
      
        {!! Form::open(['action'=>'branchcontroller@store']) !!}
           @include('branch.form',['button'=>'INSERT'])
        @include('errors.list')
        {!! Form::close()!!}

    </div>
     </div>
      
@stop

