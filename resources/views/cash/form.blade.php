<fieldset>
            
            <div class="form-group">
                <label><b>PETTY CASH</b></label>
                 {!! Form::text('petty_cash',null,array('class'=>'form-control','id'=>'petty_cash')) !!}
            </div>

             <div class="form-group">
                <label><b>DATE</b></label>
                {!! Form::input('date','date_tran',date('Y-m-d'),array('class'=>'form-control','id'=>'date_tran') )!!}
            </div>
          
            <div class="form-group">
                {!! form::submit($button,[' class'=>'btn btn-primary form-control'])!!}
          
         </div>
 </fieldset>