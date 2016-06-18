
<fieldset>
            <div class="form-group">
                <label><b>ITEM NAME</b></label>
                {!! Form::text('Item_Name',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
            <div class="form-group">
                <label><b>ITEM SIZE</b></label>
                {!! Form::text('Item_size',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
            <div class="form-group">
                <label><b>DESIGN CODE</b></label>
                {!! Form::text('Design_Code',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
            <div class="form-group">
                <label><b>BRANCH CODE</b></label>
               {!!Form::select('Branch_Code', $Branch_Code, $Branch_Code,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                <label><b>COLOR</b></label>
                {!! Form::text('color',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
            <div class="form-group" style="width:80px">
                {!! form::submit($button,[' class'=>'btn btn-primary form-control'])!!}
            </div>
        </fieldset>