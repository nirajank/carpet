<fieldset>
            
            <div class="form-group">
                <label><b>ITEM NAME</b></label>
                 {!!Form::text('item_name',null,array('class'=>'form-control','id'=>'item_name','readonly' => true))!!}
            </div>
           <div class="form-group">
                <label><b>ITEM SIZE</b></label>
                 {!!Form::text('item_size',null,array('class'=>'form-control','id'=>'item_size','readonly' => true))!!}
            </div>
            <div class="form-group">
                <label><b>MARKED PRICE</b></label>
                {!! Form::text('original_price',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
            <div class="form-group">
                <label><b>DISCOUNT</b></label>
                {!! Form::text('discount',null,array('class'=>'form-control','id'=>'ck')) !!}
            </div>
             <div class="form-group">
                <span><b>RETURN STATUS</b><span style="margin-left:10px"><b>PARTIAL/FULL MODE</b></span><span style="margin-left:20px"><b>GOODS STATUS</b><br>
                {!! Form::select('Return_status', array('0'=>'NOT RETURN','1'=>'RETURN') ,$data->Return_status, array('id' => 'Return_status')) !!}</span>
                <span style="margin-left:10px"> 
                {!! Form::select('p_payment_or_f_payment', array('1'=>'full','2'=>'partial') ,$data->p_payment_or_f_payment, array('id' => 'p_payment_or_f_payment')) !!}</span>
                <span style="margin-left:60px"> 
                      {!! Form::select('Gg_Gng', array('1'=>'GOODS GET','0'=>'GOODS NOT GET') ,$data->Gg_Gng, array('id' => 'Gg_Gng')) !!}</span>
            </div>
        <div class="form-group">
                <label><b>DESIGN CODE</b></label>
                {!! Form::text('Design_Code',null,array('class'=>'form-control','id'=>'ck','readonly' => true,'id'=>'Design_Code')) !!}
               {{--  {!!Form::select('Design_Code', $Design_Code, $Design_Code,['class'=>'form-control','id'=>'Design_Code'])!!}--}}
            </div>
            <div class="form-group" style="width:80px">
                {!! form::submit($button,[' class'=>'btn btn-primary form-control'])!!}
            </div>
                </fieldset>


