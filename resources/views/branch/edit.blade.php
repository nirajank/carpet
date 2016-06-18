@extends('master')
@section('menu')
@include('masteradmin.include')
@stop
@section('table')
<script type="text/javascript">
  $("#sales").attr("class","");
   $("#user").attr("class","");
    $("#purchase").attr("class","");
     $("#warehouse").attr("class","");
      $("#branch").attr("class","active");
</script>
    
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:black;color:white"><center><b>EDIT BRANCH DATA</b></center></div>

                    <div class="panel-body">
        {!! Form::model($data, ['method'=>'PATCH', 'action'=>['branchcontroller@update',$data->Branch_Code]]) !!}
          @include('branch.update_form',['button'=>'EDIT'])
        @include('errors.list')
        {!! Form::close()!!}
    </div>
     </div>
      
@stop

