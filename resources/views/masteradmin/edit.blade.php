@extends('master')
@section('menu')
@include('masteradmin.include')
@stop
@section('table')
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:black;color:white"><center><b>EDIT USER DATA</b></center></div>

                    <div class="panel-body">
        {!! Form::model($data, ['method'=>'PATCH', 'action'=>['superadmincontroller@update',$data->id]]) !!}
          @include('masteradmin.form',['button'=>'EDIT'])
        @include('errors.list')
        {!! Form::close()!!}
    </div>
       </div>

@stop

