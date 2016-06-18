
<fieldset>
            <div class="form-group">
                <label><b>BRANCH NAME</b></label>
                {!! Form::text('Branch_Name',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
            <div class="form-group">
                <label><b>CONTACT</b></label>
                {!! Form::text('Contact',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
            <div class="form-group">
                <label><b>ADDRESS</b></label>
                {!! Form::text('Address',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
            <div class="form-group" style="width:80px">
                {!! form::submit($button,[' class'=>'btn btn-primary form-control'])!!}
            </div>
        </fieldset>
    