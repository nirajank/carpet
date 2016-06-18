@extends('master')
@section('section')
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b>EDIT WAREHOUSE</b></center></div>

                    <div class="panel-body">

        {!! Form::open(['method'=>'PATCH', 'action'=>['warehousecontroller@update',$data->id]]) !!}
          <fieldset>
            <div class="form-group">
                <label><b>ITEM NAME</b></label>
                {!! Form::text('Item_Name',null,array('class'=>'form-control') !!}
            </div>
            <div class="form-group">
                <label><b>ITEM SIZE</b></label>
                {!! Form::text('Item_size',null,array('class'=>'form-control') !!}
            </div>
            <div class="form-group">
                <label><b>DESIGN CODE</b></label>
                {!! Form::text('Design_code',null,array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
                <label><b>COLOR</b></label>
                {!! Form::text('color',null,array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
                <label><b>BRANCH ID</b></label>
                {!! Form::text('branch_id',null,array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
                {!! form::submit('INSERT',[' class'=>'btn btn-primary form-control'])!!}
            </div>
        </fieldset>
        @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
        {!! Form::close()!!}
    </div>
     </div>
      </div>
       </div>

@stop
