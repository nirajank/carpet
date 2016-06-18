@extends('master')
@section('menu')
@include('branchwarehouse.include')
@stop
@section('table')
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:black;color:white"><center><b>Add WAREHOUSE DATA</b></center></div>

                    <div class="panel-body">
      
        {!! Form::open(['action'=>'branchwarehousecontroller@store']) !!}
           @include('branchwarehouse.form',['button'=>'INSERT'])
        @include('errors.list')
        {!! Form::close()!!}

    </div>
     </div>
      </div>
       </div>

@stop

