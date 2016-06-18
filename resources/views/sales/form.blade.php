<fieldset>
            
            <div class="form-group">
                <label><b>ITEM NAME</b></label>
                 {!!Form::select('item_name', $Item_Name, $Item_Name,['class'=>'form-control','id'=>'item_name'])!!}
            </div>
            <div class="form-group">
                <label><b>ITEM SIZE</b></label>
                 {!!Form::select('item_size', $Item_size, null,['class'=>'form-control','id'=>'item_size','readonly' => true])!!}
            </div>
            <div class="form-group">
                <label><b>MARKED PRICE</b></label>
                {!! Form::text('original_price',null,array('class'=>'form-control','id'=>'original_price')) !!}
                <i style="color:red;">{{$errors->first('original_price')}}</i>
            </div>
            <div class="form-group">
                <label><b>DISCOUNT</b></label>
                {!! Form::text('discount',null,array('class'=>'form-control','id'=>'dis')) !!}
                <i style="color:red;">{{$errors->first('discount')}}</i>
            </div>
            <div class="form-group">
                 <label><b>DISCOUNTED PRICE</b></label>
                {!! Form::text('discounted_price',null,array('class'=>'form-control','readonly' => true,'id'=>'ff')) !!}
                <i style="color:red;">{{$errors->first('discounted_price')}}</i>
            </div>
             <div class="form-group">
            <div class="form-group">
                <span><b>RETURN STATUS</b><span style="margin-left:20px"><b>GOODS STATUS</b><br>
                {!! Form::select('Return_status', array('0'=>'NOT RETURN') ,'default', array('id' => 'Return_status')) !!}</span>
                <span style="margin-left:0px"> 
                      {!! Form::select('Gg_Gng', array('1'=>'GOODS GET','0'=>'GOODS NOT GET') ,'default', array('id' => 'Gg_Gng')) !!}</span>
            </div>
            <span>
                <span><b>PARTIAL/FULL MODE:</b></span>
              <span>   {!! Form::select('p_payment_or_f_payment', array('2'=>'partial','1'=>'full') ,'1', array('id' => 'p_payment_or_f_payment')) !!}</span>
                                  <span style="margin-left:10px">ENTER RECEIVED CASH:</span> <span>{!! Form::text('cash',null,array('value'=>0,'id'=>'cash','onchange'=>'validatecash()')) !!}</span>
                           </span> </div>
               <div class="form-group">
            <span>
                <span><b>EXCHANGE STATUS:</b></span>
              <span>   {!! Form::select('exchange_Status', array('1'=>'YES','0'=>'NO'),'0', array('id' => 'exchange_Status','onchange'=>'validateprice()')) !!}</span>
              <span> {!!Form::select('sales_code', $sales_code, $sales_code,['id'=>'sales_code'])!!}</span>
              <span style="margin-left:10px">RESULT:</span> <span>{!! Form::text('cash2',null,array('value'=>0,'readonly' =>true,'id'=>'cash2','onchange'=>'validatecash()')) !!}</span>
            </div>              
             <div class="form-group">
                {!! Form::hidden('Branch_Code',$Branch_Cod,array('class'=>'form-control','id'=>'Branch_Code')) !!}
            </div>
             <div class="form-group">
                {!! Form::input('date','date_tran',date('Y-m-d'),array('class'=>'form-control','id'=>'date_tran') )!!}
            </div>          
        
        
            <div class="form-group" style="width:80px">
                {!! form::submit($button,[' class'=>'btn btn-primary form-control'])!!}
            </div>
         
        </fieldset>
      


