<fieldset>
            <div class="form-group">
                <label><b> NAME</b></label>
                {!! Form::text('name',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
            <div class="form-group">
                <label><b>EMAIL</b></label>
                {!! Form::text('email',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
            <div class="form-group">
                <label><b>BRANCH CODE</b></label>
                
               {!!Form::select('Branch_Code', $Branch_Code, $Branch_Code,['class'=>'form-control'])!!}
            
            </div>
             <div class="form-group">
                <label><b>ROLE</b></label>
                   {!!Form::select('role', array('Accountant'=>'Accountant','storekeeper'=>'storekeeper')) !!}            
            </div>
            <div class="form-group">
                <label><b>STATUS</b></label>
                {!!Form::select('status', array('','1'=>'Enable','0'=>'Disable')) !!}
            </div>
            <div class="form-group" style="width:100px;">
                {!! form::submit($button,[' class'=>'btn btn-primary form-control'])!!}
            </div>
        </fieldset>
        