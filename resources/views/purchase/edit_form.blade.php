<fieldset style="border-style: dotted;">
            
            <div class="form-group">
                <label><b>ITEM NAME</b></label>
                 {!! Form::text('item_name',null,array('class'=>'form-control','id'=>'item_name')) !!}
            </div>
     <div class="form-group">
                <span style="margin-left:20px"><b>GOODS STATUS</b></span><br>
                <span style="margin-left:0px"> 
                      {!! Form::select('Gg_Gng', array('1'=>'GOODS GET','0'=>'GOODS NOT GET') ,$data->Gg_Gng, array('id' => 'Gg_Gng')) !!}</span>
            </div>
            <div class="form-group">
            <span>
                <span><b>PARTIAL/FULL MODE:</b></span>
              <span>   {!! Form::select('partial', array('1'=>'partial','0'=>'full') ,$data->partial, array('id' => 'partial')) !!}</span>
                        </div>
          <div class="form-group">
                <label><b>DATE</b></label>
                {!! Form::input('date','date_tran',date('Y-m-d'),array('class'=>'form-control','id'=>'date_tran') )!!}
            </div>       
            <div class="form-group"  style="width:80px;">
                {!! form::submit($button,[' class'=>'btn btn-primary form-control'])!!}
          
         </div>
 </fieldset>