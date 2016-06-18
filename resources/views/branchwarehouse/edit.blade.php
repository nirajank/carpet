@extends('master')
@section('menu')
@include('branchwarehouse.include')
@stop
@section('table')
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:black;color:white"><center><b>EDIT WAREHOUSE DATA</b></center></div>

                    <div class="panel-body">
       {!! Form::model($data, ['method'=>'PATCH', 'action'=>['branchwarehousecontroller@update',$data->Design_Code]]) !!}
         @include('branchwarehouse.edit_form',['button'=>'EDIT'])
        @include('errors.list')
        {!! Form::close()!!}
    </div>
     </div>
      </div>
       </div>

@stop